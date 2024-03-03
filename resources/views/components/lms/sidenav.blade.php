{{-- Side bar code here --}}

<div class="dlabnav">
			<div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					{{-- Dashboard button --}}
					<li><a class=" " href="{{route('dashboard.lms.home')}}" aria-expanded="false">
							<i class="material-symbols-outlined">home</i>
								<span class="nav-text">Dashboard</span>
						</a>
					</li>

					{{-- Subject button --}}
					<li><a class=" " href="javascript:void(0);" aria-expanded="false">
						<i class="material-symbols-outlined">school</i>
							<span class="nav-text">Subject</span>
					</a>
					</li>

					{{-- exam button --}}
					<li><a class="" href="javascript:void(0);" aria-expanded="false">
						<i class="material-icons">edit_square </i>
							<span class="nav-text">Exam</span>
						</a>
					</li>

					{{-- time table button--}}					
						<li><a class=" " href="javascript:void(0);" aria-expanded="false">
						<i class="material-icons">schedule</i>
							<span class="nav-text">Time Table</span>
						</a>
					</li>
					
					
					{{-- Attendence button--}}
						<li><a class=" " href="javascript:void(0);" aria-expanded="false">
						<i class="material-icons">edit_square </i>
							<span class="nav-text">Attendence</span>
						</a>
					</li>
										

					{{-- Payments button--}}					
						<li><a class=" " href="javascript:void(0);" aria-expanded="false">
						<i class="material-icons"> attach_money </i>
							<span class="nav-text">Payment</span>
						</a>
					</li>

					{{-- Messages button--}}
					<li><a class=" " href="javascript:void(0);" aria-expanded="false">
						<i class="material-icons"> mail </i>
							<span class="nav-text">Massage</span>
						</a>
					</li>

					
					

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