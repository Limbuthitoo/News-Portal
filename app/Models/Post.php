<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

   /**
    * The roles that belong to the Post
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function categories()
   {
       return $this->belongsToMany(Category::class);
   }
}


