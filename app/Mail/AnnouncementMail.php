<?php

namespace App\Mail;

use App\Models\Announcement;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AnnouncementMail extends Mailable
{
    use Queueable, SerializesModels;

    public $announcement;

    /**
     * Create a new message instance.
     * 
     * 
     */
    public function __construct(Announcement $announcement)
    {
        $this->announcement = $announcement;
    }


    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->subject('New Announcement')->view('emails.announcement'); // Create the corresponding Blade view
    }




}