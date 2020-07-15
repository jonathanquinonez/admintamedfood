<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Direccione
 * 
 * @property int $id
 * @property int $user_id
 * @property string $latitud
 * @property string $longitud
 * @property string $direccion
 * @property string $detalle
 * @property string $tipo_direccion
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Direccione extends Model
{
	use SoftDeletes;
	protected $table = 'direcciones';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'latitud',
		'longitud',
		'direccion',
		'detalle',
		'tipo_direccion'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
