@extends('layouts.class_manager.post-login')

@section('dashboard-content')
    <div class="content-body">
        <div class="container-fluid">
        <!-- Edit schedule form -->
        <form action="{{ route('dashboard.schedule.update', ['id' => $schedule->id]) }}" method="post">
        @csrf
        <label class="form-label">Class Type</label>
        <select class="default-select form-control wide mb-3" name="class_type" value="{{ $schedule->class_type }}">
                 <option>Select the Class Type</option>
                 <option>Permanent Class</option>
                 <option>Extra Class</option>
        </select>
        <!-- Input for class title -->
        <label class="form-label">Class Title</label>
             <div class="mb-2">
                 <input type="text" class="form-control single-input" placeholder="Title" name="title" value="{{ $schedule->title }}">
             </div>
             <!-- Select subject for the class -->
             <label class="form-label">Select Subject</label>
             <select class="default-select form-control wide mb-3"  name="teacher_courses" >
                 <option>Select the Class</option>
                 @foreach ($teacher_courses as $teacher_course)
                 <option value="{{ $teacher_course->id }}">{{ $teacher_course->course->grade }}-{{ $teacher_course->course->subject_name }}-{{ $teacher_course->teacher->first_name}} Sir-{{ $teacher_course->course->medium}} Medium</option>
                 @endforeach
             </select>
             <!-- Set date for the session -->
             <div class="mb-3">
               <label for="exampleFormControlInput1" class="form-label mb-2">Set Date</label>
               <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="" name="date" value="{{ $schedule->date }}">
             </div>
             <!-- Set time for the session -->
             <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label mb-2">Set Time</label>
                <input type="time" class="form-control" id="exampleFormControlInput2" name="time" value="{{ $schedule->time }}">
             </div>
             <!-- Input for describing the class -->
             <label class="form-label">About Class</label>
             <div class="mb-3">
                 <!-- Textarea for providing information about the class -->
                 <textarea class="form-control" rows="4" id="comment" name="about_class" value="{{ $schedule->about_class }}"></textarea>
             </div>
                  <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Update Schedule</button>
        </form>
    </div>
  </div>
</div>
@endsection