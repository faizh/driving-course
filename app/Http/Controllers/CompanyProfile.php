<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CompanyProfile extends Controller
{
    public function index() : View {
        return view('company-profile/contents/home');
    }
}
