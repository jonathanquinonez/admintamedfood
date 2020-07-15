<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TerminosCondicione
 * 
 * @property int $id
 * @property string|null $descripción
 *
 * @package App\Models
 */
class TerminosCondicione extends Model
{
	protected $table = 'terminos_condiciones';
	public $timestamps = false;

	protected $fillable = [
		'descripción'
	];
}
