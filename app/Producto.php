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
 * Class Producto
 * 
 * @property int $id
 * @property int $productor_id
 * @property string|null $medida
 * @property float|null $stock
 * @property string|null $nombre
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|ArticulosPedido[] $articulos_pedidos
 * @property Collection|MovimientosProducto[] $movimientos_productos
 *
 * @package App\Models
 */
class Producto extends Model
{
	use SoftDeletes;
	protected $table = 'productos';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'productor_id' => 'int',
		'stock' => 'float'
	];

	protected $fillable = [
		'productor_id',
		'medida',
		'stock',
		'nombre',
        'precio'
	];

	public function articulos_pedidos()
	{
		return $this->hasMany(ArticulosPedido::class);
	}

	public function movimientos_productos()
	{
		return $this->hasMany(MovimientosProducto::class);
	}
}
