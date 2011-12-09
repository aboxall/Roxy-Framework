<?php

namespace Roxy\Http;

class Request
{
    public $request;
    public $cookies;
    public $server;
    public $get;
    public $post;
    public $files;

    const METHOD_POST   = 'POST';
    const METHOD_GET    = 'GET';
    const METHOD_DELETE = 'DELETE';
    const METHOD_PUT    = 'PUT';

    public function __construct($request = false)
    {
        // DEBUG
        echo 'Created Request...';

        if (empty($request)) {
            $request = $_SERVER['REQUEST_URI'];
        }

        $this->request = $request;
        $this->cookie = $_COOKIE;
        $this->server  = $_SERVER;

        switch ($this->getMethod()) {
            case self::METHOD_POST:
                $this->post = $_POST;
            case self::METHOD_PUT:
                $this->post = $_POST;
                $this->files = $_FILES;
                break;
            case self::METHOD_GET:
            case self::METHOD_DELETE:
            default:
                $this->get = $_GET;
        }
    }

    public function getMethod()
    {
        return $this->server['REQUEST_METHOD'];
    }

    public function getUserAgent()
    {
        return $this->server['USER_AGENT'];
    }

    public function getReferrer()
    {
        return $this->server['REFERRER'];
    }

    public function isAjax()
    {
        if (!empty($this->sever['HTTP_X_REQUESTED_WITH'])
         && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            return true;
        }

        return false;
    }

    public function getCookie($name)
    {
        if (array_key_exists($name, $this->cookie)) {
            return $this->cookie[$name];
        }
    }
}
