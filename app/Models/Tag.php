<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    static $rules = [
        'nombre' => 'required',
        'slug'=>'required',
      ];
    
      protected $perPage = 20;
    
      /**
       * Attributes that should be mass-assignable.
       *
       * @var array
       */
      protected $fillable = ['nombre', 'slug'];
    
    
      /**
       * @return \Illuminate\Database\Eloquent\Relations\HasMany
       */
}
