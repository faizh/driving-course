<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Driving Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar sticky-top navbar-expand-md bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Driving Course</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link @if ($menu == 'home') active @endif" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($menu == 'package') active @endif" aria-current="page" href="/package">Package</a>
              </li>
            <li class="nav-item">
              <a class="nav-link @if ($menu == 'schedule') active @endif" aria-current="page" href="/schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if ($menu == 'teams') active @endif" aria-current="page" href="/teams">Teams</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if ($menu == 'vehicle') active @endif" aria-current="page" href="/vehicle">Vehicle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if ($menu == 'contact') active @endif" aria-current="page" href="/contact_us">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
