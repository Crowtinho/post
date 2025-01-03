<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='posts';

    protected function title():Attribute{
        return Attribute:: make(
            set:function($value){
                return strtolower($value);
            },
            get: function($value){
                return ucfirst($value);
            }
        );

    }
}
