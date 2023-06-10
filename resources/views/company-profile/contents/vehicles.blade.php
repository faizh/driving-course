@extends('company-profile.layouts.content')

@section('content')
<section id="hero" class="hero d-flex align-items-center" style="height: auto; margin-top: 80px;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" class="text-center">Our Vehicles</h1>
            </div>
            <div class="col-lg-6 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('assets/images/vehicles.png')}}" class="img-fluid text-center" alt="" width="100px">
            </div>
        </div>

        <div class="row justify-content-center p-3 vehicles">
            <div class="col-6">
                <h2 class="text-center">Matic</h2>
                <div class="row p-3">
                    <div class="col-6 mt-5">
                        <div class="card" style="width: 12rem;">
                        <img src="{{asset('assets/images/vehicles/avanza.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Toyota Avanza</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">2012</h6>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="card" style="width: 12rem;">
                        <img src="{{asset('assets/images/vehicles/jazz.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Honda Jazz</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">2015</h6>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="card" style="width: 12rem;">
                        <img src="{{asset('assets/images/vehicles/ertiga.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Suzuki Ertiga</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">2018</h6>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="card" style="width: 12rem;">
                        <img src="{{asset('assets/images/vehicles/xpander.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mitsubishi Xpander</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">2016</h6>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="card" style="width: 12rem;">
                        <img src="{{asset('assets/images/vehicles/livina.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nissan Livina</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">2010</h6>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <h2 class="text-center">Manual</h2>
                <div class="row p-3">
                    <div class="col-6 mt-5">
                        <div class="card" style="width: 12rem;">
                        <img src="{{asset('assets/images/vehicles/yaris.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Toyota Yaris</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">2012</h6>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="card" style="width: 12rem;">
                        <img src="{{asset('assets/images/vehicles/city.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Honda City</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">2015</h6>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="card" style="width: 12rem;">
                        <img src="{{asset('assets/images/vehicles/swift.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Suzuki Swift</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">2018</h6>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="card" style="width: 12rem;">
                        <img src="{{asset('assets/images/vehicles/mazda2.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mazda2 </h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">2016</h6>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop