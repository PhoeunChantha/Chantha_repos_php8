<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index(){
        $data['title']="Welcome to Tour";
        return view('front_home',$data);
    }
    public function about(){
        $data['title']="About Us";
        return view('front_about',$data);
    }
    public function services(){
        $data['title']="Services";
        return view('front_services',$data);
    }

    public function packages(){
        $data['title']="packages";
        return view('front_packages',$data);
    }
    public function destination(){
        $data['title']="destination";
        return view('front_destination',$data);
    }
    public function booking(){
        $data['title']="booking";
        return view('front_booking',$data);
    }
    public function our_guides(){
        $data['title']="our_guides";
        return view('front_our_guides',$data);
    }
    public function testimonial(){
        $data['title']="testimonial";
        return view('front_testimonial',$data);
    }
    public function contact_us(){
        $data['title']="contact_us";
        return view('front_contact_us',$data);
    }


}
