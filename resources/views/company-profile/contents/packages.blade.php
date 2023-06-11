@extends('company-profile.layouts.content')

@section('content')
<section id="hero" class="hero d-flex align-items-center" style="height: auto; margin-top: 80px;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" class="text-center">Our Packages</h1>
            </div>
            <div class="col-lg-6 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('assets/images/packages.png')}}" class="img-fluid text-center" alt="" width="80px">
            </div>
        </div>

        <div class="row justify-content-center p-4">
            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Beginner's Package</h5>
                      <p class="card-text">This package is perfect for individuals who are new to driving and want to build a strong foundation</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Comprehensive classroom sessions covering traffic rules, road signs, and basic driving techniques</li>
                      <li class="list-group-item">Practical driving lessons with a certified instructor</li>
                      <li class="list-group-item">Duration: 10 sessions (5 classroom + 5 practical)</li>
                    </ul>
                    <div class="card-body">
                        <b>Rp 500.000</b>
                    </div>
                  </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Refresher Package</h5>
                      <p class="card-text">Whether you haven't driven in a while or simply want to brush up on your skills, this package is designed to meet your needs</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Assessment of current driving abilities and identification of areas for improvement.
                    </li>
                      <li class="list-group-item">Targeted practice sessions to enhance specific skills (e.g., parking, highway driving, night driving).</li>
                      <li class="list-group-item">Duration: 8 sessions (4 classroom + 4 practical)</li>
                    </ul>
                    <div class="card-body">
                      <b>Rp 400.000</b>
                    </div>
                  </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Defensive Driving Package</h5>
                      <p class="card-text">Learn the art of defensive driving with our comprehensive Defensive Driving Package.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Classroom sessions on defensive driving principles, hazard perception, and risk management.</li>
                      <li class="list-group-item">In-car training emphasizing defensive driving maneuvers and emergency response.</li>
                      <li class="list-group-item">Duration: 12 sessions (6 classroom + 6 practical).</li>
                    </ul>
                    <div class="card-body">
                      <b>Rp 600.000</b>
                    </div>
                  </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Advanced Package</h5>
                      <p class="card-text">Designed for experienced drivers looking to enhance their abilities, this package offers a deep dive into advanced driving techniques.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Classroom sessions on advanced driving theory, advanced vehicle control, and handling challenging road conditions.</li>
                      <li class="list-group-item">Intensive practical training covering advanced maneuvers, defensive driving at high speeds, and handling emergencies.</li>
                      <li class="list-group-item">Duration: 15 sessions (8 classroom + 7 practical)</li>
                    </ul>
                    <div class="card-body">
                      <b>Rp 800.000</b>
                    </div>
                  </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Customized Package</h5>
                      <p class="card-text">Tailored to your specific needs, our Customized Package offers the flexibility to focus on your unique requirements.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Flexible scheduling and personalized training based on the driver's goals.</li>
                      <li class="list-group-item">Combination of classroom and practical sessions, focusing on desired areas of improvement.</li>
                      <li class="list-group-item">Duration and content can be customized based on the driver's preferences.</li>
                    </ul>
                    <div class="card-body">
                      <b>Rp - </b> <br />(Varies based on customization)
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>
@stop