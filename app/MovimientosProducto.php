<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MovimientosProducto
 * 
 * @property int $id
 * @property int $producto_id
 * @property string $tipo_movimiento
 * @property float $stock_actual
 * @property float $cantidad
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Producto $producto
 *
 * @package App\Models
 */
class MovimientosProducto extends Model
{
	use SoftDeletes;
	protected $table = 'movimientos_productos';

	protected $casts = [
		'producto_id' => 'int',
		'stock_actual' => 'float',
		'cantidad' => 'float'
	];

	protected $fillable = [
		'producto_id',
		'tipo_movimiento',
		'stock_actual',
		'cantidad'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class);
	}
}
