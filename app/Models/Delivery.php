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
 * Class Delivery
 * 
 * @property int $id
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property User $user
 * @property Collection|Pedido[] $pedidos
 *
 * @package App\Models
 */
class Delivery extends Model
{
	use SoftDeletes;
	protected $table = 'delivery';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function pedidos()
	{
		return $this->hasMany(Pedido::class);
	}
}
