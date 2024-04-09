<?php

namespace App\Controllers;
use App\Models\emoji_model;

class Emoji extends BaseController
{
    public function index()
    {
        $model = new emoji_model();
        $data['records'] = $model->findAll();

        return view('admin/emoji_link/index', $data);
    }
 

    public function crud($emoji_link_Id='')
    {
        $model = new emoji_model();
        $data['emoji_link'] = $model->find($emoji_link_Id);
        $data['emoji_link_Id'] = $emoji_link_Id;
         if(!$emoji_link_Id){
            $data['emoji_link'] =
            array(
             'emoji' =>'',
             'emoji_code' =>'',
             'link' =>'',  
             'status'  =>'');
         }
    
        $data['records'] = $model->findAll();
        return view('admin/emoji_link/crud', $data);

    }

    public function save()
    {
          $emoji_model = new emoji_model();
            $data['records'] = $emoji_model->findAll();
            
    //   print_r($_POST); die();
    $emoji_link_id = ($this->request->getVar('emoji_code'));
      $model = new emoji_model();
     $data['emoji_link'] = $model->find($emoji_link_id);
        $data['emoji_link_Id'] = $emoji_link_id;
        //include helper form
        helper(['form']);
       
        //set rules validation form
        $rules = [
            'name'          => 'required',
            'emoji_code'          => 'required',
            'link'          => 'required|min_length[3]|max_length[200]',
           
            'status'          => 'required',
        ];
         
 
        if($this->validate($rules)){
            $model = new emoji_model();
            $data = [
                'name'     => $this->request->getVar('name'),
                 'emoji_quote1'     => $this->request->getVar('emoji_quote1'),
                'emoji_quote2'     => $this->request->getVar('emoji_quote2'),
                'emoji_quote3'     => $this->request->getVar('emoji_quote3'),
                'emoji_quote4'     => $this->request->getVar('emoji_quote4'),
                'emoji_quote5'     => $this->request->getVar('emoji_quote5'),
                'link'     => $this->request->getVar('link'),
                'status'     => $this->request->getVar('status'),
            ];
            
        if($emoji_link_id){
            $model->update($emoji_link_id, $data);
            
            return redirect()->to("/admin/emoji_link/crud/".$emoji_link_id)->with('success', 'emoji updated successfull. ');
        }else {
        $model->insert($data);
        $user_id = $model->getInsertID();
        return redirect()->to("/admin/emoji_link/crud")->with('success', 'emoji_link created successfull. ');
        }
       
       
        }
        else{
            $data['validation'] = $this->validator;
            // if($emoji_link_id){
            //     return view('admin/emoji_link/crud/'.$emoji_link_id, $data);
            // }else{
            return view('admin/emoji_link/crud', $data);
           // }
        }
        // site_url("$role/signup")
    }
 
    public function delete()
    {

    }

}