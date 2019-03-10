<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Student extends Model
{
    //

//    use softDeletes;
  protected $fillable=[
'student_name',
'student_roll',
'student_address',
'email'

    ];
#protected $dates=['deleted_at'];


}
