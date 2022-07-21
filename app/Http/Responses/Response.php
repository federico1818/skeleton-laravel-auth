<?php

namespace App\Http\Responses;

use JsonSerializable;

abstract class Response implements JsonSerializable
{
    abstract public function jsonSerialize();
}
