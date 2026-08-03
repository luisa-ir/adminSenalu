<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $fillable = [
        'course_number',
        'day',
        'area_id',
        'training_center_id'

    ];

    //relacion 1:1 con area
    public function areas(){
        return $this->belongsTo(Area::class);
    }

    //relacion 1:1 con training_center
    public function training_centers(){
        return $this->belongsTo(Training_center::class);
    }

    //relacion 1:n con apprentices
    public function apprentices(){
        return $this->hasMany(Apprentice::class);
    }

    //relacion n:m privote con profesores
    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }

}
