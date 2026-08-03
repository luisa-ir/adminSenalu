<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
     use HasFactory;


    protected $fillable = [
        'name'
    ];

    //relacion 1:n con profesores relacion inversa
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }

    //relacion 1:n con courses relacion inversa
    public function courses(){
        return $this->hasMany(Course::class);

    }
}
