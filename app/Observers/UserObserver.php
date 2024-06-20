<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Candidate;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        //
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        if ($user->isDirty('choice')) {
            $previousElectionNumber = $user->getOriginal('choice');
            $newElectionNumber = $user->choice;

            if ($previousElectionNumber !== null) {
                $previousCandidate = Candidate::where('election_number', $previousElectionNumber)->first();
                if ($previousCandidate) {
                    $totalVoter = $previousCandidate->total_voter ?? 0;
                    if ($totalVoter > 0) {
                        $previousCandidate->total_voter = $totalVoter - 1;
                        $previousCandidate->save();
                    }
                }
            }

            if ($newElectionNumber !== null) {
                $newCandidate = Candidate::where('election_number', $newElectionNumber)->first();
                if ($newCandidate) {
                    $totalVoter = $newCandidate->total_voter ?? 0;
                    $newCandidate->total_voter = $totalVoter + 1;
                    $newCandidate->save();
                }
            }
        }
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        if ($user->choice !== null) {
            $candidate = Candidate::where('election_number', $user->choice)->first();
            if ($candidate) {
                $totalVoter = $candidate->total_voter ?? 0;
                if ($totalVoter > 0) {
                    $candidate->total_voter = $totalVoter - 1;
                    $candidate->save();
                }
            }
        }
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
