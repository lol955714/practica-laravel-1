<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtlInstitucion
 *
 * @property $id
 * @property $nombre
 * @property $codigo
 * @property $direccion
 * @property $telefono
 * @property $email
 * @property $color
 * @property $estado
 *
 * @property MntProyecto[] $mntProyectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CtlInstitucion extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctl_institucion';

    static $rules = [
		'nombre' => 'required',
		'codigo' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'color' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','codigo','direccion','telefono','email','color','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mntProyectos()
    {
        return $this->hasMany('App\Models\MntProyecto', 'id_establecimiento', 'id');
    }


}
