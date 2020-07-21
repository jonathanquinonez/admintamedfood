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
 * Class Pedido
 * 
 * @property int $id
 * @property int $cliente_id
 * @property int|null $delivery_id
 * @property int $estado_id
 * @property float $total
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Cliente $cliente
 * @property Estado $estado
 * @property Delivery $delivery
 * @property Collection|ArticulosPedido[] $articulos_pedidos
 * @property Collection|MovimientosPedido[] $movimientos_pedidos
 *
 * @package App\Models
 */
class Pedido extends Model
{
	use SoftDeletes;
	protected $table = 'pedidos';

	protected $casts = [
		'cliente_id' => 'int',
		'delivery_id' => 'int',
		'estado_id' => 'int',
		'total' => 'float'
	];

	protected $fillable = [
		'cliente_id',
		'delivery_id',
		'estado_id',
		'total'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}

	public function estado()
	{
		return $this->belongsTo(Estado::class);
	}

	public function delivery()
	{
		return $this->belongsTo(Delivery::class);
	}

	public function articulos_pedidos()
	{
		return $this->hasMany(ArticulosPedido::class);
	}

	public function movimientos_pedidos()
	{
		return $this->hasMany(MovimientosPedido::class);
	}
}
