<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

/*     protected $fillable = [
        'title',
        'slug',
        'content',
        'category',
    ]; */

    protected $guarded =[
        'is_active',
    ];

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
            get: function ($value) {
                return ucfirst($value);
            }
        );
    }
    protected function category(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                switch ($value) {
                    case 'ficcion':
                        $value = 'ficción';
                        break;
                    case 'accion':
                        $value = 'acción';
                        break;
                }
                return ucfirst($value);
            }
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';   
    }
    protected static function boot()
    {
        parent::boot();
    
        static::saving(function ($post) {
            if ($post->isDirty('title') || empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }
    

}
