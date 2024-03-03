{{-- user pofile here - user side --}}

@extends('layouts.class_manager.post-login')

@section('dashboard-content')

<div class="content-body">
	@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
	@endif

	{{--  @if(session('success'))
        <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
            });
        </script>
    @endif  --}}

	<form class="profile-form" action="{{ route('dashboard.teacher.update', ['id' => $teachers->teacher_id]) }}" method="POST" enctype="multipart/form-data">
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
										
											{{--  <div class="author-media">
												 {{--  <img src="{{ asset('teacher_profile_photos/'. $teachers->teacher_profile_photo) }}"  id="previewImage" alt="Selected Image">    --}}

												{{--  <img src="{{ asset('images/user.jpg') }}" class="avatar avatar-xl">  
												

												<img src="{{ asset('teacher_profile_photos/'. $teachers->teacher_profile_photo) }}"  id="previewImage" alt="Selected Image"> 

												<div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
													<input type="file" id="teacher_profile_photo" class="update-flie" name="teacher_profile_photo"  onchange="previewFile()">
													<i class="fa fa-camera"></i>
												</div>
											</div>  --}}

											{{--  <div class="author-media">
												@if ($teachers->teacher_profile_photo == null)

													<img src="{{ asset('images/user.jpg') }}" class="avatar avatar-xl">													
													<div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
													<input type="file" id="teacher_profile_photo" class="update-flie" name="teacher_profile_photo"  onchange="previewFile()">
													<i class="fa fa-camera"></i>
													<img id="imagePreview" src="" alt="Preview Image" style="max-width: 100%">
													</div>
												@else
													<div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
													<input type="file" id="teacher_profile_photo" class="update-flie" name="teacher_profile_photo"  onchange="previewFile()">
													<i class="fa fa-camera"></i>
													</div>
													<img src="{{ asset('teacher_profile_photos/' . $teachers->teacher_profile_photo) }}" id="previewImage" alt="Selected Image">
												@endif  --}}

												<div class="author-media">
													@if ($teachers->teacher_profile_photo == null)
														<img src="{{ asset('images/user.jpg') }}" class="avatar avatar-xl" id="imagePreview">
													@else
														<img src="{{ asset('teacher_profile_photos/' . $teachers->teacher_profile_photo) }}" class="avatar avatar-xl" id="imagePreview">
													@endif

													<div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
														<input type="file" id="teacher_profile_photo" class="update-flie" name="teacher_profile_photo" onchange="previewFile()">
														<i class="fa fa-camera"></i>
													</div>
												</div>
													
											

											<div class="author-info">
												<h4 class="">Hi, {{ $teachers->first_name}} {{ $teachers->last_name }}</h4>
												<span>Teacher</span>
											</div>
										</div>
									</div>
									<div class="info-list">
										<ul>
                                            <li><span>Name : {{ $teachers->first_name }} {{ $teachers->last_name }}</span></li>
                                            <li><span>Teacher ID : {{ $teachers->teacher_id }}</span></li>
											<li><span>Email : {{ $teachers->email }}</span></li>
											<li><span>Contact No : {{ $teachers->contact_no }}</span></li>
                                            
                                            
											
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
								<h5 class="title">Update Teacher Profile</h5>
							</div>

                            {{-- user edit details --}}
							
								<div class="card-body">
									<div class="row">

										<div class="col-sm-6 m-b30">
											<label class="form-label">First Name</label>
											<input type="text" class="form-control" value="{{ $teachers->first_name }}" name="first_name">
										</div>

										<div class="col-sm-6 m-b30">
											<label class="form-label">Last Name</label>
											<input type="text" class="form-control" value="{{ $teachers->last_name }}" name="last_name">
										</div>

										<div class="col-sm-6 m-b30">
											<label class="form-label">Address</label>
											<input type="text" class="form-control" value="{{ $teachers->address}}" name="address">
										</div>

										<div class="col-sm-6 m-b30">
											<label class="form-label">Date of Birth</label>
											<input type="date" class="form-control" value="{{ $teachers->dob }}" name="dob">
										</div>	

										<div class="col-sm-6 m-b30">
											<label class="form-label d-block">Gender</label>
											<select class="selectpicke w-100" value="{{ $teachers->gender }}" name="gender">
												<option selected>Select Option</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>							
											</select>
										</div>

                                        <div class="col-sm-6 m-b30">
											<label class="form-label" label for="exampleFormControlInput6" >Phone No</label>
											<input type="number" class="form-control" id="exampleFormControlInput6" value="{{$teachers->contact_no}}" name="contact_no">
                                            <div class="invalid-feedback">
                                                Please enter a 10-digit contact number.
                                            </div>
										</div>

                                        <div class="col-sm-6 m-b30">
											<label class="form-label">Email address</label>
											<input type="text" class="form-control" value="{{$teachers->email}}" name="email">
										</div> 

										{{--  <div class="col-sm-6 m-b30">
											
											<div class="mb-3">
												<label class="form-label">Select Subjects</label>
												@foreach($courses as $course)
													<div class="form-check">
														<input type="checkbox" class="form-check-input" id="course_{{ $course->id }}" name="courses[]" value="{{ $course->id }}">
														<label class="form-check-label" for="course_{{ $course->id }}">{{ $course->grade }} - {{ $course->subject_name }} - {{ $course->medium }}</label>
													</div>
												@endforeach
											</div>
											
										</div>   --}}

										<div class="col-sm-6 m-b30">
										{{-- Stream details --}}
										<div class="mb-3">
											<label class="form-label">Select Subjects</label>
											@foreach($courses as $course)
												<div class="form-check">
													{{-- Check if the teacher has the course associated --}}
													@php
														$isChecked = $teachers->courses->contains('id', $course->id);
													@endphp

													<input type="checkbox" class="form-check-input" id="course_{{ $course->id }}" name="courses[]" value="{{ $course->id }}" {{ $isChecked ? 'checked' : '' }}>
													<label class="form-check-label" for="course_{{ $course->id }}">{{ $course->grade }} - {{ $course->subject_name }} - {{ $course->medium }}</label>
												</div>
											@endforeach
										</div>
									</div>
										

                                       

                                        

                                       

									</div>
								</div>
								@can('update_teacher')
									<div class="card-footer">
									<button class="btn btn-primary" button type="submit">UPDATE</button>									
								</div>
								@endcan							
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
                        </form>
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
</script>


<script>
	{{--  function previewFile() {
        var preview = document.getElementById('previewImage');
        var fileInput = document.getElementById('teacher_profile_photo');
        var file = fileInput.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    }  --}}


	function previewFile() {
        var preview = document.getElementById('imagePreview');
        var fileInput = document.getElementById('teacher_profile_photo');
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