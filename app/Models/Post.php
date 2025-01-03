<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
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
