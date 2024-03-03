<?php

namespace App\Mail;

use App\Models\Student;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudentRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $student;

    /**
     * Create a new message instance.
     *
     * @param  Student  $student
     * @return void
     */
    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Student Registration')
                    ->view('emails.student-registration');
    }
}
