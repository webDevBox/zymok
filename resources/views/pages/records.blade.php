@extends('layouts.master')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex atdgn-items-center">
    <div id="canvasid" style="position: absolute; top:0; z-index:-99">
      <canvas width="1280" height="510"></canvas>
  </div>
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
     
        <h1 class="text-center text-dark">Records</h1>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">


        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <h2>Total: <span>{{ count($views) }}</span></h2>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Country</th>
                      <th>City</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($views as $view)
                      <tr>
                        <td>{{ $view->date_time }}</td>
                        <td>{{ $view->country }}</td>
                        <td>{{ $view->city }}</td>
                      </tr> 
                      @endforeach
                  </tbody>
                </table>
            </div>
          </section><!-- End Featured Services Section -->

</main><!-- End #main -->
@endsection