<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
      'subject_id',
      'result_id',
      'name',
      'CA',
      'score'
  ];

  public function results()
  {
       return $this->belongsTo(Result::class);
  }
}
