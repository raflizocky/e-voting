<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidate;

class DashboardController extends Controller
{
    public function index()
    {
        $totalVoters = User::where('role', 'voter')->count();
        $votersWhoVoted = User::where('role', 'voter')->whereNotNull('choice')->count();
        $votersNotVoted = User::where('role', 'voter')->whereNull('choice')->count();
        $candidateVoteData = Candidate::pluck('total_voter', 'election_number')->toArray();

        return view('dashboard.index', [
            'title' => 'E-Voting | Dashboard',
            'totalVoters' => $totalVoters,
            'votersWhoVoted' => $votersWhoVoted,
            'votersNotVoted' => $votersNotVoted,
            'candidateVoteData' => $candidateVoteData,
        ]);
    }
}
