<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clasificacione
 *
 * @property $id
 * @property $clasificacion
 * @property $tipo_clasificacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Genero[] $generos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Clasificacione extends Model
{
    
    static $rules = [
		'clasificacion' => 'required',
		'tipo_clasificacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['clasificacion','tipo_clasificacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function generos()
    {
        return $this->hasMany('App\Models\Genero', 'id_clasificacion', 'id');
    }
    

}
