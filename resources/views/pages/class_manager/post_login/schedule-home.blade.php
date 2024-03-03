{{-- Schedule home page code here --}}

<!-- Extends a layout for post-login views -->
@extends('layouts.class_manager.post-login')

 <!-- Define the content section of the layout -->
@section('dashboard-content')

<div class="content-body ">
    <div class="container-fluid">
        <!-- Container for the main content -->
        <!-- row -->
        <div class="row">
            <div class="col-xl-12">
                 <!-- Column for page title and search area -->
                <div class="page-title flex-wrap">
                    <div class="input-group search-area mb-md-0 mb-3">
                    <!-- Input for search -->
                    <input type="text" class="form-control" placeholder="Search here...">
                    <span class="input-group-text"><a href="javascript:void(0)">
                         <svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z" fill="#01A3FF"/>
                         </svg>
                      </a>
                    </span>
                    </div>
                    <div>
                        @can('schedule')
                        <!-- Button to schedule a session -->
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         + Schedule Session
                        </button>
                        @endcan
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-4">
                <!-- Column for schedule list -->
                <div class="card">
                    <div class="card-header  border-0 pb-0">
                        <h4 class="card-title">Announcement</h4>
                    </div>
                    <div class="card-body p-0">
                        <div id="DZ_W_Todo1" class="widget-media dlab-scroll height450 my-4 px-4">
                            <!-- Timeline list of schedules -->
                            <ul class="timeline">
                             @foreach ($schedules as $schedule)
                             <!-- Loop through schedules -->
                                <li>
                                    <div class="timeline-panel">
                                        <div class="media-body">
                                        <h5 class="mb-0">
                                            <!-- Display schedule details -->
                                            <strong class="text-info">Class Type - {{ $schedule->title }} {{ $schedule->class_type }}</strong>, 
                                            {{ $schedule->teacher_course->course->grade }} - {{ $schedule->teacher_course->course->subject_name }}
                                            - {{ $schedule->teacher_course->teacher->first_name }} Sir
                                            - {{ $schedule->teacher_course->course->medium }} Medium
                                              </h5>
                                        <small class="d-block">{{ $schedule->date }} - {{ $schedule->time }}</small>
                                        <p class="mb-0">{{ $schedule->about_class }}...</p>
                                         </div>
                                         <div class="dropdown">
                                              <!-- Dropdown button for options -->
                                              <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                                  <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                              </button>
                                              <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{ route('dashboard.schedule.edit', ['id' => $schedule->id]) }}">Edit</a>
                                              <a class="dropdown-item" href="{{ route('dashboard.schedule.delete', ['id' => $schedule->id]) }}">Delete</a>
                                         </div>
                                         </div>
                                     </div>
                                </li>
                             @endforeach
                             </ul>
                         </div>
                     </div>
                </div>
            </div>
            <div class="col-xl-9 col-xxl-8">
                <!-- Column for calendar display -->
                <div class="card">
                    <div class="card-body">
                        <div id="external-events">
                            <div id="calendar" class="app-fullcalendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of content section -->
@endsection
