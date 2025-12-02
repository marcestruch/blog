<?php

if (! function_exists('setActive')) {
    function setActive($routeName)
    {
        return request()->routeIs($routeName) ? 'active' : '';
    }
}

if (!function_exists('fechaActual')) {
    function fechaActual($format)
    {
        return date($format);
    }
}
