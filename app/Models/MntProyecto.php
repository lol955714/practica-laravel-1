<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MntProyecto
 *
 * @property $id
 * @property $nombre
 * @property $codigo
 * @property $descripcion
 * @property $color
 * @property $icono
 * @property $id_establecimiento
 * @property $id_fuente_fondos
 * @property $id_estado_proyecto
 *
 * @property CtlEstadoProyecto $ctlEstadoProyecto
 * @property CtlFuenteFondo $ctlFuenteFondo
 * @property CtlInstitucion $ctlInstitucion
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MntProyecto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mnt_proyecto';
    static $rules = [
		'nombre' => 'required',
		'codigo' => 'required',
		'descripcion' => 'required',
		'color' => 'required',
		'icono' => 'required',
		'id_establecimiento' => 'required',
		'id_fuente_fondos' => 'required',
		'id_estado_proyecto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','codigo','descripcion','color','icono','id_establecimiento','id_fuente_fondos','id_estado_proyecto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ctlEstadoProyecto()
    {
        return $this->hasOne('App\Models\CtlEstadoProyecto', 'id', 'id_estado_proyecto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ctlFuenteFondo()
    {
        return $this->hasOne('App\Models\CtlFuenteFondo', 'id', 'id_fuente_fondos');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ctlInstitucion()
    {
        return $this->hasOne('App\Models\CtlInstitucion', 'id', 'id_establecimiento');
    }


}
