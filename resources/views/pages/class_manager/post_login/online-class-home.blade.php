@extends('layouts.class_manager.post-login')

@section('dashboard-content')



<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title flex-wrap">
                            <div class="input-group search-area mb-md-0 mb-3">
                                <input type="text" class="form-control" placeholder="Search here...">
                                <span class="input-group-text"><a href="javascript:void(0)">
                                    <svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z" fill="#01A3FF"/>
                                    </svg>
                                </a></span>
                            </div>
                            <div>
                                <!-- Button trigger modal -->
				                @can('create_online_class')        {{-- ###Ruki### --}}
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                 + Schedule Online Session
                                </button>

                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addOnlineClassModal">
                                    + Schedule Online Session
                                </button> --}}

                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    + Update online class
                                   </button> --}}

                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateOnlineClassModal">
                                    + Update online class
                                </button> --}}


				                @endcan     {{-- ###Ruki### --}}
                            </div>
                        </div>
                    </div>
                    <!-- Online Session Schedule List -->

                    <div class="col-xl-8 col-xxl-8 col-lg-8">
                        <div class="card">
                            <div class="card-header  border-0 pb-0">
                                <h4 class="card-title">Online Classes</h4>
                            </div>
                            <div class="card-body p-0">
                                <div id="DZ_W_Todo1" class="widget-media dlab-scroll height450 my-4 px-4">
                                    <ul class="timeline">





                                        @foreach ($online_classes as $online_class)
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media-body">
                                                    <h5 class="mb-0"><strong class="text-info">{{ $online_class->title }}</strong>, {{ $online_class->teacher_course->course->grade }} - {{ $online_class->teacher_course->course->subject_name }}
                                                        - {{ $online_class->teacher_course->teacher->first_name }} Sir
                                                        - {{ $online_class->teacher_course->course->medium }} Medium</h5>
                                                    <small class="d-block">{{ $online_class->date }} - {{ $online_class->time }}</small>
                                                    <p class="mb-0">{{ $online_class->about_class }}</p>
                                                </div>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                                        <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        @can('update_online_class')
                                                        <a class="dropdown-item" href="{{ route('dashboard.online-class.update',['id' => $online_class->id]) }}">Edit</a>
                                                        @endcan
                                                        @can('delete_online_class')
                                                        <a class="dropdown-item" href="{{ route('dashboard.online-class.remove',['id' => $online_class->id]) }}">Delete</a>
                                                        @endcan
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


                    <div class="col-xl-4">
                        <div class="card contact_list">
                            <div class="card-header pb-0 border-0 flex-wrap">
                                <div>
                                    <div class="mb-3">
                                        <h2 class="heading mb-0">Online Class Calendar</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center event-calender py-0 px-1">
                                <input type='text' class="form-control d-none" id='datetimepicker1'>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>





@endsection