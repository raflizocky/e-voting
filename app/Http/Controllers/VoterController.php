<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VoterController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->choice !== null) {
            return redirect()->route('voter.result');
        }

        $candidates = Candidate::orderBy('election_number')->get();

        return view("voter.index", [
            'title' => 'E-Voting | Election Page',
            'candidates' => $candidates
        ]);
    }

    public function store(Request $request)
    {
        $candidateId = $request->input('candidate_id');

        $user = auth()->user();

        if ($user instanceof User && $candidateId !== null) {
            if ($user->choice) {
                return redirect()->route('voter.result');
            }

            $candidate = Candidate::findOrFail($candidateId);

            $user->choice = $candidate->election_number;
            $user->save();
        }

        return redirect()->route('voter.result');
    }

    public function result()
    {
        $user = auth()->user();

        if ($user->choice) {
            $candidateVoteData = Candidate::pluck('total_voter', 'election_number')->toArray();

            return view('voter.result', [
                'title' => 'E-Voting | Election Results Page',
                'candidateVoteData' => $candidateVoteData
            ]);
        } else {
            return view('voter.index', [
                'title' => 'E-Voting | Election Page'
            ]);
        }
    }
    public function show($id)
    {
        $candidate = Candidate::findOrFail($id);

        $pdfPath = storage_path('app/public/candidate-resumes/' . $candidate->resume);

        if (!File::exists($pdfPath)) {
            abort(404);
        }

        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $candidate->resume . '"',
        ];

        return response()->file($pdfPath, $headers);
    }
}
