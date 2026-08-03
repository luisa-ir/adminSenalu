<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_Center extends Model
{
     use HasFactory;

     protected $table = 'training_centers';

    protected $fillable = [
        'name',
        'location'
    ];

    //relacion 1:n con profesores
    public function teachers(){
        return $this->hasMany(Teacher::class);

    }

    //relacion 1:n con cursos
    public function courses(){
        return $this->hasMany(Course::class);

    }
}
