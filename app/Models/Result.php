<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
      'result_id',
      'student_id',
      'class',
      'session'
  ];
  public function students()
  {
       return $this->belongsToMany(Student::class);
  }
  public function subjects()
   {
        return $this->hasMany(Subject::class);
   }
}
