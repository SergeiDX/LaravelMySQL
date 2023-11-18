<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tienda
 *
 * @property $id
 * @property $nombre_tienda
 * @property $id_videojuego
 * @property $id_venta
 * @property $created_at
 * @property $updated_at
 *
 * @property Venta $venta
 * @property Videojuego $videojuego
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tienda extends Model
{
    
    static $rules = [
		'nombre_tienda' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_tienda','id_videojuego','id_venta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function venta()
    {
        return $this->hasOne('App\Models\Venta', 'id', 'id_venta');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function videojuego()
    {
        return $this->hasOne('App\Models\Videojuego', 'id', 'id_videojuego');
    }
    

}
