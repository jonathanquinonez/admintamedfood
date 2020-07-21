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
 * Class Estado
 * 
 * @property int $id
 * @property string $nombre
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|MovimientosPedido[] $movimientos_pedidos
 * @property Collection|Pedido[] $pedidos
 *
 * @package App\Models
 */
class Estado extends Model
{
	use SoftDeletes;
	protected $table = 'estados';

	protected $fillable = [
		'nombre'
	];

	public function movimientos_pedidos()
	{
		return $this->hasMany(MovimientosPedido::class);
	}

	public function pedidos()
	{
		return $this->hasMany(Pedido::class);
	}
}
