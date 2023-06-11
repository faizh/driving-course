@extends('company-profile.layouts.content')

@section('content')
<section id="hero" class="hero d-flex align-items-center" style="height: auto; margin-top: 80px;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" class="text-center">Let's Get in Touch</h1>
            </div>
            <div class="col-lg-6 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('assets/images/contact-us.png')}}" class="img-fluid text-center" alt="" width="90px">
            </div>
        </div>

        <div class="row justify-content-center p-3 contacts">
            <div class="col">
                <h3>Contact</h3>
                <div class="row mt-3">
                    <div class="col-6">
                        <img src="{{asset('assets/images/phone.png')}}" class="img-fluid text-center" alt="" width="30px">
                        <span>(021) 210102120</span>
                    </div>
                    <div class="col-6">
                        <img src="{{asset('assets/images/email.png')}}" class="img-fluid text-center" alt="" width="30px">
                        <span>marketing@driving-course.com</span>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-6">
                        <img src="{{asset('assets/images/whatsapp.png')}}" class="img-fluid text-center" alt="" width="30px">
                        <span>(+62) 812-3456-7890</span>
                    </div>
                    <div class="col-6">
                        <img src="{{asset('assets/images/instagram.png')}}" class="img-fluid text-center" alt="" width="30px">
                        <span>drivingcourse</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center p-3 vehicles">
            <div class="col">
                <h3>Location</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d616.4649249552521!2d106.7970949101454!3d-6.164845139858374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f76abd43b46b%3A0x6dd71660bb1e91ac!2sKopi%20Dari%20Hati%20n%20Toast%20Grogol!5e0!3m2!1sid!2sid!4v1686467918770!5m2!1sid!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mt-3"></iframe>
            </div>
        </div>
    </div>
</section>
@stop