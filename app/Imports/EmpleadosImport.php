<?php
namespace App\Imports;

use App\Empleado;
use App\Mail\UserCreated;
use App\User;
use Cyberduck\LaravelExcel\Contract\ParserInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Mail\MontoAlerta;

class EmpleadosImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $existeMail = DB::table('users')->where('email','=',$row['email'])->first();
        $existeCedula = DB::table('empleados')->where('cedula','=',$row['cedula'])->first();

        if($existeMail == null)
        {
            if($existeCedula == null)
            {
                $user = new User();
                $empleado = new Empleado();
                $user->nombre = $row['nombre'];
                $user->email = $row['email'];
                $pin_seguridad = str_random(4);
                $pin_encrypt = bcrypt($pin_seguridad);
                $user->password  = $pin_encrypt;
                $user->save();
        
                $empleado->id_usuario = $user->id;
                $empleado->cedula = $row['cedula'];
                $empleado->celular = $row['celular'];
                $empleado->id_empresa = $row['idempresa'];
                $empleado->monto = $row['monto'];
        
                $user->pin_seguridad  = $pin_seguridad;
        
                $empresa = DB::table('empresas')
                    ->where('id','=',$row['idempresa'])
                    ->first();
        
                $user->nombre_entidad = $empresa->nombre;
        
                $empleado->save();
                
                if($empleado->monto > $empresa->monto)
                            {
                                retry(5, function() use ($user, $empleado)
                                {
                                    Mail::to('no-reply@bitu.com.co')->send(new MontoAlerta($user, $empleado));
                                }, 100);
                            }
        
                retry(5, function() use ($user){Mail::to($user->email)->send(new UserCreated($user));
                            }, 100);
                return $empleado;
            }
            return;
        }
        return;
    }
}