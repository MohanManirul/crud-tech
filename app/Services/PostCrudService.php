<?php
namespace App\Services;

use App\Models\Post;

class PostCrudService{
    public function storePost($title,$image){
        Post::create([
            'title' => $title,
            'image' => $image,
            'created_by' => getAuthUserId(),
            'created_user_type' => getAuthUserType(),
          ]);
    }
}


?>