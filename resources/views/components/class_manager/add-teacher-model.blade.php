{{-- Add teacher popup model code here --}}



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-center">
		<form action="{{ route('dashboard.teacher.register') }}" method="POST" enctype="multipart/form-data">
		@csrf
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Teacher Registration Form</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				{{-- register form data --}}
				<div class="modal-body">
					<div class="row">
						<div class="col-xl-12">
							
							{{-- add profile photo --}}
							<div class="mb-3">
							
								<div class="author-media">
									<img src="{{ asset('images/user.jpg') }}" class="avatar avatar-xl" id="imagePreview">
									<br>
									<div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
										
										<input type="file" id="teacher_profile_photo" class="update-flie" name="teacher_profile_photo" onchange="previewFile()">
										
										
									</div>
								</div>
							</div>
							
							{{-- first name --}}
							<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label mb-2">First Name</label>
							<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="first_name" required>
							</div>

							{{-- last name --}}
							<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label mb-2">Last Name</label>
							<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="last_name" required>
							</div>

							{{-- address --}}
							<div class="mb-3">
							<label for="exampleFormControlInput4" class="form-label mb-2">Address</label>
							<input type="text" class="form-control" id="exampleFormControlInput4" placeholder="" name="address" required>
							</div>

							{{-- date of birth --}}
							<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label mb-2">Date of Birth</label>
							<input type="date" class="form-control" id="exampleFormControlInput1" placeholder="" name="dob" required>
							</div>

							{{-- gender --}}
							<div class="mb-3">
							<label  class="form-label mb-2">Gender</label>						
							<select class="default-select wide" aria-label="Default select example" name="gender" required>
								<option selected>Select Option</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
							</div>
							
							{{-- email --}}
							<div class="mb-3">
							<label for="exampleFormControlInput2" class="form-label mb-2">Email</label>
							<input type="email" class="form-control" id="exampleFormControlInput2" placeholder="" name="email" required>
							</div>

							{{-- contact no --}}							
							<div class="mb-3">
							<label for="exampleFormControlInput6" class="form-label mb-2">Contact Number</label>
							<input type="number" class="form-control" id="exampleFormControlInput6" placeholder="" name="contact_no" required>
								<div class="invalid-feedback">
                                    Please enter a 10-digit contact number.
                                </div>
							</div>

							

							{{-- Stream details --}}
							<div class="mb-3">
								<label class="form-label">Select Subjects</label>
								@foreach($courses as $course)
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="course_{{ $course->id }}" name="courses[]" value="{{ $course->id }}" >
										<label class="form-check-label" for="course_{{ $course->id }}">{{ $course->grade }} - {{ $course->subject_name }} - {{ $course->medium }}</label>
									</div>
								@endforeach
							</div>	

						</div>
					</div>
				</div>	
					<div class="modal-footer">
						<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
			</div>
		</form>
	</div>
</div>



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
    var fileInput = document.getElementById('teacher_profile_photo');
    var file = fileInput.files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        if (file) {
            preview.src = reader.result;
        } else {
            preview.src = '{{ asset('images/user.jpg') }}';
        }
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = '{{ asset('images/user.jpg') }}';
    }
}




</script>


@endpush