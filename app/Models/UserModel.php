<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'users';
    protected $primaryKey =  'user_id';
    protected $allowedFields = ['user_id', 'user_email', 'user_password', 'first_name', 'last_name', 'age', 'gender', 'role', 'location', 'phone_number', 'read_password', 'forget_otp', 'created_at', 'updated_at'];
  
    public function isLoggedIn()
    {
        // Check if the user is logged in
        return session()->get('user_id') !== null;
    }

}
