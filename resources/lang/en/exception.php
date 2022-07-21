<?php

use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

return [

    \Illuminate\Validation\ValidationException::class => [
        'message' => 'The given data was invalid.',
        'code' => Response::HTTP_UNPROCESSABLE_ENTITY
    ],
    \Illuminate\Auth\Access\AuthorizationException::class => [
        'message' => 'This action is unauthorized.',
        'code' => Response::HTTP_FORBIDDEN
    ],
    \Illuminate\Database\QueryException::class => [
        'message' => 'Database error.',
        'code' => Response::HTTP_INTERNAL_SERVER_ERROR
    ],
    'default' => [
        'message' => 'Default.',
        'code' => Response::HTTP_INTERNAL_SERVER_ERROR
    ]

];