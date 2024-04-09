<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class Frontend extends BaseController
{
    public function index(): string
    {
        $data=[ 'page_title'=>"Home"];

        return view('frontend/index',$data);
    
    }
   
 
   
    public function about(): string
    {
        $data=[ 'page_title'=>""];

        return view('frontend/about',$data);
      
    }
   
    public function baking(): string
    {
        $data=[ 'page_title'=>""];

        return view('frontend/baking',$data);
      
    }
    public function blog(): string
    {
        $data=[ 'page_title'=>""];

        return view('frontend/blog',$data);
      
    }
    public function crying(): string
    {
        $data=[ 'page_title'=>"crying"];

        return view('frontend/crying',$data);
      
    }
    public function culture(): string
    {
        $data=[ 'page_title'=>"culture"];

        return view('frontend/culture',$data);
      
    }
    public function dancingroutine(): string
    {
        $data=[ 'page_title'=>"dancingroutine"];

        return view('frontend/dancing-routine',$data);
      
    }
    public function depression(): string
    {
        $data=[ 'page_title'=>""];

        return view('frontend/depression',$data);
      
    }
    public function eating(): string
    {
        $data=[ 'page_title'=>""];

        return view('frontend/eating',$data);
      
    }
    public function embracing_routine(): string
    {
        $data=[ 'page_title'=>"embracing routine"];

        return view('frontend/embracing-routine',$data);
      
    }
    public function exercies(): string
    {
        $data=[ 'page_title'=>"exercies"];

        return view('frontend/exercies',$data);
      
    }
    public function festivals(): string
    {
        $data=[ 'page_title'=>"festivals"];

        return view('frontend/festivals',$data);
      
    }
    public function generosity(): string
    {
        $data=[ 'page_title'=>"generosity"];

        return view('frontend/generosity',$data);
      
    }
    public function gratitude(): string
    {
        $data=[ 'page_title'=>"gratitude"];

        return view('frontend/gratitude',$data);
      
    }
    public function household_anxiety(): string
    {
        $data=[ 'page_title'=>"household_anxiety"];

        return view('frontend/household-anxiety',$data);
      
    }
    public function journaling(): string
    {
        $data=[ 'page_title'=>"journaling"];

        return view('frontend/journaling',$data);
      
    }
    public function mental_health_moment(): string
    {
        $data=[ 'page_title'=>"mental_health_moment"];

        return view('frontend/mental-health-moment',$data);
      
    }
    public function mood_boosting(): string
    {
        $data=[ 'page_title'=>"mood_boosting"];

        return view('frontend/mood-boosting',$data);
      
    }
    public function phone_addiction(): string
    {
        $data=[ 'page_title'=>"phone_addiction"];

        return view('frontend/phone-addiction',$data);
      
    }
    public function pricing(): string
    {
        $data=[ 'page_title'=>"pricing"];

        return view('frontend/pricing',$data);
      
    }
    public function privacy_policy(): string
    {
        $data=[ 'page_title'=>"privacy-policy"];

        return view('frontend/privacy-policy',$data);
      
    }
    public function ritgh_meditation(): string
    {
        $data=[ 'page_title'=>"ritgh_meditation"];

        return view('frontend/ritgh-meditation',$data);
      
    }
    public function selfcare(): string
    {
        $data=[ 'page_title'=>"selfcare"];

        return view('frontend/selfcare',$data);
      
    }
    public function smailing_health_benefits(): string
    {
        $data=[ 'page_title'=>"smailing_health_benefits"];

        return view('frontend/smailing-health-benefits',$data);
      
    }
    public function stigma_around_mental_health(): string
    {
        $data=[ 'page_title'=>"stigma_around_mental_health"];

        return view('frontend/stigma-around-mental-health',$data);
      
    }
    public function termsandconditions(): string
    {
        $data=[ 'page_title'=>"termsandconditions"];

        return view('frontend/terms-and-conditions',$data);
      
    }
    public function testimonials(): string
    {
        $data=[ 'page_title'=>"testimonials"];

        return view('frontend/testimonials',$data);
      
    }
    public function unique(): string
    {
        $data=[ 'page_title'=>"unique"];

        return view('frontend/unique',$data);
      
    }
  
  
}
