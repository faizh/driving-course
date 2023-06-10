@extends('company-profile.layouts.content')

@section('content')
<section id="hero" class="hero d-flex align-items-center" style="height: auto; margin-top: 80px;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" class="text-center">Schedule</h1>
            </div>
            <div class="col-lg-6 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('assets/images/schedules.png')}}" class="img-fluid text-center" alt="" width="80px">
            </div>
        </div>

        <div class="row justify-content-center p-4">
            <table class="table table-hover">
                <thead>
                    <th>Week</th>
                    <th>Day</th>
                    <th>Description</th>
                    <th>Time</th>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="5" style="vertical-align: middle">Week 1</td>
                        <td>Monday</td>
                        <td>Classroom Session 1</td>
                        <td>9:00 AM - 11:00 AM</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>Practical Driving Lesson 1 </td>
                        <td>1:00 PM - 3:00 PM</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>Classroom Session 2</td>
                        <td>9:00 AM - 11:00 AM</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>Practical Driving Lesson 2</td>
                        <td>1:00 PM - 3:00 PM</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>Classroom Session 3</td>
                        <td>9:00 AM - 11:00 AM</td>
                    </tr>

                    <tr>
                        <td rowspan="5" style="vertical-align: middle">Week 2</td>
                        <td>Monday</td>
                        <td>Practical Driving Lesson 3</td>
                        <td>1:00 PM - 3:00 PM</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>Classroom Session 4</td>
                        <td>9:00 AM - 11:00 AM</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>Practical Driving Lesson 4 </td>
                        <td>1:00 PM - 3:00 PM</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>Classroom Session 5</td>
                        <td>9:00 AM - 11:00 AM</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>Practical Driving Lesson 5</td>
                        <td>1:00 PM - 3:00 PM</td>
                    </tr>

                    <tr>
                        <td rowspan="5" style="vertical-align: middle">Week 3</td>
                        <td>Monday</td>
                        <td>Classroom Session 6</td>
                        <td>9:00 AM - 11:00 AM</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>Practical Driving Lesson 6</td>
                        <td>1:00 PM - 3:00 PM</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>Classroom Session 7</td>
                        <td>9:00 AM - 11:00 AM</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>Practical Driving Lesson 7</td>
                        <td>1:00 PM - 3:00 PM</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>Classroom Session 8</td>
                        <td>9:00 AM - 11:00 AM</td>
                    </tr>

                    <tr>
                        <td rowspan="5" style="vertical-align: middle">Week 4</td>
                        <td>Monday</td>
                        <td>Practical Driving Lesson 8</td>
                        <td>1:00 PM - 3:00 PM</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>Classroom Session 9</td>
                        <td>9:00 AM - 11:00 AM</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>Practical Driving Lesson 9 </td>
                        <td>1:00 PM - 3:00 PM</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>Classroom Session 10</td>
                        <td>9:00 AM - 11:00 AM</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>Practical Driving Lesson 10</td>
                        <td>1:00 PM - 3:00 PM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@stop