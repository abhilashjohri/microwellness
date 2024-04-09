<?php 
// app/Models/Quiz_model.php

namespace App\Models;

use CodeIgniter\Model;

class Quiz_model extends Model
{
    protected $table = 'quiz';
    protected $primaryKey = 'id';
    protected $allowedFields = [ 'user_id', 'question', 'answer', 'option1', 'option2', 'option3', 'option4', 'created_at', 'updated_at', 'status'];

    public function getQuestions()
    {
        return $this->findAll();
    }

    // Add other CRUD methods as needed
}
 ?>