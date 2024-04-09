<?php



namespace App\Controllers;

use App\Models\UserModel;

use App\Models\Quiz_model;

use App\Models\QuizResultModel;

use App\Models\emoji_model;

class User extends BaseController

{





 

    public function save()

    {

    //   print_r($_POST); die();

    

        //include helper form

        helper(['form']);

        //set rules validation form

        $rules = [

            'fname'          => 'required|min_length[3]|max_length[20]',

            'lname'          => 'required|min_length[3]|max_length[20]',

         //   'phone_number'  => 'required|min_length[3]|max_length[20]|is_unique[users.phone_number]',

            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',

            'password'      => 'required|min_length[6]|max_length[200]',

            'confpassword'  => 'matches[password]',

            'age'          => 'required',

            'location'          => 'required|min_length[3]|max_length[20]',

            'gender'          => 'required|min_length[3]|max_length[20]',

        ];

         

    

        if($this->validate($rules)){

            $model = new UserModel();

            $data = [

                

                'first_name'     => $this->request->getVar('fname'),

                'last_name'     => $this->request->getVar('lname'),

               // 'phone_number'     => $this->request->getVar('phone_number'),

                'user_email'    => $this->request->getVar('email'),

                'read_password' => ($this->request->getVar('password')),

                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),

                'age'     => $this->request->getVar('age'),

                'location'     => $this->request->getVar('location'),

                'gender'     => $this->request->getVar('gender'),

            ];



        $model->insert($data);

        $user_id = $model->getInsertID();

    

        return redirect()->to("/signup")->with('success', 'Registration successful. ');

        }

        else{

            $data['validation'] = $this->validator;

            echo view('frontend/signup', $data);

        }

