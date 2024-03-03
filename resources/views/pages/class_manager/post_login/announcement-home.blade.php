{{-- announcement home page code here --}}
@extends('layouts.class_manager.post-login')

@section('dashboard-content')

<div class="content-body">
    {{-- row --}}
    <div class="container-fluid">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title flex-wrap">
                        <div class="input-group search-area mb-md-0 mb-3">
                            <input type="text" class="form-control" placeholder="Search here...">
                            <span class="input-group-text">
                                <a href="javascript:void(0)">
                                    <svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z" fill="#01A3FF"/>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                {{-- announcement form --}}

                <div class="col-xl-5">
                    <div class="card">
                    <form action="{{ route('dashboard.announcement.save_announcement') }}" method="POST">
                    @csrf
                        <div class="card-header">
                            <h4 class="card-title">Publish Announcement</h4>
                        </div>

                        <div class="card-body custom-ekeditor">
                             <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">To - </label>
                                <div class="col-sm-9">
                                    <select class="default-select form-control wide mb-3" name="type">
                                        <option> -Select- </option>
                                        <option value="All Students">All Students</option>
                                        <option value="All Teachers">All Teachers</option>
                                        <option value="All Users">All Users</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Add Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" name="title">
                                    <br>
                                </div>
                            </div>
                            {{-- <div id="ckeditor" name="about"></div> --}}
                            <div>
                            <textarea name="content" id="ckeditor"></textarea>
                            </div>
                            <div><br></div>
                            <div class="d-flex justify-content-end"> {{-- Flex container to align button to the right --}}
                            <button type="submit" class="btn btn-primary rounded text-white">
                                Send
                                <svg width="24" height="24" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.52444 5.34375L4.96144 7.21875L6.90044 15.9998L4.96044 24.7808L4.52344 26.6558L6.30444 25.9378L28.3044 16.9378L30.5864 15.9998L28.3054 15.0618L6.30544 6.06175L4.52444 5.34375ZM7.30544 8.65575L22.8364 14.9998H8.71144L7.30544 8.65575ZM8.71144 16.9998H22.8364L7.30544 23.3438L8.71144 16.9998Z" fill="white"/>
                                </svg>
                            </button>
                            </div>
                        </div>
                    </form>
                 </div>
                </div>


                {{--  @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif  --}}


                {{-- Online Session Schedule List --}}

                <div class="col-xl-7 col-xxl-7 col-lg-7">
                    <div class="card">
                        <div class="card-header  border-0 pb-0">
                            <h4 class="card-title">Announcement</h4>
                        </div>

                        <div class="card-body p-0">
                            <div id="DZ_W_Todo1" class="widget-media dlab-scroll height450 my-4 px-4">
                                <ul class="timeline">

                                    @foreach ($announcements->reverse() as $announcement)


                                    <li>
                                        <div class="timeline-panel">
                                            <div class="me-3 ">
                                                {{-- <i class="fa fa-home"></i> --}}
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-0">To- {{ $announcement->type }}</p>
                                                <h5 class="mb-1">Title : <strong class="text-primary">{{ $announcement->title }}</strong></h5>
                                                {{-- <h5 class="mb-1">About : {{ $announcement->content }}</h5> --}}
                                                <small class="d-block">{{ $announcement->created_at }}</small>
                                                {{-- <small class="d-block">Date: {{ $announcement->created_at->format('Y-m-d') }}</small>
                                                <small class="d-block">Time: {{ $announcement->created_at->format('H:i:s') }}</small> --}}
                                                <p class="mb-0">About:

                                                    {{--  <span id="announcementContent{{ $announcement->id }}" class="announcement-content">
                                                        {{ Str::limit($announcement->content, 100) }}
                                                    </span>  --}}
                                                    @if (strlen($announcement->content) > 50)
                                                    {{ substr($announcement->content, 0, 0) }}...
                                                    {{-- <button class="btn btn-link" data-toggle="modal" data-target="#showMoreModal{{ $announcement->id }}">Show </button> --}}
                                                    <button class="btn btn-link show-more-button" data-id="{{ $announcement->id }}">Show More</button>
                                                    {{-- type twiice about correct --}}
                                                    {{-- <div id="announcementFullContent{{ $announcement->id }}" class="announcement-full-content d-none"> --}}
                                                @else
                                                    {{ $announcement->content }}
                                                @endif

                                                {{-- <button class="btn btn-link show-more-button" data-id="{{ $announcement->id }}">Show More</button> --}}
                                                <div id="announcementFullContent{{ $announcement->id }}" class="announcement-full-content d-none">
                                                    {{ $announcement->content }}
                                                </div>
                                                 </p>

                                            </div>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                                    <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">

                                                    <form action="{{ route('dashboard.announcement.delete', ['id' => $announcement->id]) }}" method="get">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this announcement?')">Delete</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                    {{-- @foreach ($announcements as $announcement)
                                    <li>
                                        <div class="timeline-panel"> --}}
                                            <!-- ... other code ... -->
                                            {{-- <div class="media-body"> --}}
                                                <!-- ... other code ... -->
                                                {{-- <p class="mb-0">To -  {{ $announcement->type }}</p>
                                                <h5 class="mb-1">Title : {{ $announcement->title }}</h5>
                                                <p class="mb-0">About:

                                                    <span id="announcementContent{{ $announcement->id }}" class="announcement-content">
                                                        {{ Str::limit($announcement->content, 100) }}
                                                    </span>
                                                    @if (strlen($announcement->content) > 100)
                                                    {{ substr($announcement->content, 0, 100) }}... --}}
                                                    {{-- <button class="btn btn-link" data-toggle="modal" data-target="#showMoreModal{{ $announcement->id }}">Show </button> --}}
                                                    {{-- <button class="btn btn-link show-more-button" data-id="{{ $announcement->id }}">Show More</button>
                                                @else
                                                    {{ $announcement->content }}
                                                @endif
                                                </p> --}}
                                                {{-- <button class="btn btn-link show-more-button" data-id="{{ $announcement->id }}">Show More</button> --}}
                                                {{-- <div id="announcementFullContent{{ $announcement->id }}" class="announcement-full-content d-none">
                                                    {{ $announcement->content }}
                                                </div> --}}
                                                <!-- ... other code ... -->
                                            {{-- </div> --}}
                                            <!-- ... other code ... -->
                                        {{-- </div> --}}
                                    {{-- </li>
                                @endforeach --}}




                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
