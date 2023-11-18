<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $username
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @property Plataforma[] $plataformas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'username' => 'required',
		'correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['username','correo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plataformas()
    {
        return $this->hasMany('App\Models\Plataforma', 'id_usuario', 'id');
    }
    

}
