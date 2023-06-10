<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CompanyProfile extends Controller
{
    protected $menu;
    public function index() : View {
        $this->menu = "home";
        return view('company-profile/contents/home', ['menu' => $this->menu ]);
    }

    public function schedule() : View {
        $this->menu = "schedule";
        return view('company-profile/contents/home', ['menu' => $this->menu ]);
    }

    public function package() : View {
        $this->menu = "package";
        return view('company-profile/contents/packages', ['menu' => $this->menu ]);
    }

    public function trainer() : View {
        $this->menu = "trainer";
        return view('company-profile/contents/home', ['menu' => $this->menu ]);
    }

    public function vehicle() : View {
        $this->menu = "vehicle";
        return view('company-profile/contents/home', ['menu' => $this->menu ]);
    }

    public function contactUs() : View {
        $this->menu = "contact";
        return view('company-profile/contents/home', ['menu' => $this->menu ]);
    }
}
