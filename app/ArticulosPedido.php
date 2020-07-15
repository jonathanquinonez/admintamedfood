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
 * Class ArticulosPedido
 * 
 * @property int $id
 * @property int $pedido_id
 * @property int $producto_id
 * @property float $cantidad
 * @property float $precio
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Pedido $pedido
 * @property Producto $producto
 * @property Collection|MovimientosArticulosPedido[] $movimientos_articulos_pedidos
 *
 * @package App\Models
 */
class ArticulosPedido extends Model
{
	use SoftDeletes;
	protected $table = 'articulos_pedidos';

	protected $casts = [
		'pedido_id' => 'int',
		'producto_id' => 'int',
		'cantidad' => 'float',
		'precio' => 'float'
	];

	protected $fillable = [
		'pedido_id',
		'producto_id',
		'cantidad',
		'precio'
	];

	public function pedido()
	{
		return $this->belongsTo(Pedido::class);
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class);
	}

	public function movimientos_articulos_pedidos()
	{
		return $this->hasMany(MovimientosArticulosPedido::class, 'articulo_pedido_id');
	}
}
