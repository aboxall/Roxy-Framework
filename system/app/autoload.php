<?php

namespace
{
    // Work out the absolute path to the lib directory
    $path = realpath(str_replace(basename(__FILE__), '', __FILE__) . '/../lib');

    // Make sure there's a trailing slash on the lib path
    if (strrpos('/', $path) !== 0) {
        $path .= '/';
    }

    // Define the autoload anonymous function out of any namespace scope
    spl_autoload_register(function($class_name) use ($path)
    {
        require_once $path . str_replace('\\', '/', $class_name) . '.php';
    });
}
