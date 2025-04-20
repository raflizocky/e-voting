<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidate;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Mail\VotingReportMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

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

    public function generatePdf()
    {
        $data = [
            'totalVoters' => User::where('role', 'voter')->count(),
            'votersWhoVoted' => User::where('role', 'voter')->whereNotNull('choice')->count(),
            'votersNotVoted' => User::where('role', 'voter')->whereNull('choice')->count(),
            'candidateVoteData' => Candidate::pluck('total_voter', 'election_number')->toArray(),
            'date' => now()->format('F j, Y'),
        ];

        $pdf = Pdf::loadView('dashboard.pdf', $data);
        return $pdf->stream('voting-report-' . now()->format('Y-m-d') . '.pdf');
    }

    public function sendReportEmails(Request $request)
    {
        $data = [
            'totalVoters' => User::where('role', 'voter')->count(),
            'votersWhoVoted' => User::where('role', 'voter')->whereNotNull('choice')->count(),
            'votersNotVoted' => User::where('role', 'voter')->whereNull('choice')->count(),
            'candidateVoteData' => Candidate::pluck('total_voter', 'election_number')->toArray(),
            'date' => now()->format('F j, Y'),
        ];

        $pdf = Pdf::loadView('dashboard.pdf', $data);
        $pdfContent = $pdf->output();

        $sentCount = 0;
        $failedCount = 0;

        if ($request->sendOption === 'single') {
            $email = $request->singleEmail;

            try {
                Mail::to($email)->send(new VotingReportMail($pdfContent, $data));
                $sentCount++;
            } catch (\Exception $e) {
                $failedCount++;
                \Log::error("Failed to send email to {$email}: " . $e->getMessage());
            }

            $message = $sentCount > 0 ? "Email sent successfully to {$email}" : "Failed to send email to {$email}";
        } else {
            $recipients = User::whereIn('role', ['voter', 'admin'])
                ->whereNotNull('email')
                ->get();

            foreach ($recipients as $recipient) {
                try {
                    Mail::to($recipient->email)->send(new VotingReportMail($pdfContent, $data));
                    $sentCount++;
                } catch (\Exception $e) {
                    $failedCount++;
                    \Log::error("Failed to send email to {$recipient->email}: " . $e->getMessage());
                }
            }

            $message = "Emails sent successfully to {$sentCount} recipients. Failed: {$failedCount}";
        }

        return response()->json([
            'success' => $sentCount > 0,
            'message' => $message,
            'sent_count' => $sentCount,
            'failed_count' => $failedCount,
        ]);
    }
}
