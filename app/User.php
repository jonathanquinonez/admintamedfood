<?php

namespace App;
use App\Notifications\MyResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
	use Notifiable, softDeletes;
	
	const USUARIO_VERIFICADO =  '1';
	const USUARIO_NO_VERIFICADO ='0';
	
	const USUARIO_NO_BLOQUEADO =  '1';
    const USUARIO_BLOQUEADO ='0';

	const si =  '1';
    const no ='0';

    const USUARIO_ADMINISTRADOR = 'true';
    const USUARIO_REGULAR = 'false';
    
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
		'email',
		'telefono',
		'admin',
		'verificado',
		'bloqueado',
		'notificaciones',
        'password',
        'identificacion'
    ];
    
    public function getDireccionAttribute($valor)
    {
        return ucwords($valor);
    }

    public function setEmailAttribute($valor)
    {
        $this->attributes['email'] = strtolower($valor);
    }

    public function esVerificado()
    {
        return $this->verificado == User::USUARIO_VERIFICADO;
    }

    public function hasRole($role)
    {
        return $this->admin === $role;
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyResetPassword($token));
    }

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
