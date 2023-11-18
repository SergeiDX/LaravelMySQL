<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Videojuego
 *
 * @property $id
 * @property $titulo_videojuego
 * @property $lanzamiento
 * @property $id_desarrollador
 * @property $created_at
 * @property $updated_at
 *
 * @property Desarrolladore $desarrolladore
 * @property Genero[] $generos
 * @property Plataforma[] $plataformas
 * @property Tienda[] $tiendas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Videojuego extends Model
{
    
    static $rules = [
		'titulo_videojuego' => 'required',
		'lanzamiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo_videojuego','lanzamiento','id_desarrollador'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function desarrolladore()
    {
        return $this->hasOne('App\Models\Desarrolladore', 'id', 'id_desarrollador');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function generos()
    {
        return $this->hasMany('App\Models\Genero', 'id_videojuego', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plataformas()
    {
        return $this->hasMany('App\Models\Plataforma', 'id_videojuego', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tiendas()
    {
        return $this->hasMany('App\Models\Tienda', 'id_videojuego', 'id');
    }
    

}
