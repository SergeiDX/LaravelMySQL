<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrato
 *
 * @property $id
 * @property $descripcion_contrato
 * @property $fecha_inicio
 * @property $fecha_limite
 * @property $id_desarrollador
 * @property $id_empresa
 * @property $created_at
 * @property $updated_at
 *
 * @property Desarrolladore $desarrolladore
 * @property Empresa $empresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contrato extends Model
{
    
    static $rules = [
		'descripcion_contrato' => 'required',
		'fecha_inicio' => 'required',
		'fecha_limite' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion_contrato','fecha_inicio','fecha_limite','id_desarrollador','id_empresa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function desarrolladore()
    {
        return $this->hasOne('App\Models\Desarrolladore', 'id', 'id_desarrollador');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'id_empresa');
    }
    

}
