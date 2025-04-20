<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Candidate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Barryvdh\DomPDF\Facade\Pdf;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // Create admin
        for ($i = 1; $i <= 2; $i++) {
            User::create([
                'name' => "Admin $i",
                'email' => "admin$i@gmail.com",
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]);
        }

        // Create candidates
        $candidates = [['name' => 'Empty Box', 'election_number' => 1], ['name' => 'Alex Johnson - Richard Henry', 'election_number' => 2], ['name' => 'Sarah Smith - David Johnson', 'election_number' => 3]];

        $candidateIds = [];

        foreach ($candidates as $candidate) {
            $pictureFilename = Str::random(10) . '.jpg';
            $resumeFilename = Str::random(10) . '.pdf';

            $picturePath = 'candidate-pictures/' . $pictureFilename;
            $resumePath = 'candidate-resumes/' . $resumeFilename;

            // download random image
            $gender = $faker->randomElement(['men', 'women']);
            $imageUrl = "https://randomuser.me/api/portraits/{$gender}/" . rand(1, 99) . '.jpg';
            $imageContent = file_get_contents($imageUrl);

            // save to storage/public
            Storage::disk('public')->put($picturePath, $imageContent);
            
            $pdf = Pdf::loadHTML('<h1>Fake Resume</h1><p>This is a dummy resume for testing.</p>');
            Storage::disk('public')->put($resumePath, $pdf->output());

            // create candidate
            $created = Candidate::create([
                'name' => $candidate['name'],
                'election_number' => $candidate['election_number'],
                'picture' => $picturePath,
                'resume' => $resumePath,
                'total_voter' => 0,
            ]);

            $candidateIds[] = $created->id;
        }

        // Create voters with choices
        for ($i = 1; $i <= 50; $i++) {
            $choice = $faker->randomElement($candidateIds);

            User::create([
                'name' => "Voter $i",
                'email' => "voter$i@gmail.com",
                'password' => bcrypt('password'),
                'role' => 'Voter',
                'choice' => $choice,
            ]);

            Candidate::where('id', $choice)->increment('total_voter');
        }

        // Create voters without choices
        for ($i = 51; $i <= 100; $i++) {
            User::create([
                'name' => "Voter $i",
                'email' => "voter$i@gmail.com",
                'password' => bcrypt('password'),
                'role' => 'Voter',
                'choice' => null,
            ]);
        }
    }
}
