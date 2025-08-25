<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Voyager\Traits\Translatable;


class Category extends Model
{
    use Translatable;
    protected $translatable = ['title','text','meta_title','meta_desc','meta_tags','hero'];    

    public function products(){
        return $this->hasMany(Service::class,'category_id','id');
    }
}
