<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','matric_number','gender','date_of_birth','citizenship','marital_status','religion','active_status','year_of_study','id_no','email'];
}