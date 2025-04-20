<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class VotingReportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdfContent;
    public $totalVoters;
    public $votersWhoVoted;
    public $votersNotVoted;
    public $candidateVoteData;
    public $date;

    /**
     * Create a new message instance.
     */
    public function __construct($pdfContent, $data)
    {
        $this->pdfContent = $pdfContent;
        $this->totalVoters = $data['totalVoters'];
        $this->votersWhoVoted = $data['votersWhoVoted'];
        $this->votersNotVoted = $data['votersNotVoted'];
        $this->candidateVoteData = $data['candidateVoteData'];
        $this->date = $data['date'];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Voting Report - ' . now()->format('F Y'));
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(view: 'dashboard.email');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [Attachment::fromData(fn() => $this->pdfContent, 'voting-report.pdf')->withMime('application/pdf')];
    }
}
