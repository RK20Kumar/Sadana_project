{{-- attendence home page code here --}}

@extends('layouts.class_manager.post-login')


@section('dashboard-content')



<div class="content-body">
			<div class="container-fluid">
				<!-- Row -->
				<div class="row">
					<div class="col-xl-12">


{{--      
        <h1>Mark Student Attendance</h1>
        <form action="{{ route('dashboard.attendence.mark') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="attendance_date">
            </div>
            <div class="form-group">
                <label for="student_id">Student ID:</label>
                <input type="text" name="student_id" id="student_id" required>
            </div>
            <div class="form-group">
                <label for="status">Attendance Status:</label>
                <select name="status" id="status" required>
                    <option value="present">Present</option>
                    <option value="absent">Absent</option>
                </select>
            </div>
            <div class="form-group">
                <label for="teacher_course_id">Select Course:</label>
                <div class="mb-3">
								<div class="mb-3">
                                    <label class="form-label">Select Courses</label>
                                    @foreach ($teacher_courses as $teacher_course)
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="course_{{ $teacher_course->id }}" name="teacher_course" value="{{ $teacher_course->id }}">
                                            <label class="form-check-label" for="course_{{ $teacher_course->id }}">
                                                {{ $teacher_course->course->grade }} - {{ $teacher_course->course->subject_name }} - {{ $teacher_course->teacher->first_name }} Sir - {{ $teacher_course->course->medium }} Medium
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

            </div>
            <button type="submit">Mark Attendance</button>
        </form>
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif  --}}


            <!-- Your form goes here -->
            <form action="{{ route('dashboard.attendence.mark') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="teacher_course_id">Select Course:</label>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label class="form-label">Select Courses</label>
                            @foreach ($teacher_courses as $teacher_course)
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="course_{{ $teacher_course->id }}" name="teacher_course" value="{{ $teacher_course->id }}">
                                    <label class="form-check-label" for="course_{{ $teacher_course->id }}">
                                        {{ $teacher_course->course->grade }} - {{ $teacher_course->course->subject_name }} - {{ $teacher_course->teacher->first_name }} Sir - {{ $teacher_course->course->medium }} Medium
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                </div>

                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date" name="attendance_date">
                </div>
                <div class="form-group">
                    <label for="student_id">Student ID:</label>
                    <input type="text" name="student_id" id="student_id" required>
                </div>
                <div class="form-group">
                    <label for="status">Attendance Status:</label>
                    <select name="status" id="status" required>
                        <option value="present">Present</option>
                        <option value="absent">Absent</option>
                    </select>
                </div>
                
                <button type="submit">Mark Attendance</button>
            </form>
            @if(session('success'))
                <p>{{ session('success') }}</p>
            @endif




            <h1>Attendance Records</h1>
            <form action="{{ route('show') }}" method="get">
                <div class="form-group">
                    <label for="selected_date">Select Date:</label>
                    <input type="date" id="selected_date" name="selected_date" value="{{ $selectedDate }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="selected_course">Select Course:</label>
                    <select name="selected_course" id="selected_course" class="form-control">
                        <option value="">All Courses</option>
                        {{--  @foreach ($teacherCourses as $course)
                            <option value="{{ $course->id }}" {{ $selectedCourse == $course->id ? 'selected' : '' }}>{{ $course->course_name }}</option>
                        @endforeach  --}}

                        @foreach ($teacher_courses as $teacher_course)
                            <option value="{{ $teacher_course->id }}" {{ $selectedCourse == $teacher_course->id ? 'selected' : '' }}>
                                {{ $teacher_course->course->grade }} - {{ $teacher_course->course->subject_name }} - {{ $teacher_course->teacher->first_name }} Sir - {{ $teacher_course->course->medium }} Medium
                            </option>
                        @endforeach



                        

                    </select>

                </div>
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>

            @if ($attendanceRecords->count() > 0)
                <h3>Attendance Records for {{ $selectedDate }}</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Status</th>
                            <th>Attendance Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendanceRecords as $attendance)
                            <tr>
                                <td>{{ $attendance->student_id }}</td>
                                <td>{{ $attendance->student->first_name }} {{ $attendance->student->last_name }}</td>
                                <td>{{ $attendance->status }}</td>
                                <td>{{ $attendance->attendance_date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No attendance records found for {{ $selectedDate }}.</p>
            @endif










@endsection



@push('js')

<script>
    // Get all the radio buttons
    const radioButtons = document.querySelectorAll('input[type="radio"][name="teacher_course"]');

    // Add event listener to each radio button
    radioButtons.forEach(radioButton => {
        radioButton.addEventListener('change', (event) => {
            // Update the hidden field with the selected teacher_course_id
            document.getElementById('teacher_course').value = event.target.value;
        });
    });
</script>

    
@endpush