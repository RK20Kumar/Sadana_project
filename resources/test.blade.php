<div class="mb-3">
								<label class="form-label">Select Class</label>
								@foreach ($teachers as $teacher)
									@foreach ($teacher->courses as $course)  {{-- teachers lage courses detasils->couese variable ekata ganna --}}
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="course_{{ $course->id }}_{{ $teacher->id }}" name="courses[]" value="{{ $teacher_courses->id }}">
											<label class="form-check-label" for="course_{{ $course->id }}_{{ $teacher->id }}">{{ $course->grade }} - {{ $course->subject_name }} - {{ $teacher->first_name }} Sir - {{ $course->medium }} Medium</label>
										</div>
									@endforeach
								@endforeach
							</div>







				$user = Auth::user();
                if($user->can('view_student')){

                }else{

                }

@can('create_student')

@endcan







{{--                                                @if ($user->user_profile_photo == null)
														<img src="{{ asset('images/user.jpg') }}" class="avatar avatar-xl" id="imagePreview">
													@else
														<img src="{{ asset('user_profile_photos/' . $user->user_profile_photo) }}" class="avatar avatar-xl" id="imagePreview">
													@endif

													<div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
														<input type="file" id="user_profile_photo" class="update-flie" name="user_profile_photo" onchange="previewFile()">
														<i class="fa fa-camera"></i>
													</div>  --}}




















<div id="DZ_W_TimeLine" class="widget-timeline dlab-scroll height450 my-4 px-4">
    <ul class="timeline">
        {{--  --}}
        @foreach ($online_classes as $online_class)  {{-- database eke variable eke data table ekata gannawa --}}   {{-- ###Ruki### --}}
        <li>
            <div class="timeline-badge success">
            </div>
            @foreach ($teacher_courses as $teacher_course)

            <a class="timeline-panel text-muted" href="#">
                <span>{{ $online_class->date }} ,  {{ $online_class->time }}</span>     {{-- ###Ruki### --}}
                <h6 class="mb-0"><strong class="text-primary">{{ $online_class->title }}</strong> ,  {{ $teacher_course->course->grade }} - {{ $teacher_course->course->subject_name }} - {{ $teacher_course->teacher->first_name }} Sir - {{ $teacher_course->course->medium }} Medium</h6>    {{-- ###Ruki### --}}
                <p class="mb-0">{{ $online_class->about_class }}</p>    {{-- ###Ruki### --}}
            </a>
            @endforeach

        </li>
        @endforeach
    </ul>
</div>












{{--  --}}
                                        @foreach ($online_classes->teacher_courses as $teacher_courses)  {{-- database eke variable eke data table ekata gannawa --}}   {{-- ###Ruki### --}}
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>                                        

                                            <a class="timeline-panel text-muted" href="#">
                                                <span>{{ $online_class->date }} ,  {{ $online_class->time }}</span>     {{-- ###Ruki### --}}
                                                <h6 class="mb-0"><strong class="text-primary">{{ $online_class->title }}</strong> ,  {{ $teacher_course->course->grade }} - {{ $teacher_course->course->subject_name }} - {{ $teacher_course->teacher->first_name }} Sir - {{ $teacher_course->course->medium }} Medium</h6>    {{-- ###Ruki### --}}
                                                <p class="mb-0">{{ $online_class->about_class }}</p>    {{-- ###Ruki### --}}
                                            </a>

                                        </li>

                                        @endforeach