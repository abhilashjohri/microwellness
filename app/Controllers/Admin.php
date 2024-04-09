<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class Admin extends BaseController
{
    public function index(): string
    {
        $data=[ 'page_title'=>"Home"];

        return view('admin/index',$data);
    
    }
    public function profile(): string
    {
        $data=[ 'page_title'=>"profile"];

        return view('admin/profile',$data);
    
    }
    public function users(): string
    {
        $data=[ 'page_title'=>"users"];
        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('admin/users',$data);
    
    }
    
    public function forgetpass(): string
    {
        $data=[ 'page_title'=>"forgot password"];

        return view('admin/forgot-password',$data);
    
    }
    public function recover_password(): string
    {
        $data=[ 'page_title'=>"recover-password"];

        return view('admin/recover-password',$data);
    
    }
    public function signup()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('signup', $data);
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'user_name'     => $this->request->getVar('name'),
                'user_email'    => $this->request->getVar('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('admin/register', $data);
        }
         
    }
    public function login()
    {
        helper(['form']);
        echo view('admin/login');
    } 
 
    public function auth()
    {
        $session = session(); 
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'first_name'     => $data['first_name'],
                    'user_name'     => $data['first_name'].' '. $data['last_name'],
                    'user_email'    => $data['user_email'],
                    'role'    => $data['role'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('admin/dashboard');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('admin/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('admin/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('admin/login');
    }
}
