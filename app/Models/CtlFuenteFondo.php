<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtlFuenteFondo
 *
 * @property $id
 * @property $nombre
 * @property $codigo
 * @property $descripcion
 * @property $color
 * @property $icono
 * @property $estado
 *
 * @property MntProyecto[] $mntProyectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CtlFuenteFondo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctl_fuente_fondos';
    public $timestamps = false;

    static $rules = [
		'nombre' => 'required',
		'codigo' => 'required',
		'descripcion' => 'required',
		'color' => 'required',
		'icono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','codigo','descripcion','color','icono','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mntProyectos()
    {
        return $this->hasMany('App\Models\MntProyecto', 'id_fuente_fondos', 'id');
    }


}
