<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
    use HasFactory;

     protected $table = 'docente';
     protected $primarykey ='PK_Docente';
     protected $fillable =['PK_Docente'];
}
