<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'author', 'release', 'price', 'genreId'
    ];

    public function book(){
        return $this->hasMany((Book::class));
    }
}
