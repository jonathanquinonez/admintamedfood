<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Suscripcione
 * 
 * @property int $id
 * @property string $nombre
 * @property string $detalle
 * @property int $porcentaje
 * @property string|null $img
 * @property int $terminos_condiciones_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Cliente $cliente
 *
 * @package App\Models
 */
class Suscripcione extends Model
{
	use SoftDeletes;
	protected $table = 'suscripciones';

	protected $casts = [
		'porcentaje' => 'int',
		'terminos_condiciones_id' => 'int'
	];

	protected $fillable = [
		'nombre',
		'detalle',
		'porcentaje',
		'img',
		'terminos_condiciones_id'
	];

	public function cliente()
	{
		return $this->hasOne(Cliente::class, 'suscripcion_id');
	}
}
