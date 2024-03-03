

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-center">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Schedule Online Session</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">

              <form action="{{ route('dashboard.online-class.add') }}" method="POST">
                @csrf
                  <label class="form-label">Classes Title</label>
                  <div class="mb-2">
                      <input type="text" class="form-control single-input" placeholder="Title" name="title">
                  </div>

                  <label class="form-label">Select Class</label>
                  <select class="default-select form-control wide mb-3"  name="teacher_courses" >
                      <option>Select the Class</option>
                      @foreach ($teacher_courses as $teacher_course)
                      <option value="{{ $teacher_course->id }}">{{ $teacher_course->course->grade }}-{{ $teacher_course->course->subject_name }}-{{ $teacher_course->teacher->first_name}} Sir-{{ $teacher_course->course->medium}} Medium</option>
                      @endforeach

                  </select>
                  
                        <div class="mb-3">
                      <label class="form-label">Set Date</label>
                      <input name="datepicker" class="datepicker-default form-control" id="datepicker" name="date">
                  </div>
                  


                  <div class="mb-3">
                  <label class="form-label">Auto btn-close Clock Picker</label>
                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autobtn-close="true">
                          <input type="text" class="form-control" value="13:14"> 
											    <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </div>
                  </div>


                  
                    

                  <label class="form-label">About Class</label>
                  <div class="mb-3">
                      <textarea class="form-control" rows="4" id="comment" name="about_class"></textarea>
                  </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
