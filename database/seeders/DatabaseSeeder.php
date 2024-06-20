<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Candidate;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin users
        User::create([
            'name' => 'Admin 1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Admin 2',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Create Voter users
        $VoterData = [
            ['Voter 1', 'A', 'Voter1@gmail.com'],
            ['Voter 2', 'B', 'Voter2@gmail.com'],
            ['Voter 3', 'A', 'Voter3@gmail.com'],
            ['Voter 4', 'B', 'Voter4@gmail.com'],
            ['Voter 5', 'A', 'Voter5@gmail.com'],
        ];

        foreach ($VoterData as $data) {
            User::create([
                'name' => $data[0],
                'email' => $data[2],
                'password' => bcrypt('password'),
                'role' => 'Voter',
            ]);
        }

        // Create Candidate records
        Candidate::create([
            'name' => 'Empty Box',
            'election_number' => 1,
        ]);
        Candidate::create([
            'name' => 'Alex Johnson - Richard Henry',
            'election_number' => 2,
        ]);
        Candidate::create([
            'name' => 'Sarah Smith - David Johnson',
            'election_number' => 3,
        ]);
    }
}
