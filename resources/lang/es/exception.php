<?php

use Illuminate\Http\Response;

return [

    \Illuminate\Auth\Access\AuthorizationException::class => [
        'message' => 'No está autorizado para ejecutar la acción.',
        'code' => Response::HTTP_FORBIDDEN
    ],
    'default' => [
        'message' => 'En estos momentos los servicios no responden. Por favor, intente más tarde',
        'code' => Response::HTTP_INTERNAL_SERVER_ERROR
    ]
    
];