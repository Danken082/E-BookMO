<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function __construct()
    {
        $this->user = new \App\Models\UserModel();
    }
    public function index()
    {
    helper(['form']);
     echo view('Home/include/login');
    }
    public function loginAuth()
    {
        $session = session();
        $email = $this->request->getVar('email');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $this->user->where('email', $email, 'username', $username)->first();

        if($data)
        {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);

            if($authenticatePassword)
            {
                $ses_data = [
                    'UserID' => $data['UserID'],
                    'LastName' => $data['LastName'],
                    'FirstName' => $data['FirstName'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/view');
            }
            else
            {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/login');
            }

        }
        else
        {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/login');
        }
}
public function try()
{
    return view('dashboard/include/sidebar');
}
}