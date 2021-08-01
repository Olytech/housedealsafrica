<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnersPageController extends Controller
{
    //



    public function home()
    {
        # code...


        return view('partners.home');
    }

    public function profile()
    {
        # code...


        return view('partners.profile');
    }

    public function notifications()
    {
        # code...


        return view('partners.notifications');
    }
    public function properties()
    {
        # code...


        return view('partners.properties');
    }

    public function property()
    {
        # code...


        return view('partners.property');
    }

    public function adverts()
    {
        # code...


        return view('partners.adverts');
    }

    public function advert()
    {
        # code...


        return view('partners.advert');
    }


}


