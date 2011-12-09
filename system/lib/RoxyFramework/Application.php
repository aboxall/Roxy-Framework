<?php

namespace RoxyFramework;

use Roxy\Http\Request;
use Roxy\Http\Response;
use Roxy\Error;

use RoxyFramework\Dispatcher;
use RoxyFramework\Exception\DispatcherException;

class Application
{
    public function getResponse(Request $request)
    {
        try
        {
            $dispatcher = new Dispatcher();
            $response = $dispatcher->dispatch($request);
        }
        catch (DispatcherException $e)
        {
            // TODO
            exit('Could not route request');
        }

        return $response;
    }
}
