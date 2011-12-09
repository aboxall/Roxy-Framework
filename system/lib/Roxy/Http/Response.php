<?php

namespace Roxy\Http;

class Response
{
    protected $body;

    public function __construct()
    {
        echo 'Created Response...';
    }

    public function send()
    {
        echo 'Sending response...';
    }

    public function setRequest(Request $request)
    {
        $this->request = $request;   
    }

    public function setContentBody($content_body)
    {
        if (!empty($content_body)) {
            $this->content_body = $content_body;
        }
    }

    public function setCookie($name, $value, $expire_days)
    {
        setcookie($name, $value, ($expire_days / 3600));
    }
}
