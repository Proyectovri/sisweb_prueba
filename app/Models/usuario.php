<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
     protected $primarykey ='PK_Usuario';
    protected $fillable =['FK_RolUsuario_Usuario','Usua_id','Usua_Responsable','Usua_Correo','Usua_Clave','Usu_Estado'];
    
}
