{{-- post login (dashboard) layout code here --}}

@extends('layouts.class_manager.app')


@section('content')



{{-- Preloader start --}}

	<div id="preloader">
		<div class="loader">
			<div class="dots">
				<div class="dot mainDot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>
	</div>

{{-- Preloader end --}}

{{-- main wrapper start --}}

<div id="main-wrapper" {{-- class="wallet-open active" --}}>

    {{-- topnav bar start--}}
    @include('components.class_manager.topnav')
    {{-- topnav bar end--}}


    {{-- Chat box start --}}
    {{--Chat box end--}}


    {{-- Sidebar start --}}
    @include('components.class_manager.sidenav')
    {{-- Sidebar end --}}


    {{-- Wallet sidebar start --}}
    {{-- @include('components.class_manager.walletsidenav') --}}
    
    {{-- Wallet sidebar end --}}


    {{-- Content body start --}}
    @yield('dashboard-content')
    {{-- Content body end --}}


    {{-- Footer start --}}
    @include('components.class_manager.footer')
    {{-- Footer end --}}


{{-- Main wrapper end --}}


{{-- add student/add teacher/recent add student modal form --}}

@if(Route::currentRouteName() == 'dashboard.student.home')
    @include('components.class_manager.add-student-model')
@elseif(Route::currentRouteName() == 'dashboard.teacher.home')
    @include('components.class_manager.add-teacher-model')
@elseif(Route::currentRouteName() == 'dashboard.course.home')
    @include('components.class_manager.add-class-model')
@elseif(Route::currentRouteName() == 'dashboard.user.home')
    @include('components.class_manager.add-user-model')
@elseif(Route::currentRouteName() == 'dashboard.online-class.home')
    @include('components.class_manager.add-online-class-model')
@elseif(Route::currentRouteName() == 'dashboard.schedule.home')
    @include('components/class_manager/add-class-schedule-model')
@endif



@endsection



