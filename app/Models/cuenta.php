<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuenta extends Model
{

    protected $table = "cuenta";


    use HasFactory;

    protected $fillable = ['estadodecuenta'];


}
