<?php

namespace App\Controllers;
use App\Models\Quiz_model;
use App\Models\QuizResultModel;
use App\Models\UserModel;

class Quiz extends BaseController
{
    public function index()
    {
        $model = new Quiz_model();
        $data['questions'] = $model->findAll();

        return view('admin/quiz/index', $data);
    }
    public function user_result($user_id)
    {
        $model = new QuizResultModel();
        $data['quiz_result'] =  $model->where('user_id', $user_id)->findAll();
        $usermodel = new UserModel();
        $data['user'] = $usermodel->find($user_id);
        return view('admin/quiz/user_result', $data);
    }
    
    // Add other CRUD methods as needed

    public function crud($quiz_Id='')
    {
        $model = new Quiz_model();
        $data['quiz'] = $model->find($quiz_Id);
        $data['quiz_Id'] = $quiz_Id;
         if(!$quiz_Id){
            $data['quiz'] = array(
             'question' =>'',
             'answer' =>'',
             'option1' =>'',
             'option2' =>'',
             'option3' =>'',
             'option4' =>'',
             'status'  =>'');
         }
     
        return view('admin/quiz/crud', $data);

    }

    public function save()
    {
    //   print_r($_POST); die();
    $quiz_id = $this->request->getVar('quiz_id');
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'question'          => 'required|min_length[3]|max_length[200]',
            'answer'          => 'required',
            'option1'          =>  'required|min_length[3]|max_length[200]',
            'option2'          => 'required|min_length[3]|max_length[200]',
            'option3'          =>  'required|min_length[3]|max_length[200]',
            'option4'          => 'required|min_length[3]|max_length[200]',
          //  'status'          => 'required',
        ];
         
    
        if($this->validate($rules)){
            $model = new Quiz_model();
            $data = [
                
                'question'     => $this->request->getVar('question'),
                'answer'     => $this->request->getVar('answer'),
               'option1'     => $this->request->getVar('option1'),
                'option2'    => $this->request->getVar('option2'),
                'option3' => ($this->request->getVar('option3')),
            
                'option4'     => $this->request->getVar('option4'),
                'status'     => $this->request->getVar('status'),
            ];
            
        if($quiz_id){
            $model->update($quiz_id, $data);
            return redirect()->to("/admin/quiz/crud/".$quiz_id)->with('success', 'quiz updated successfull. ');
        }else {
        $model->insert($data);
        $user_id = $model->getInsertID();
        return redirect()->to("/admin/quiz/crud")->with('success', 'quiz created successfull. ');
        }
       
       
        }
        else{
            $data['validation'] = $this->validator;
            if($quiz_id){
                return view('admin/quiz/crud/'.$quiz_id, $data);
            }else{
            return view('admin/quiz/crud', $data);
            }
        }
        // site_url("$role/signup")
    }
 
    public function delete()
    {

    }

}