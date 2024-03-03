@extends('layouts.website.app')

@section('website_register')


<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="container">
      <h2>New Registration</h2>
      <p> </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <div><br></div>
  <div><br></div>
  <div><br></div>
  <div><br></div>
  <div><br></div>
  <div><br></div>

<div class="content-body">
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('submit_form') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <!-- Your form content here -->
                                <!-- row -->
                                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                                    <h2>Personal Info</h2>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="card">

                                            <div class="card-body">
                                                <div class="basic-form">

                                                        <div class="author-media">
                                                             <label class="form-label">Select Your Profile Photo </label>
                                                            {{--  <img src="{{ asset('images/user.jpg') }}" class="avatar avatar-xl" id="imagePreview">  --}}
                                                            <br>
                                                            <div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">										
                                                                <input type="file" id="student_profile_photo" class="update-file" name="student_profile_photo" onchange="previewFile">
                                                            </div>
                                                        </div>
                                                        <div><br></div>

                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">First Name</label>
                                                            <input type="text" class="form-control" name="first_name" required>
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" name="last_name" required>
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Date Of Birth</label>
                                                            <input type="date" class="form-control"  id="mdate" name="dob" required>
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Gender</label>
                                                            <select id="inputState" class="default-select form-control wide" name="gender" required>
                                                                <option selected>Choose</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-6 col-md-12">
                                                                <label class="form-label">Address</label>
                                                            <input type="text" class="form-control" name="address" required>
                                                            </div>
                                                        </div>
                                                        <div><br></div>
                                                        <div class="row">
                                                            <div class="mb-6 col-md-12">
                                                                <label class="form-label">Email</label>
                                                            <input type="email" class="form-control" name="email" required>
                                                            </div>
                                                        </div>
                                                        <div><br></div>
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Mobile Phone</label>
                                                                <input type="number" class="form-control" name="contact_no" required>
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">WhatsApp Number</label>
                                                                <input type="number" class="form-control" name="whatsapp_no" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-6 col-md-12">
                                                                <label class="form-label">School</label>
                                                            <input type="text" class="form-control"  name="school" required>
                                                            </div>
                                                        </div>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div><br></div>

                                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                                    <h2>Classes Info</h2>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="card">

                                            <div class="card-body">
                                                <div class="basic-form">
                                                    
                                                        <div class="row">
                                                            <div class="mb-6 col-md-12">
                                                                <label class="form-label">Select Classes</label>
                                                        @foreach ($teacher_courses as $teacher_course)
		                        							<div class="form-check">
		                        								<input type="checkbox" class="form-check-input" id="course_{{ $teacher_course->id }}" name="teacher_courses[]" value="{{ $teacher_course->id }}">
		                        								<label class="form-check-label" for="course_{{ $teacher_course->id }}">
		                        									{{ $teacher_course->course->grade }} - {{ $teacher_course->course->subject_name }} - {{ $teacher_course->teacher->first_name }} Sir - {{ $teacher_course->course->medium }} Medium
		                        								</label>
		                        							</div>
		                        						@endforeach
                                                            </div>
                                                        </div>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div><br></div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="card">

                                            <div class="card-body">
                                                <div class="basic-form">
                                                    
                                                        <label class="form-label">* Specify how you would like to pay.</label>
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <input type="radio" id="onlinePayment" name="payment_option" value="online">
                                                                <label class="form-label" for="onlinePayment">Pay Online</label>
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <input type="radio" id="manualPayment" name="payment_option" value="manual">
                                                                <label class="form-label" for="manualPayment">Manual Payment</label>
                                                            </div>
                                                        </div>
                                                        <div class="row"> 
                                                            {{--  <div class="col-md-12 d-flex justify-content-end">
                                                                <a type="submit" class="get-started-btn">Submit</a>
                                                            </div>  --}}
                                                        </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div><br></div>

                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="submit" class="get-started-btn">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div><br></div>
<div><br></div>
<div><br></div>
<div><br></div>
<div><br></div>
<div><br></div>

@endsection





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

    reader.onloadend = function () {
        if (file) {
            preview.src = reader.result;
        } else {
            preview.src = '{{ asset('images/user.jpg') }}';
        }
    };

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = '{{ asset('images/user.jpg') }}';
    }
}

</script>


@endpush