<?php

use Illuminate\Http\Response;

return [

    \Illuminate\Validation\ValidationException::class => [
        'message' => 'Los datos ingresados no son válidos.',
        'code' => Response::HTTP_UNPROCESSABLE_ENTITY
    ],
    \Illuminate\Auth\Access\AuthorizationException::class => [
        'message' => 'No está autorizado para ejecutar la acción.',
        'code' => Response::HTTP_FORBIDDEN
    ],
    \Illuminate\Database\QueryException::class => [
        'message' => 'Database error.',
        'code' => Response::HTTP_INTERNAL_SERVER_ERROR
    ],
    'default' => [
        'message' => 'En estos momentos los servicios no responden. Por favor, intente más tarde',
        'code' => Response::HTTP_INTERNAL_SERVER_ERROR
    ]
    
];