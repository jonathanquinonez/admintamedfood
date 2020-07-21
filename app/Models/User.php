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
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $apellido
 * @property string $identificacion
 * @property string $email
 * @property string|null $telefono
 * @property string $password
 * @property string $admin
 * @property int $verificado
 * @property int $bloqueado
 * @property int $notificaciones
 * @property string|null $remember_token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Cliente $cliente
 * @property Collection|Delivery[] $deliveries
 * @property Collection|Direccione[] $direcciones
 * @property Collection|Productore[] $productores
 *
 * @package App\Models
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'users';

	protected $casts = [
		'verificado' => 'int',
		'bloqueado' => 'int',
		'notificaciones' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'apellido',
		'identificacion',
		'email',
		'telefono',
		'password',
		'admin',
		'verificado',
		'bloqueado',
		'notificaciones',
		'remember_token'
	];

	public function cliente()
	{
		return $this->hasOne(Cliente::class);
	}

	public function deliveries()
	{
		return $this->hasMany(Delivery::class);
	}

	public function direcciones()
	{
		return $this->hasMany(Direccione::class);
	}

	public function productores()
	{
		return $this->hasMany(Productore::class);
	}
}
