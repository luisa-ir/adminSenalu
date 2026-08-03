<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;


    protected $fillable = [
        'number',
        'brand'
    ];

    //relacion 1:n con aprendices
    public function apprentices(){
        return $this->hasOne(Apprentice::class);
    }


}
