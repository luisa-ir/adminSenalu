<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'cell_number',
        'course_id',
        'computer_id'
    ];

    //relacion uno a uno con curso
    public function courses(){
        return $this->belongsTo(Course::class);
    }

    //uno a uno con comtupador
    public function computers(){
        return $this->belongsTo(Computer::class);
    }




}
