<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaccion extends Model
{

    protected $table = "transaccion";


    use HasFactory;

    protected $fillabe = ['fecha', 'hora', 'monto', 'imagen'];


}
