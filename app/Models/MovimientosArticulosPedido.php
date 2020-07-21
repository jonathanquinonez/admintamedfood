<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MovimientosArticulosPedido
 * 
 * @property int $id
 * @property int $articulo_pedido_id
 * @property float $stock_actul
 * @property int $estado_id
 * @property float $cantidad
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property ArticulosPedido $articulos_pedido
 *
 * @package App\Models
 */
class MovimientosArticulosPedido extends Model
{
	use SoftDeletes;
	protected $table = 'movimientos_articulos_pedidos';

	protected $casts = [
		'articulo_pedido_id' => 'int',
		'stock_actul' => 'float',
		'estado_id' => 'int',
		'cantidad' => 'float'
	];

	protected $fillable = [
		'articulo_pedido_id',
		'stock_actul',
		'estado_id',
		'cantidad'
	];

	public function articulos_pedido()
	{
		return $this->belongsTo(ArticulosPedido::class, 'articulo_pedido_id');
	}
}
