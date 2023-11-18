<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Desarrolladore
 *
 * @property $id
 * @property $nombre_desarrollador
 * @property $fundacion
 * @property $sitio_web
 * @property $pais_origen
 * @property $created_at
 * @property $updated_at
 *
 * @property Contrato[] $contratos
 * @property Videojuego[] $videojuegos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Desarrolladore extends Model
{
    
    static $rules = [
		'nombre_desarrollador' => 'required',
		'fundacion' => 'required',
		'sitio_web' => 'required',
		'pais_origen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_desarrollador','fundacion','sitio_web','pais_origen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contratos()
    {
        return $this->hasMany('App\Models\Contrato', 'id_desarrollador', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videojuegos()
    {
        return $this->hasMany('App\Models\Videojuego', 'id_desarrollador', 'id');
    }
    

}
