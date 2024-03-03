
@extends('layouts.website.app')   {{-- connect app.blade.php --}}

  @section('content')  {{-- get content to section --}}



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2></h2>
      <a href="{{ route('website_register') }}" class="get-started-btn">Register</a> {{-- register form --}}
    </div>
  </section><!-- End Hero -->


  <main id="main">

    {{--  <!-- ======= About Section ======= -->  --}}

    @include('components.website.about')

    <!-- End about Section -->





    {{--  <!-- ======= Counts Section ======= -->  --}}

    @include('components.website.count')

    <!-- End Counts Section -->



    {{--  <!-- ======= Why Us Section ======= -->  --}}

    @include('components.website.whyus')

    <!-- End Why Us Section -->




    {{--  <!-- ======= Popular Courses Section ======= -->  --}}

    @include('components.website.popular-course')

    <!-- End Popular Courses Section -->




    {{--  <!-- ======= teachers Section ======= -->  --}}

    @include('components.website.teachers')

    <!-- End teachers Section -->



  </main><!-- End #main -->




  <!-- ======= Footer ======= -->

  </footer><!-- End Footer -->




  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  @endsection
