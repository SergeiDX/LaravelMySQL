<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plataforma
 *
 * @property $id
 * @property $nombre_plataforma
 * @property $fabricante
 * @property $id_videojuego
 * @property $id_usuario
 * @property $created_at
 * @property $updated_at
 *
 * @property Usuario $usuario
 * @property Videojuego $videojuego
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Plataforma extends Model
{
    
    static $rules = [
		'nombre_plataforma' => 'required',
		'fabricante' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_plataforma','fabricante','id_videojuego','id_usuario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function videojuego()
    {
        return $this->hasOne('App\Models\Videojuego', 'id', 'id_videojuego');
    }
    

}
