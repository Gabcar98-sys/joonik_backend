<?php
use App\Http\Middleware\ApiKey;

class Kernel extends HttpKernel
{

    protected $middlewareAliases = [

        'api_key' => \App\Http\Middleware\Api_key::class,
    ];

}
