@component('mail::message')
# New Extra Class Scheduled

{{-- Displaying the subject name --}}
A new class has been scheduled for the subject "{{ $schedule->teacher_course->course->subject_name }}". Here are the details:

 {{-- Displaying the class type,date,time,information about the class --}}
- Class Type: {{ $schedule->class_type }}
- Date: {{ $schedule->date }}
- Time: {{ $schedule->time }}
- About Class: {{ $schedule->about_class }}

{{-- Ending the message with a thank you note --}}
Thanks,
Your Sadhana Institute
@endcomponent