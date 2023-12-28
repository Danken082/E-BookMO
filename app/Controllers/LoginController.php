<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \CodeIgniter\RestFul\ResourceController;
use \App\Models\UserModel;
use \Firebase\JWT\JWT;

class LoginController extends ResourceController
{
    private $user;

    public function __construct()
    {
        $this->user = new UserModel();
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

        $data = $this->user->where('email', $email)->first();
        $error = [
            'login' => false,
            'error' => 'invalid username or password'
        ];

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);

            if ($authenticatePassword) {
                $ses_data = [
                    'UserID' => $data['UserID'],
                    'LastName' => $data['LastName'],
                    'FirstName' => $data['FirstName'],
                    'ContactNo' => $data['ContactNo'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'isLoggedIn' => true
                ];
                $session->set($ses_data);

                return $this->respond(['login' => true]);
            } else {
                return $this->respond($error);
            }
        } else {
            return $this->respond($error);
        }
    }
// public function loginAuth(){
//     try {
//         $session = session();

//         $email = $this->request->getVar('email');
//         $password = $this->request->getVar('password');
//         $data = $this->user->where('email', $email)->first();
//                     $error =[
//                         'login' => false,
//                         'error' => 'invalid username or password'
//                     ];
//         // Example: Check the credentials (replace this with your authentication logic)
//         if ($email === 'hello@gmail.com' && $password ==='hi') {
//             // Successful login
//             return $this->respond(['message' => 'Login successful'], 200);
//         } else {
//             // Failed login
//             return $this->failUnauthorized('Invalid credentials');
//         }
//     } catch (\Throwable $e) {
//         return $this->respond(["message" => "Error: " . $e->getMessage()],);
        
//     }
// }
public function try()
{
    return view('dashboard/include/sidebar');
}

public function viewUsers(){

    $user = $this->user->findAll();

    return $this->respond($user, 200);

}

public function delUser(){
    $json = $this->request->getJSON();
    $userID = $json->UserID;
    $user = $this->user->delete($userID);
    return $this->respond($user, 200);
}

}
