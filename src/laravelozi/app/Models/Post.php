<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $guarded = array('id');

    public $timestamps = false;

    public function getData(){
        
        $data = DB::table($this->table)->get();
        return $data;
    }

}
