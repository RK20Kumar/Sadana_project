<?php

namespace App\Mail;

use App\Models\Teacher;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TeacherRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $teacher;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return void
     */
    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.teacher-registration')
                    ->with([ 'teacher' => $this->teacher,])
                    ->subject('Teacher Registration Confirmation');
    
    }
}