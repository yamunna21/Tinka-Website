<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  @extends('layouts.master')

</head>

<body>

 <!-- ======= Header ======= -->
 @include('header')
<!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/contact">Contact Us</a></li>
        </ol>
        <h2>Contact Us</h2>

      </div>
    </section><!-- End Breadcrumbs -->

 
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>29-1, Jalan Pelapik B U8/B,<br>
                  Bukit Jelutong, <br>
                  40150 Shah Alam, Selangor. <br>
                  Landmark: Klinik Menara  
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Operating Hours</h3>
                <p>Monday - Friday : 9 AM - 6 PM <br>
                Saturday : 10 AM - 6 PM <br>
                Sunday : 8 AM - 4 PM
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>03 - 5030 5883<br>011 - 1087 0015</p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@tinka.world</p>
              </div>
            </div>
            
          </div>

        </div>

        <div class="col-lg-6">
          <form action="/contact" method="post" class="php-email-form">
            @csrf
            <div class="row gy-4">

              @if(Session::has('success'))
              <div class="alert alert-success">
                  {{ Session::get('success') }}
                  @php
                      Session::forget('success');
                  @endphp
              </div>
              @endif

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" {{ $errors->has('name') ? 'has-error' : '' }} value="{{ old('name') }}">
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" {{ $errors->has('email') ? 'has-error' : '' }} value="{{ old('email') }}">
                <span class="text-danger">{{ $errors->first('email') }}</span>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" {{ $errors->has('subject') ? 'has-error' : '' }} value="{{ old('subject') }}">
                <span class="text-danger">{{ $errors->first('subject') }}</span>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="content" rows="6" placeholder="Message" {{ $errors->has('content') ? 'has-error' : '' }} value="{{ old('content') }}"></textarea>
                <span class="text-danger">{{ $errors->first('content') }}</span>
              </div>
                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>

        </div>

      </div>

    </div>

  </section><!-- End Contact Section -->

    

    
    <!-- Social Media Section-->

    <section>
      <div class="container mt-5 mb-5 d-flex justify-content-center">
        <ul class="social-list">
            <li>
                <div class="maincard p-3">
                    <div class="thecard">
                      <a href="https://www.facebook.com/tinkamalaysia" target="_blank">
                        <div class="thefront text-center py-4 sfacebook">
                            <div class="social-icon"> <i class="fa fa-facebook fa-2x"></i> </div>
                        </div>
                        <div class="theback text-center py-4 sfacebook">
                            <div class="social-icon"> <i class="fa fa-facebook fa-2x"></i> </div>
                        </div>
                      </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="maincard p-3">
                    <div class="thecard">
                      <a href="https://www.instagram.com/tinkamalaysia" target="_blank">
                        <div class="thefront text-center py-4 sinstagram">
                            <div class="social-icon"> <i class="fa fa-instagram fa-2x"></i> </div>
                        </div>
                        <div class="theback text-center py-4 sinstagram">
                            <div class="social-icon"> <i class="fa fa-instagram fa-2x"></i> </div>
                        </div>
                      </a>
                    </div>
                </div>
            </li>
            
           <li>
              <div class="maincard p-3">
                <div class="thecard">
                  <a href="https://tinka.wasap.my" target="_blank">
                    <div class="thefront text-center py-4 swhatsapp">
                        <div class="social-icon"> <i class="fa fa-whatsapp fa-2x"></i> </div>
                    </div>
                    <div class="theback text-center py-4 swhatsapp">
                        <div class="social-text"> <i class="fa fa-whatsapp fa-2x"></i></div>
                    </div>
                  </a>
                </div>
              </div>
           </li>

      </ul>
    </div>

    </section>


  <!-- End of Social Media Section-->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

</html>