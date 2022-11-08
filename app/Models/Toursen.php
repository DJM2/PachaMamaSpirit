<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Toursen
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $img
 * @property $dias
 * @property $categoria
 * @property $ubicacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Toursen extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
		'img' => 'required',
		'dias' => 'required',
		'categoria' => 'required',
		'ubicacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','precio','img','dias','categoria','ubicacion'];



}
