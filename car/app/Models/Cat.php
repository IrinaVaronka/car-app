<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'address', 'lead'];


    public function car()
    {
        return $this->hasMany(Car::class);
    }
}
