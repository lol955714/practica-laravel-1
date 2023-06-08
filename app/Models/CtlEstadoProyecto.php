<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtlEstadoProyecto
 *
 * @property $id
 * @property $nombre
 * @property $codigo
 * @property $color
 * @property $icono
 * @property $estado
 *
 * @property MntProyecto[] $mntProyectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CtlEstadoProyecto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctl_estado_proyecto';
    static $rules = [
		'nombre' => 'required',
		'codigo' => 'required',
		'color' => 'required',
		'icono' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','codigo','color','icono','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mntProyectos()
    {
        return $this->hasMany('App\Models\MntProyecto', 'id_estado_proyecto', 'id');
    }


}
