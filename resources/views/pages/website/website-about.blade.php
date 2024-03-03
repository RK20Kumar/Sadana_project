@extends('layouts.website.app')

@section('about')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p> </p>
      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= About Section ======= -->

    {{-- import about componontes --}}
    @include('components.website.about')

    <!-- End About Section -->

    @endsection
