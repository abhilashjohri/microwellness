<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizResultModel extends Model
{
    protected $table = 'quiz_results';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'selected_emoji','user_id', 'results', 'created_at'];

    // Add any additional methods as needed
}