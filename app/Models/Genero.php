<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Genero
 *
 * @property $id
 * @property $nombre_genero
 * @property $id_videojuego
 * @property $id_clasificacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Clasificacione $clasificacione
 * @property Videojuego $videojuego
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Genero extends Model
{
    
    static $rules = [
		'nombre_genero' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_genero','id_videojuego','id_clasificacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clasificacione()
    {
        return $this->hasOne('App\Models\Clasificacione', 'id', 'id_clasificacion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function videojuego()
    {
        return $this->hasOne('App\Models\Videojuego', 'id', 'id_videojuego');
    }
    

}
