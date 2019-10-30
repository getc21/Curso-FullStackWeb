<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    
    //relacion de un a muchos o inversa
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
            
}
