<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pedido
 * 
 * @property int $id
 * @property int $cliente_id
 * @property int $estado_id
 * @property float $total
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Estado $estado
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
		'estado_id' => 'int',
		'total' => 'float'
	];

	protected $fillable = [
		'cliente_id',
		'estado_id',
		'total'
	];

	public function estado()
	{
		return $this->belongsTo(Estado::class);
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
