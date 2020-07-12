<?php

namespace App\Exceptions;

use App\Exceptions\unauthenticated;
use App\Traits\ApiResponser;
use Exception;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\convertValidationExceptionToResponse;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Validation\ValidationException;
use Psr\Http\Message\getStatusCode;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Tymon\JWTAuth\Exceptions\JWTException;

class Handler extends ExceptionHandler
{

    use ApiResponser;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof ValidationException) {
            return $this->convertValidationExceptionToResponse($exception, $request);
        }
        if ($exception instanceof ModelNotFoundException) {
            $modelo = strtolower(class_basename($exception->getModel()));
            // return redirect('error404');
            return $this->errorResponse("no existe ninguna instancia de {$modelo} con el id especificado", 404);
        }
        if ($exception instanceof AuthenticationException) {
            return redirect()->guest('login');
            return $this->unAuthenticated($request, $exception);
        }
        if ($exception instanceof AuthorizationException) {
            return $this->errorResponse("no posee permisos para ejecutar la acción", 403);
        }
        if ($exception instanceof NotFoundHttpException) {

            // return redirect('error404');
            return $this->errorResponse("no se encontro la url especificada", 404);
        }
        if ($exception instanceof MethodNotAllowedHttpException) {
            return $this->errorResponse("El método especificado en la petición no es el válido", 405);
        }
        if ($exception instanceof HttpException) {
            return $this->errorResponse($exception->getMessage(), $exception->getStatusCode());
        }
        if ($exception instanceof JWTException) {
            // return redirect('error500');
            return $this->errorResponse('Problemas con el Token', 500);
        }
        if ($exception instanceof TokenMismatchException) {
            return redirect()->back()->whitInput($request->input());
        }
        if ($exception instanceof ClientException) {
            // return redirect('error500');
            return $this->errorResponse($exception->getMessage(), $exception->getStatusCode());
            
            return $this->errorResponse('Error al enviar', 500);
        }
        // if ($exception instanceof QueryException) {
        //     $codigo = $exception->errorInfo[1];
        //     if ($codigo == 1451) {
        //         return $this->errorResponse('No se puede Eliminar de forma permanente el recurso, por que está relacionado con algun otro.', 409);
        //     } else {
        //         return $this->errorResponse('QueryException - posiblemente error en la insercion .', 409);
        //     }

        // }

        if (config('app.debug')) {
            return parent::render($request, $exception);
        }
        // return redirect('error500');
        // return $this->errorResponse($request, 500);

        return parent::render($request, $exception);
    }
}
