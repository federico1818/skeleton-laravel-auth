<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Lang;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     */
    /* public function render($request, Throwable $exception)
    {
        if($exception instanceof ValidationException)
        {
            $response = Lang::get('exception')[get_class($exception)];

            return response()->json([
                'message' => $response['message'],
                'errors' => $exception->validator->getMessageBag()
            ], $response['code']);
        }

        if(array_key_exists(get_class($exception), Lang::get('exception'))) 
        {
            $response = Lang::get('exception')[get_class($exception)];
            
            return response()->json([
                'message' => $response['message']
            ], $response['code']);
        }

        return parent::render($request, $exception);
    } */
}
