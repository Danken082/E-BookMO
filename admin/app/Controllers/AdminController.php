<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index() 
    {
        $this->load->view('adminlogin');
    }

    public function login() 
    {
        $fullname = $this->input->post('FullName');
        $username = $this->input->post('Username');
        $password = $this->input->post('Password');

        // Validate the username and password from the database
        // You should hash the password before storing it and verify it against the hashed password in the database

        if ($username === 'admin' && $password === 'admin_password') {
            // Set session or token to indicate user is logged in
            $this->session->set_userdata('logged_in', true);
            redirect('home'); // Redirect to home after successful login
        } else {
            // Invalid credentials, redirect back to login
            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect('adminlogin');
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        redirect('adminlogin');
    }
}