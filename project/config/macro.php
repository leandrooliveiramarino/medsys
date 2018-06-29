<?php

function versioned_asset($path)
{
    return asset($path) . '?v=' . filemtime(public_path($path));
}

function active($route_name, $active = 'active')
{
    return Route::currentRouteName() == $route_name
        ? $active
        : '';
}

function user()
{
    return Auth::user();
}