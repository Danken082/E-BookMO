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
//     public function loginAuth()
//     {
//         $session = session();
//         $email = $this->request->getVar('email');
//         $username = $this->request->getVar('username');
//         $password = $this->request->getVar('password');

//         $data = $this->user->where('email', $email)->first();
//         $error =[
//             'login' => false,
//             'error' => 'invalid username or password'
//         ];

//         if($data)
//         {
//             $pass = $data['password'];
//             $authenticatePassword = password_verify($password, $pass);

//             if($authenticatePassword)
//             {
//                 $ses_data = [
//                     'UserID' => $data['UserID'],
//                     'LastName' => $data['LastName'],
//                     'FirstName' => $data['FirstName'],
//                     'ContactNo' => $data['ContactNo'],
//                     'username' => $data['username'],
//                     'email' => $data['email'],
//                     'isLoggedIn' => TRUE
//                 ];
//                 $session->set($ses_data);
//                 return redirect()->to('/view');
//             }
//             else
//             {
//                 $session->setFlashdata('msg', 'Password is incorrect.');
//                 return redirect()->to('/login');
//             }

//         }
//         else
//         {
//             $session->setFlashdata('msg', 'Email does not exist.');
//             return redirect()->to('/login');
//         }
// }
public function loginAuth()
{
    $session = session();
    $email = $this->request->getVar('email');
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');

    $user = $this->user->where('email', $email)->first();
    $error =[
        'login' => false,
        'error' => 'invalid username or password'
    ];
    if(is_null($user))
    {
        return $this->respond($error);
    }
    $psd_verify = password_verify($password, $user['password']);
    if(!$psd_verify){
        return $this->respond($error);
    }
    $key = getenv('JWT_SECRET');
            $iat = time(); // current timestamp value
            $exp = $iat + 3600;
    $load = array(

    )
        // $pass = $data['password'];
        // $authenticatePassword = password_verify($password, $pass);

        // if($authenticatePassword)
        // {
        //     $ses_data = [
        //         'UserID' => $data['UserID'],
        //         'LastName' => $data['LastName'],
        //         'FirstName' => $data['FirstName'],
        //         'ContactNo' => $data['ContactNo'],
        //         'username' => $data['username'],
        //         'email' => $data['email'],
        //         'isLoggedIn' => TRUE
        //     ];
        //     $session->set($ses_data);
        //     return redirect()->to('/view');
        // }
        // else
        // {
        //     $session->setFlashdata('msg', 'Password is incorrect.');
        //     return redirect()->to('/login');
        // }

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