<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
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
    public function render($request, Exception $e) {

        $status = 400;
       
        $response = [
            'errors' => 'Ha ocurrido un error, contacte al administrador del sistema.',
            'status' => $status,
            'request' => $request
        ];
        
         // valida si es una exception de la instancia de HttpException
        if ($this->isHttpException($e)) {
            // obtiene el codigo de la excepcion
            $status = $e->getStatusCode();
        }
        
        if ($status !== 400) {
            // Define la respuesta
            //modo depuracion
            if (config('app.debug')) {
                // agregar excepciones, mensajes
                $response['exception'] = get_class($e);
                $response['message'] = $e->getMessage();
                $response['trace'] = $e->getTrace();
            }
            // retorna el status y el json de respues
            return response()->json($response, $status);
        }
        
        return response()->json($response, $status);
    }
}
