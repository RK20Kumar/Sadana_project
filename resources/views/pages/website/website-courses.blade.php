@extends('layouts.website.app')

@section('courses')

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <p> </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    @include('components.website.popular-course')
    <!-- End Courses Section -->

  </main><!-- End #main -->

  @endsection
