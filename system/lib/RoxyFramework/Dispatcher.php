<?php

namespace RoxyFramework;

use Roxy\Http\Response;

class Dispatcher
{
    public function __construct()
    {
        
    }

    public function dispatch($request)
    {
        

        $response = new Response;
        $response->setRequest($request);

        return $response;
    }

    public function _validateRoute()
    {
        
    }

    public function _injectDefaultRoute()
    {
        
    }
}
