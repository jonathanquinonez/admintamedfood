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
 * Class Producto
 * 
 * @property int $id
 * @property int $productor_id
 * @property string|null $medida
 * @property float|null $stock
 * @property string|null $nombre
 * @property int $categoria_tipo_id
 * @property int $categoria_nutricional_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * @property float $precio
 * 
 * @property CategoriasNutricional $categorias_nutricional
 * @property CategoriasTipo $categorias_tipo
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
		'stock' => 'float',
		'categoria_tipo_id' => 'int',
		'categoria_nutricional_id' => 'int',
		'precio' => 'float'
	];

	protected $fillable = [
		'productor_id',
		'medida',
		'stock',
		'nombre',
		'categoria_tipo_id',
		'categoria_nutricional_id',
		'precio'
	];

	public function categorias_nutricional()
	{
		return $this->belongsTo(CategoriasNutricional::class, 'categoria_nutricional_id');
	}

	public function categorias_tipo()
	{
		return $this->belongsTo(CategoriasTipo::class, 'categoria_tipo_id');
	}

	public function articulos_pedidos()
	{
		return $this->hasMany(ArticulosPedido::class);
	}

	public function movimientos_productos()
	{
		return $this->hasMany(MovimientosProducto::class);
	}
}
