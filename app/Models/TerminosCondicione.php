<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TerminosCondicione
 * 
 * @property int $id
 * @property string $nombre
 * @property string|null $descripcion
 * 
 * @property Collection|Suscripcione[] $suscripciones
 *
 * @package App\Models
 */
class TerminosCondicione extends Model
{
	protected $table = 'terminos_condiciones';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descripcion'
	];

	public function suscripciones()
	{
		return $this->hasMany(Suscripcione::class, 'terminos_condiciones_id');
	}
}
