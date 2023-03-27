<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Student extends Model
    //implements HasMedia
{
    use HasFactory;
        //, InteractsWithMedia;

    protected $fillable = [
       'student_id',
       'first_name',
       'last_name',
       'class',
       'age'
   ];


   public function results()
   {
        return $this->hasMany(Result::class);
   }
}
