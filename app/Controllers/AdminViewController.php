<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminViewController extends BaseController
{
    public function home()
    {
        return view('/admin/home');
    }

    public function dashboard()
    {
        return view('/dash');
    }

    public function booking()
    {
        return view('/booked');
    }

    public function check_in()
    {
        return view('/check_in');
    }

    public function check_out()
    {
        return view('/check_out');
    }

    public function rooms()
    {
        return view('/rooms');
    }

    public function room_categories()
    {
        return view('/room_categ');
    }

    public function users()
    {
        return view('/users');
    }

    public function site_settings()
    {
        return view('/site_set');
    }
}
