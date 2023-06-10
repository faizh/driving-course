@extends('company-profile.layouts.content')

@section('content')
<section id="hero" class="hero d-flex align-items-center" style="height: auto; margin-top: 80px;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" class="text-center">Our Teams</h1>
            </div>
            <div class="col-lg-6 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('assets/images/teams.png')}}" class="img-fluid text-center" alt="" width="100px">
            </div>
        </div>

        <div class="row justify-content-center p-4">
            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/teams/john.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">John Smith</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">Trainer</h6>
                      <p class="card-text">John specializes in defensive driving techniques and advanced vehicle control, ensuring that learners are equipped to handle any situation on the road.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>Experience</b> <br /> 10+ years of professional driving instruction</li>
                      <li class="list-group-item"><b>Certifications</b> <br /> Certified Driving Instructor (CDI)</li>
                      <li class="list-group-item"><b>Specialization</b> <br /> Defensive driving techniques, advanced vehicle control</li>
                    </ul>
                  </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/teams/sarah.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Sarah Johnson</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">Trainer</h6>
                      <p class="card-text">Sarah's dedication to helping nervous drivers overcome their fears has made her a sought-after instructor.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>Experience</b> <br /> 7 years of teaching driving skills</li>
                      <li class="list-group-item"><b>Certifications</b> <br /> Licensed Driving Instructor (LDI)</li>
                      <li class="list-group-item"><b>Specialization</b> <br /> Nervous driver training, parallel parking mastery</li>
                    </ul>
                  </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/teams/michael.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Michael Davis</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">Trainer</h6>
                      <p class="card-text">Michael is a skilled driving instructor with a focus on hazard perception and emergency response.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>Experience</b> <br /> 5 years of teaching driving techniques</li>
                      <li class="list-group-item"><b>Certifications</b> <br /> Defensive Driving Specialist (DDS)</li>
                      <li class="list-group-item"><b>Specialization</b> <br /> Hazard perception, emergency response</li>
                    </ul>
                  </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/teams/david.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">David Thompson</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">Trainer</h6>
                      <p class="card-text">David is an experienced driving instructor with a focus on night driving and highway navigation.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>Experience</b> <br /> 8 years of teaching driving skills</li>
                      <li class="list-group-item"><b>Certifications</b> <br /> Advanced Driving Instructor (ADI)</li>
                      <li class="list-group-item"><b>Specialization</b> <br /> Night driving, highway navigation</li>
                    </ul>
                  </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/teams/faiz.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Faiz Hermawan</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">Founder and CEO</h6>
                      <p class="card-text">Faiz Hermawan is the visionary founder and CEO of our driving car business. With a deep passion for automobiles and a strong entrepreneurial spirit, James has dedicated his career to revolutionizing the driving experience. He possesses a unique blend of technical expertise and business acumen, which has been instrumental in shaping the company's growth and success.</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>
@stop