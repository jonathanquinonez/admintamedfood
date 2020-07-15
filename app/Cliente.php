<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string|null $rut
 * @property string|null $direccion
 * @property string|null $img_perfil
 * @property int|null $user_id
 * @property int|null $suscripcion_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property User $user
 * @property Suscripcione $suscripcione
 *
 * @package App\Models
 */
class Cliente extends Model
{
	use SoftDeletes;
	protected $table = 'clientes';

	protected $casts = [
		'user_id' => 'int',
		'suscripcion_id' => 'int'
	];

	protected $fillable = [
		'rut',
		'direccion',
		'img_perfil',
		'user_id',
		'suscripcion_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function suscripcione()
	{
		return $this->belongsTo(Suscripcione::class, 'suscripcion_id');
	}
}
