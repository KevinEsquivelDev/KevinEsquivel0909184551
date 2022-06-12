<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $id_usuario
 * @property $nombre_empleado
 * @property $numero_telefono
 * @property $correo
 * @property $direccion
 * @property $departamento
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'id_usuario' => 'required',
		'nombre_empleado' => 'required',
		'numero_telefono' => 'required',
		'correo' => 'required',
		'direccion' => 'required',
		'departamento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','nombre_empleado','numero_telefono','correo','direccion','departamento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_usuario');
    }
    

}
