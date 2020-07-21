<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string|null $img_perfil
 * @property int|null $user_id
 * @property int|null $suscripcion_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property User $user
 * @property Suscripcione $suscripcione
 * @property Collection|Pedido[] $pedidos
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

	public function pedidos()
	{
		return $this->hasMany(Pedido::class);
	}
}
