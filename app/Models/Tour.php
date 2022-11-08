<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $tour="img";
    protected $primaryKey="id";
    protected $fillable=['nombre', 'descripcion', 'precio', 'img', 'dias', 'categoria', 'ubicacion'];
}
