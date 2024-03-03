{{-- login page code here --}}

@extends('layouts.class_manager.pre-login')



@section('content')




<body class="body  h-100">
	<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
		<div class="login-aside text-center  d-flex flex-column flex-row-auto">
			<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
				<div class="text-center mb-lg-4 mb-2 pt-5 logo">
					{{--  <img src="images/logo-white.png" alt="">  --}}
					<div><br></div>
            <h1 class="logo me-auto" style="margin-left: 10px;"><a href="{{ route('home') }}">   <img src="{{ asset('assets\img\sadana\logo-white.png') }}" alt="Sadhana Logo"></a></h1>
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

										<x-validation-errors class="mb-4" />

										@if (session('status'))
											<div class="mb-4 font-medium text-sm text-green-600">
												{{ session('status') }}
											</div>
										@endif


										

									<form method="POST" action="{{ route('login') }}">
            							@csrf
										<div class="text-center mb-4">
											<h3 class="text-center mb-2 text-black">Login</h3>	
										</div>
										{{-- 
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label mb-2 fs-13 label-color font-w500">Admin</label>
											<select class="form-control" id="exampleFormControlSelect1" >
												<option>Select</option>
												<option>Admin</option>
												<option>Manager</option>
												<option>Operator 1</option>
												<option>Operator 2</option>
											</select>
										</div>
										 --}}
										
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label mb-2 fs-13 label-color font-w500">Username</label>
											<input type="text" class="form-control" id="email" value="" name="email">
										</div>
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label mb-2 fs-13 label-color font-w500">Password</label>
											<input type="password" class="form-control" id="exampleFormControlInput2" value="" name="password">
										</div>
										

										@if (Route::has('password.request'))
											<a class="text-primary float-end mb-4" 
											href="{{ route('password.request') }}">
												{{ __('Forgot your password?') }}
											</a>
										@endif
										
										<button class="btn btn-block btn-primary">Login</button>

										



										
									</form>
									
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection