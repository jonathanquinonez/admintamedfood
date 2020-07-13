<?php

namespace App;
use App\Notifications\MyResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, softDeletes;

    const USUARIO_VERIFICADO    = '1';
    const USUARIO_NO_VERIFICADO = '0';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'name',
        'admin',
        'email',
        'password',
        'verificado',
        'verificacion_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        // 'remember_token',
        'verificacion_token',
    ];

    public static function generarVerificationToken()
    {
        return str_random(40);
    }

    /*public function setNombreAttribute($valor)
    {
        $this->attributes['nombre'] =ucwords($valor);
    }*/
    public function setDireccionAttribute($valor)
    {
        $this->attributes['direccion'] = strtolower($valor);
    }

    /*public function getNombreAttribute($valor)
    {
        return ucwords($valor);
    }*/

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
}
