{{-- Side bar code here --}}

<div class="dlabnav">
			<div class="dlabnav-scroll">
				<ul class="metismenu mt-3" id="menu">
					{{-- Dashboard button --}}
					<li><a class=" " href="{{route('admin.dashboard')}}" aria-expanded="false">
							<i class="material-symbols-outlined">home</i>
								<span class="nav-text">Dashboard</span>
						</a>
					</li>

					{{-- Student button --}}
					<li><a class=" " href="{{route('dashboard.student.home')}}" aria-expanded="false">
						<i class="material-symbols-outlined">school</i>
							<span class="nav-text">Students</span>
					</a>


					</li>
					{{-- Teacher button --}}
					<li><a class="" href="{{route('dashboard.teacher.home')}}" aria-expanded="false">
						<i class="material-symbols-outlined">person</i>
							<span class="nav-text">Teachers</span>
						</a>
					</li>

					{{-- user button --}}
					@can('view_user')

					<li><a class="" href="{{route('dashboard.user.home')}}" aria-expanded="false">
						<i class="material-symbols-outlined">person</i>
							<span class="nav-text">Users</span>
						</a>
					</li>
					@endcan


					{{-- subject button --}}
					<li><a class=" " href="{{ route('dashboard.course.home') }}" aria-expanded="false">
						<i class="material-symbols-outlined">dataset</i>
							<span class="nav-text">Subject</span>
						</a>
					</li>

                    {{-- class button --}}
					<li><a class=" " href="{{ route('dashboard.classes.home') }}" aria-expanded="false">
						<i class="material-symbols-outlined">dataset</i>
							<span class="nav-text">Classes</span>
						</a>
					</li>

					{{-- Class Schedule button--}}

						<li><a class=" " href="{{ route('dashboard.schedule.home') }}" aria-expanded="false">
						<i class="material-icons">schedule</i>
							<span class="nav-text">Schedule</span>
						</a>
					</li>



                    {{-- Online Class button--}}
					<li><a class=" " href="{{ route('dashboard.online-class.home') }}" aria-expanded="false">
						<i class="material-icons">schedule</i>
							<span class="nav-text">Online Classes</span>
						</a>
					</li>

					{{--  Attendence button  card maker--}}

						  {{--  <li><a class=" " href="{{ route('dashboard.attendence.home') }}" aria-expanded="false">
						<i class="material-icons">edit_square </i>
							<span class="nav-text">Attendence</span>
						</a>
					</li>  --}}



					{{-- Payments button--}}

						<li><a class=" " href="{{ route('payhere') }}" aria-expanded="false">
						<i class="material-icons"> attach_money </i>
							<span class="nav-text">Payments</span>
						</a>

					</li>


					{{-- Announsment button--}}
					<li><a class=" " href="{{ route('dashboard.announcement.home') }}" aria-expanded="false">
						<i class="material-icons"> mail </i>
							<span class="nav-text">Announcements</span>
						</a>
					</li>

					{{-- LMS  --}}

						{{--  <li><a class=" " href="{{ route('dashboard.lms.home') }}" aria-expanded="false">
						<i class="material-icons"> cast_for_education </i>
							<span class="nav-text">LMS</span>
						</a>
					</li>  --}}



					{{-- Help --}}
					<li><a class=" mt-lg-4" href="javascript:void(0);" aria-expanded="false">
						<i class="material-icons">help </i>
							<span class="nav-text ">Help</span>
						</a>
					</li>

				</ul>



			</div>
        </div>



		{{-- Sidebar end --}}



@push('css')

{{-- side bar button zoom in  option --}}
<style>
    /* CSS in your external stylesheet or style block */
    .dlabnav-scroll a {
        transition: transform 0.3s ease !important; /* Apply zoom-out effect with 0.3s duration */
    }

    /* If you want to change the background color on hover */
    .dlabnav-scroll a:hover {
        transform: scale(1.2); /* Apply zoom-out effect on hover */
    }
</style>

@endpush
