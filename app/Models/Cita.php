<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $table = "Citas";
    protected $fillable = ['fecha', 'estilista', 'cliente', 'tratamiento'];
}
