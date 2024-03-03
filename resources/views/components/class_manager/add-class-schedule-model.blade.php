<!-- Modal for scheduling a session -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <!-- The modal dialog for centering content within the modal --> 
    <div class="modal-dialog modal-dialog-center">
       <div class="modal-content">
         <!-- Modal header -->
         <div class="modal-header">
           <h1 class="modal-title fs-5" id="exampleModalLabel">Schedule Session</h1>
           <!-- Close button for the modal -->
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <!-- Modal body containing the scheduling form -->
         <div class="modal-body">
            <div class="row">
               <!-- Form for scheduling a session -->
               <form action="{{ route('dashboard.schedule.add') }}" method="POST" >
                 @csrf<!-- Cross-site request forgery protection token -->
                 <!-- Select class type -->
                 <label class="form-label">Class Type</label>
                 <select class="default-select form-control wide mb-3" name="class_type">
                      <option>Select the Class Type</option>
                      <option>Permanent Class</option>
                      <option>Extra Class</option>
                  </select>
                  <!-- Input for class title -->
                  <label class="form-label">Class Title</label>
                  <div class="mb-2">
                      <input type="text" class="form-control single-input" placeholder="Title" name="title">
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
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="" name="date">
                  </div>
                  <!-- Set time for the session -->
                  <div class="mb-3">
                     <label for="exampleFormControlInput2" class="form-label mb-2">Set Time</label>
                     <input type="time" class="form-control" id="exampleFormControlInput2" name="time">
                  </div>
                  <!-- Input for describing the class -->
                  <label class="form-label">About Class</label>
                  <div class="mb-3">
                      <!-- Textarea for providing information about the class -->
                      <textarea class="form-control" rows="4" id="comment" name="about_class"></textarea>
                  </div>
             </div>
          </div>
          <div class="modal-footer">
            <!-- Button for closing the modal -->
            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
            <!-- Button for submitting the form -->
            <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
    </div>
  </div>
