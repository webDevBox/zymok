@extends('layouts.master')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div id="canvasid" style="position: absolute; top:0; z-index:-99">
      <canvas width="1280" height="510"></canvas>
    </div>
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Contact us for better communication</h1>
    </div>
  </section><!-- End Hero -->

<main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" style="margin-top:100px;" class="featured-services">
            <div class="container" data-aos="fade-up">
              <div class="row">
                <div class="offset-3 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bxl-whatsapp"></i></div>
                    <h4 class="title"><a href="#featured-services">Whatsapp</a></h4>
                    <p class="description">
                        +92 304 4614400
                    </p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bx bx-phone"></i></div>
                    <h4 class="title"><a href="#featured-services">Phone</a></h4>
                    <p class="description">
                        +92 304 4614400
                    </p>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Featured Services Section -->
</main>
@endsection