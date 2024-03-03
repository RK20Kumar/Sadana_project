{{-- forgot password page here --}}

@extends('layouts.class_manager.pre-login')



@section('content')

<body class="body  h-100">
	<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
		<div class="login-aside text-center  d-flex flex-column flex-row-auto">
			<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
				<div class="text-center mb-lg-4 mb-2 pt-5 logo">
					<img src="images/logo-white.png" alt="">
				</div>
				<h3 class="mb-2 text-white">Welcome back!</h3>
				<p class="mb-4">AN ENDLESS VALLEY OF KNOWLEDGE</p>
			</div>
			<div class="aside-image position-relative" style="background-image:url(images/background/pic-2.png);">
				<img class="img1 move-1" src="images/background/pic3.png" alt="">
				<img class="img2 move-2" src="images/background/pic4.png" alt="">
				<img class="img3 move-3" src="images/background/pic5.png" alt="">
				
			</div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				<div class="authincation-content style-2">
					<div class="row no-gutters">
						<div class="col-xl-12 tab-content">
							<div id="sign-up" class="auth-form tab-pane fade show active  form-validation">

								<div class="mb-4 text-sm text-gray-600">
									{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
								</div>

								@if (session('status'))
									<div class="mb-4 font-medium text-sm text-green-600">
										{{ session('status') }}
									</div>
								@endif

								<x-validation-errors class="mb-4" />




								<form method="POST" action="{{ route('password.email') }}">
            						@csrf

									<div class="text-center mb-4">
										<h3 class="text-center mb-2 text-black">Forgot Password</h3>
									</div>
									<div class="mb-3">
										<label for="exampleFormControlInput1" class="form-label mb-2 fs-13 label-color font-w500">Email address</label>
									  <input type="email" class="form-control" id="exampleFormControlInput1" :value="old('email')" name="email">
									</div>
									<div>
										<br>
									</div>
									
									<button type="submit" class="btn btn-block btn-primary">Send Link</button>
									
								</form>
								<div class="new-account mt-3 text-center">
									<p class="font-w500">Remember your password? <a class="text-primary" href="{{ route('login') }}" data-toggle="tab">Login</a></p>
								</div>
							</div>
								
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection