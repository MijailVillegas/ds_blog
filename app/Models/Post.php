<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relación uno a muchos a la inversa <<Pertenece a {user y catergory}>>
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Relacion muchos a muchos 
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relación uno a uno Polimorfica

    public function image()
    {
        return $this->morphTo(Image::class, 'imageable');
    }
}
