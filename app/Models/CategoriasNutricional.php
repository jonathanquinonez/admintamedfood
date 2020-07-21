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
 * Class CategoriasNutricional
 * 
 * @property int $id
 * @property string $nombre
 * @property string $img
 * @property int $estado
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class CategoriasNutricional extends Model
{
	use SoftDeletes;
	protected $table = 'categorias_nutricional';

	protected $casts = [
		'estado' => 'int'
	];

	protected $fillable = [
		'nombre',
		'img',
		'estado'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class, 'categoria_nutricional_id');
	}
}
