<?php

use Illuminate\Http\Response;

return [

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