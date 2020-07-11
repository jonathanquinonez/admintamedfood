<?php

namespace Http\Controllers;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponser;

class ApiController extends Controller
{
    // todos los controladores extienden a apicontroller y apicontroller usa apiresponser asi tendriamos las repsuestas de cada uno de los controladores
    use ApiResponser;
   // llamamos el al archivo de la carpeta Traits donde tenemos las respuestas e instancias
}
