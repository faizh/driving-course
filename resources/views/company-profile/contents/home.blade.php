@extends('company-profile.layouts.content')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Drive with Confidence, Navigate Life's Roads!</h1>
          <h3 data-aos="fade-up" data-aos-delay="200">Join now and enjoy a fun learning experience guided by experienced instructors</h3>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="/package" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>More info</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('assets/images/home-car.svg')}}" class="img-fluid" alt="" width="400px">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  @stop