<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
     use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'area_id',
        'training_center_id'
    ];

    //relacion 1:1 con area
    public function areas(){
        return $this->belongsTo(Area::class);

    }

    //relacion 1:1
    public function training_centers(){
        return $this->belongsTo(Training_center::class);

    }

    //relacion n:m  con course
    public function courses(){
        return $this->belongsToMany(Course::class);

    }

}
