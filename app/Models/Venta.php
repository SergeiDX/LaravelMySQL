<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $10
 * @property $fecha_venta
 * @property $created_at
 * @property $updated_at
 *
 * @property Tienda[] $tiendas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'10' => 'required',
		'fecha_venta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['10','fecha_venta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tiendas()
    {
        return $this->hasMany('App\Models\Tienda', 'id_venta', 'id');
    }
    

}
