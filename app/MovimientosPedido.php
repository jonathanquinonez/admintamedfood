<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MovimientosPedido
 * 
 * @property int $id
 * @property int $pedido_id
 * @property int $estado_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Estado $estado
 * @property Pedido $pedido
 *
 * @package App\Models
 */
class MovimientosPedido extends Model
{
	use SoftDeletes;
	protected $table = 'movimientos_pedidos';

	protected $casts = [
		'pedido_id' => 'int',
		'estado_id' => 'int'
	];

	protected $fillable = [
		'pedido_id',
		'estado_id'
	];

	public function estado()
	{
		return $this->belongsTo(Estado::class);
	}

	public function pedido()
	{
		return $this->belongsTo(Pedido::class);
	}
}
