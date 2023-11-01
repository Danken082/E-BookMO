<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ViewController extends BaseController
{
    public function home()
    {
        return view('Home/home');
    }
    public function about()
    {
        return view('Home/about');

    }
    public function contact()
    {
        return view('Home/Contactus');
    }
    public function visit()
    {
        return view('Home/visitus');
    }
    public function book()
    {
        return view('Home/bookme');
    }
}
