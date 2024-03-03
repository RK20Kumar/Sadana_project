{{-- post login (dashboard) layout code here --}}

@extends('layouts.lms.app')


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
    @include('components.lms.topnav')
    {{-- topnav bar end--}}


    {{-- Chat box start --}}
    {{--Chat box end--}}


    {{-- Sidebar start --}}
    @include('components.lms.sidenav')
    {{-- Sidebar end --}}


    {{-- Wallet sidebar start --}}
    {{-- @include('components.class_manager.walletsidenav') --}}
    
    {{-- Wallet sidebar end --}}


    {{-- Content body start --}}
    @yield('lms-content')
    {{-- Content body end --}}


    {{-- Footer start --}}
    @include('components.lms.footer')
    {{-- Footer end --}}


{{-- Main wrapper end --}}




@endsection



