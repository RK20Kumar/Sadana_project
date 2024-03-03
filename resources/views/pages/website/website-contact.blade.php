@extends('layouts.website.app')

@section('contact')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
        <p> </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13323.46023528669!2d79.95840800487422!3d6.880009326653959!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae250de0c8880df%3A0xafec1d19fdfcfdc3!2sSadana%20Institute!5e0!3m2!1sen!2slk!4v1691408822283!5m2!1sen!2slk" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p> VXJ5+6GF, Hokandara Rd, Hokandara</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>sadhanacourse@gmail.com.</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0112 562 763</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="{{ route('contact.submit') }}" method="post" role="form" class="php-email-form">
                    @csrf
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"> Not Send</div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>




              </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection
