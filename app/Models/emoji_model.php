<?php 

namespace App\Models;

use CodeIgniter\Model;

class emoji_model extends Model
{
    protected $table = 'emoji_link';
    protected $primaryKey = 'id';
    protected $allowedFields = [  'id', 'name', 'emoji_quotes', 'emoji_code', 'link', 'emoji_quote1', 'emoji_quote2', 'emoji_quote3', 'emoji_quote4', 'emoji_quote5', 'status', 'updated_at'  ];

 public function updateRecordByEmojiCode($emojiCode, $data)
    {
        // Update the record where 'emoji_code' column matches $emojiCode
        $this->where('emoji_code', $emojiCode)->update($data);
       echo   $lastQuery = $this->getLastQuery();
    }
  

    // Add other CRUD methods as needed
}
 ?>