<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminViewController extends BaseController
{
    public function home()
    {
        return view('admin/home');
    }

    public function dashboard()
    {
        return view('admin/dash');
    }

    public function booking()
    {
        return view('admin/booked');
    }

    public function check_in()
    {
        return view('admin/check_in');
    }

    public function check_out()
    {
        return view('admin/check_out');
    }

    public function rooms()
    {
        return view('admin/rooms');
    }

    public function room_categories()
    {
        return view('admin/room_categ');
    }

    public function users()
    {
        return view('admin/users');
    }

    public function site_settings()
    {
        return view('admin/site_set');
    }
}
