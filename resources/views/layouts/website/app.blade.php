<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sadhan Institute</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

{{-- import css --}}
@include('libraries.webiste.styles')
</head>

<body>
{{-- header --}}
@include('components.website.header')


{{-- show content in section --}}
@yield('content')


{{-- show about page --}}
@yield('about')

{{-- show courses page --}}
@yield('courses')

{{-- show teachers page --}}
@yield('teachers')

{{-- show teachers page --}}
@yield('contact')

{{-- show registration form --}}
@yield('website_register')

{{--  @yield('success')  --}}




{{-- footer --}}
@include('components.website.footer')

{{-- import js --}}
@include('libraries.webiste.scripts')
</body>

</html>
