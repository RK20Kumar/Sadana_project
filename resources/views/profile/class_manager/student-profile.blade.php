{{-- user pofile here - user side --}}

@extends('layouts.class_manager.post-login')

@section('dashboard-content')

<div class="content-body">
	<form class="profile-form" action="{{ route('dashboard.student.update', ['id' => $students->student_id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <!-- row -->
				<div class="row">
					<div class="col-xl-3 col-lg-4">
						<div class="clearfix">
							<div class="card card-bx profile-card author-profile m-b30">
								<div class="card-body">
									<div class="p-5">
										<div class="author-profile">
											<div class="author-media">
													@if ($students->student_profile_photo == null)
														<img src="{{ asset('images/user.jpg') }}" class="avatar avatar-xl" id="imagePreview">
													@else
														<img src="{{ asset('student_profile_photos/' . $students->student_profile_photo) }}" class="avatar avatar-xl" id="imagePreview">
													@endif

													<div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
														<input type="file" id="student_profile_photo" class="update-flie" name="student_profile_photo" onchange="previewFile()">
														<i class="fa fa-camera"></i>
													</div>
											</div>

											<div class="author-info">
												<h4 class="">Hi, {{ $students->first_name}} {{ $students->last_name }}</h4>
												<span>  Im Student </span>
											</div>
										</div>
									</div>
									<div class="info-list">
										<ul>
                                            <li><span>Name : {{ $students->first_name }} {{ $students->last_name }}</span></li>
                                            <li><span>Student ID : {{ $students->student_id }}</span></li>
											<li><span>Email : {{ $students->email }}</span></li>
											<li><span>Contact No : {{ $students->contact_no }}</span></li>
                                            
                                            
											
										</ul>
									</div>
								</div>
								<div class="card-footer">
									<div class="input-group mb-3">
										
									</div>
									<div class="input-group">
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-8">
						<div class="card profile-card card-bx">
							<div class="card-header">
								<h5 class="title">Update Student Profile</h5>
							</div>

                            {{-- user edit details --}}

							<form class="profile-form" action="{{ route('dashboard.student.update', ['id' => $students->student_id]) }}" method="POST">
                                @csrf
								<div class="card-body">
									<div class="row">

										<div class="col-sm-6 m-b30">
											<label class="form-label">First Name</label>
											<input type="text" class="form-control" value="{{ $students->first_name }}" name="first_name">
										</div>

										<div class="col-sm-6 m-b30">
											<label class="form-label">Last Name</label>
											<input type="text" class="form-control" value="{{ $students->last_name }}" name="last_name">
										</div>

										<div class="col-sm-6 m-b30">
											<label class="form-label">Address</label>
											<input type="text" class="form-control" value="{{ $students->address}}" name="address">
										</div>

										<div class="col-sm-6 m-b30">
											<label class="form-label">Date of Birth</label>
											<input type="date" class="form-control" value="{{ $students->dob }}" name="dob">
										</div>	

										<div class="col-sm-6 m-b30">
											<label class="form-label d-block">Gender</label>
											<select class="selectpicke w-100" value="{{ $students->gender }}" name="gender">
												<option selected>Select Option</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>							
											</select>
										</div>

                                        <div class="col-sm-6 m-b30">
											<label class="form-label" label for="exampleFormControlInput6" >Phone No</label>
											<input type="number" class="form-control" id="exampleFormControlInput6" value="{{$students->contact_no}}" name="contact_no">
                                            <div class="invalid-feedback">
                                                Please enter a 10-digit contact number.
                                            </div>
										</div>

                                        <div class="col-sm-6 m-b30">
											<label class="form-label">Email address</label>
											<input type="text" class="form-control" value="{{$students->email}}" name="email">
										</div>

										{{--  <div class="col-sm-6 m-b30">
											<label class="form-label">Select Courses</label>
											@foreach ($teacher_courses as $teacher_course)
												<div class="form-check">
													
													@php
														$teacher = $teachers->firstWhere('id', $teacher_course->teacher_id);
														$isChecked = $teacher ? $teacher->courses->contains('id', $teacher_course->course_id) : false;
													@endphp

													<input type="checkbox" class="form-check-input" id="course_{{ $teacher_course->id }}" name="teacher_courses[]" value="{{ $teacher_course->id }}" {{ $isChecked ? 'checked' : '' }}>
													<label class="form-check-label" for="course_{{ $teacher_course->id }}">
														{{ $teacher_course->course->grade }} - {{ $teacher_course->course->subject_name }} - {{ $teacher_course->teacher->first_name }} Sir - {{ $teacher_course->course->medium }} Medium
													</label>

													
												</div>
											@endforeach
										</div>  --}}

										<div class="col-sm-6 m-b30">
											<label class="form-label">Select Courses</label>
											@foreach ($teacher_courses as $teacher_course)
												<div class="form-check">
													@php
														$isChecked = $students->teacherCourses->contains('id', $teacher_course->id);
													@endphp

													<input type="checkbox" class="form-check-input" id="course_{{ $teacher_course->id }}" name="teacher_courses[]" value="{{ $teacher_course->id }}" {{ $isChecked ? 'checked' : '' }}>
													<label class="form-check-label" for="course_{{ $teacher_course->id }}">
														{{ $teacher_course->course->grade }} - {{ $teacher_course->course->subject_name }} - {{ $teacher_course->teacher->first_name }} Sir - {{ $teacher_course->course->medium }} Medium
													</label>
												</div>
											@endforeach
										</div>







										

										

										

 
										







										

                                       

                                        

                                       

									</div>
								</div>
								@can('update_student')
								<div class="card-footer">
									<button class="btn btn-primary" button type="submit">UPDATE</button>									
								</div>
								@endcan

							</form>
						</div>
					</div>
				</div>	



                {{--  <div class="col-xl-12">
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Chnage Password</h5>
						</div>   
                                             
                        <form method="POST" action="">                        
                         @method('PUT') 
                         @csrf                        
                            <div class="card-body">
                                <div class="row">                                                                   
                                    <div class="col-xl-6 col-sm-6">

                                        <div class="mb-3">
                                        <label for="current_password" class="form-label text-primary" value="{{ __('Current Password') }}">Currunt Password<span class="required">*</span></label>
                                        <input id="current_password" type="password" class="form-control" autocomplete="current-password" name="current_password" >
                                        </div>

                                        <div class="mb-3">
                                        <label for="password" class="form-label text-primary" value="{{ __('New Password') }}">New Password<span class="required">*</span></label>
                                        <input id="password" type="password" class="form-control" wire:model.defer="state.password" autocomplete="new-password" name="password" >
                                        </div>

                                        <div class="mb-3">
                                        <label for="password_confirmation" class="form-label text-primary" value="{{ __('Confirm Password') }}">Conform Password<span class="required">*</span></label>
                                        <input id="password_confirmation" type="password" class="form-control" wire:model.defer="state.password_confirmation" autocomplete="new-password" name="password_confirmation">
                                        </div>	
                                    </div> 

                                    <div class="col-xl-6 col-sm-6">

                                    </div>   

                                    
                                    

                                </div>               
                                <div class="card-footer">
                                    <button class="btn btn-primary" type ="submit">CHANGE PASSWORD</button>                                      
                                </div>

						    </div>
                        
					</div>
				</div>  --}}




        </div>
		</form>
    </div>

    
			


@endsection



@push('css')
	
<style>
	
/* Remove spinners from number input fields */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type="number"] {
  -moz-appearance: textfield; /* Firefox */
}

</style>

@endpush






@push('js')
	
<script>
  //contact number 10 digit validation
  document.addEventListener('DOMContentLoaded', function() {
    const contactNoInput = document.getElementById('exampleFormControlInput6');

    contactNoInput.addEventListener('input', function() {
      const inputValue = contactNoInput.value.trim();
      const isValidContactNo = /^\d{10}$/.test(inputValue);

      if (!isValidContactNo) {
        contactNoInput.classList.add('is-invalid');
      } else {
        contactNoInput.classList.remove('is-invalid');
      }
    });
  });


  function previewFile() {
        var preview = document.getElementById('imagePreview');
        var fileInput = document.getElementById('student_profile_photo');
        var file = fileInput.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = '{{ asset('images/user.jpg') }}'; // Set the default image source
        }
    }

</script>


@endpush