        // site_url("$role/signup")

    }

 

    public function login()

    {

      

        $data=[ 'page_title'=>"login"];//'hidden_value' =>$hidden_value

        helper(['form']);

   

       echo view('frontend/login', $data);

    } 

    public function Signup()

    {

       // echo $module;

        $data=[ 'page_title'=>"Signup"];

        helper(['form']);

       // echo view('login');



       echo view('frontend/signup', $data);

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

                return redirect()->to('/');

            }else{

                $session->setFlashdata('msg', 'Wrong Password');

                return redirect()->to("/login");

            }

        }else{

            $session->setFlashdata('msg', 'Email not Found');

            return redirect()->to('/login');

        }

    }

 

    public function logout()

    {

        $session = session();

        $session->destroy();

        return redirect()->to('/login');

    }





    //-------------forgot pass 1 step----------//



    public function forgotPassword()

    {

        $data=[ 'page_title'=>"Forget Password"];

   

    $session = session();

   

        if ($this->request->getMethod() === 'post') {

            

            $phone = $this->request->getPost('email');

            

            $userModel = new UserModel();

            $user = $userModel->where(['phone_number'=> $phone])->first();

            $otp   =  rand(100000, 999999);

            if ($user) {

              

                $Vdata = [

                    'user_id'      =>$user['user_id'], 

                    'create_date_time'         =>time() ,

                    'expire_data_time'  =>strtotime('+30 minutes'),

                    'role'      => $this->request->getPost('role'),

                    'otp'           =>  $otp,

                ];



        

          



              // Check if the user with the specified user_id exists

              $existingOtp = $ForgetOtpVerify->where(['user_id'  => $user['user_id']])->find();

          

              if ($existingOtp) {

                  // Update the existing user's password

                  $ForgetOtpVerify->update($existingOtp[0]['id'],$Vdata);

              } else {

                  // Insert a new user

                  $ForgetOtpVerify->insert($Vdata);

              }



               

                session()->set('phone', $phone);

                session()->set('user_id',$user['user_id']);

                session()->set('role',$this->request->getPost('role'));

                $res_data = [

                    'message' => 'OTP Send Successfully',

                    'status'  => 'success',

                ];

                

                session()->setFlashdata($res_data);

                return redirect()->to("$role/forgotpassotp");

            } else {

         

                $res_data = [

                    'message' => 'Mobile number not registered. Please sign up',

                    'status'  => 'danger',

                ];

            

                session()->setFlashdata($res_data);

            }

        }



        return view('frontend/forgot_password',$data);

    }

    // forgot password otp page 2nd step 

    public function forgotpassotp(){

        $data=[ 'page_title'=>"Forget Password OTP"];

        return view('frontend/forgotpassotp',$data);

    }

    

    

    // varify  forget otp 

    public function forgetOTPverified(){

         $ForgetOtpVerify = new ForgetOtpVerifyModel();

        $session = session();

        $user_id = $session->get('user_id');

        //print_R($_SESSION);

        $role = $session->get('role');

        $data = $ForgetOtpVerify->where(['user_id'  => $user_id])->find();

         $success = $error ='';

         if(count($data)){

           // print_R($data); die();

            $db_otp =$data[0]['otp'];

            $create_date_time =$data[0]['create_date_time'];

            $expire_data_time =$data[0]['expire_data_time'];

             

            if (time() > $create_date_time && time() < $expire_data_time)

            {

                $otp_arr =  $this->request->getVar('otp');

                

                $db_otp_arr =  array_map('intval', str_split($db_otp));

                if (array_diff($otp_arr, $db_otp_arr) == []) {

    

                    $ForgetOtpVerify->where('user_id', $user_id )->set(['status' =>'true'])->update();

                    $success = "OTP Veriifed";

                } else {

                    // "The arrays are not equal.";

                    $error= "Invalid otp";

                }

            

            }else {

                $error='Your otp is expired  '; 

            }

    

         }else{

            $error='Record not found';

    

         }

        // echo $success;

        // echo  $error; die();  // message pending 

          if( $success){

            $res_data = [

                'message' =>$success,

                'status'  => 'success',

            ];

        

            session()->setFlashdata($res_data);

            

         

            return redirect()->to("$role/reset_password");

    

          }else{

            $res_data = [

                'message' => $error,

                'status'  => 'danger',

            ];

        

            session()->setFlashdata($res_data);

          

            return redirect()->to("$role/forgotpassotp");

          }

        

     }

   



    //--------resett password - forget password - 3rd step last  -----------//



    public function reset_password($role)

   {

    $data=[ 'page_title'=>"Reset Password",

             'role'=>$role];



    if ($this->request->getMethod() === 'post') {

    

           //set rules validation form

           $rules = [

            'newpass'      => 'required|min_length[6]|max_length[200]',

            'confirmpass'  => 'matches[newpass]'

        ];

         

      

        if($this->validate($rules)){

      

        $newpass = $this->request->getPost('newpass');

        $confirmpass = $this->request->getPost('confirmpass');

         $user_id = session()->get('user_id');



        $userModel = new UserModel();

        $user = $userModel->where('user_id', $user_id)->first();



        if ($user) {

            $userModel->update($user_id, [

                'user_password' => password_hash($newpass, PASSWORD_DEFAULT),

            ]);

         // session unset 

         $res_data = [

            'message' =>"Password reset successful!",

            'status'  => 'success',

        ];

    

        session()->setFlashdata($res_data);

        return redirect()->to(base_url("$role/login"));

        }else {

            $res_data = [

                'message' => 'user not found',

                'status'  => 'danger',

            ];

            session()->setFlashdata($res_data);

        }

    }

    else{

        $data['validation'] = $this->validator;

     

    }

    }

       

    return view('reset_password',$data);

  }

  public function quiz(){

   

       $emoji_model = new emoji_model();

        $data['emoji_data'] = $emoji_model->findAll();

    $model = new Quiz_model();

    $data['page_title'] = 'quiz';

    $data['quizs'] = $model->getQuestions();

    return view('user/quiz',$data);

}
 public function thanks(){
     $data=[ 'page_title'=>"Thanks"];

 return view('user/thanks',$data);
 }

public function submitQuiz()

{

   

    // Validate and process the submitted quiz data

    $session = session();

    // Assuming $quizResults is an array containing quiz results

        // Example data

        $selected_emoji = $_POST['selected_emoji']; 

      //  unset($_POST['selected_emoji']);

        $quizResults = ['user_id' => session()->get('user_id'),

         'results' => json_encode($_POST), 

         'selected_emoji' =>json_encode($selected_emoji), 

         

         'created_at' => date("Y-m-d H:i:s")];



   



    // Save results in the database

    $quizResultModel = new QuizResultModel();

    $quizResultModel->insert($quizResults);

    $session->setFlashdata('msg', 'Quiz result successfully');

     if($selected_emoji){

          $db = \Config\Database::connect();

          $query = $db->table('emoji_link')->where('emoji_code', json_encode($selected_emoji))->get();

          

            // Check if there are any rows returned

        if ($query->getNumRows() > 0) {

            // Fetch the result as an object

            $row = $query->getRow();

            

            // Process the data as needed

          $row->link;
                 
                return redirect()->to("user/thanks?url=".$row->link);

        } else {

            echo 'No data found';

        }

          

     }else {

    return redirect()->to("user/thanks?url=".site_url("/blog"));

     }

    // Add any additional logic or redirection as needed

}

}