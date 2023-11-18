<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $nombre_empresa
 * @property $fundacion
 * @property $sitio_web
 * @property $pais_origen
 * @property $created_at
 * @property $updated_at
 *
 * @property Contrato[] $contratos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'nombre_empresa' => 'required',
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
    protected $fillable = ['nombre_empresa','fundacion','sitio_web','pais_origen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contratos()
    {
        return $this->hasMany('App\Models\Contrato', 'id_empresa', 'id');
    }
    

}
