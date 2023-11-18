<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{


    protected $fillable = ['id','title', 'content', 'slug', 'image'];

}
