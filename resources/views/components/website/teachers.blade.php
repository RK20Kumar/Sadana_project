<section id="teachers" class="teachers">
      <div class="container" data-aos="fade-up">

         {{--  @foreach ($teachers as $teacher)

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset('teacher_profile_photos/' . $teacher->teacher_profile_photo) }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4> {{ $teacher->first_name }} {{ $teacher->last_name }} </h4>
                <span>

                  @foreach ($teacher->courses as $course)
											<span class="badge badge-success light">{{ $course->subject_name }}</span>
									@endforeach

                </span>
                <p>
                  {{--  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut  --}}
                {{--  </p>  --}}
                {{--  <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          @endforeach--}}



        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="{{ asset('assets\img\sadana\Amitha_Paranagama.jpg') }}" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>Amitha Paranagama</h4>
                    <span>Mathematics</span>
                    <p>
                      Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                    </p>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>


            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset('assets\img\sadana\Amal_Patabadige.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Amal Patabadige</h4>
                <span>Combined Maths</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset('assets\img\sadana\Aruna_Weragala.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Aruna Weragala</h4>
                <span>Sinhala</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>



        </div>

      </div>
