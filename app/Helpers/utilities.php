<?php

if (!function_exists('all')) {
    function all(iterable $collection, callable $predicate)
    {
        foreach ($collection as $elem) {
            if (!$predicate($elem))
                return false;
        }
        return true;
    }
}

if (!function_exists('none')) {
    function none(iterable $collection, callable $predicate)
    {
        return all($collection, function ($elem) use ($predicate) {
            return !$predicate($elem);
        });
    }
}

if (!function_exists('any')) {
    function any(iterable $collection, callable $predicate)
    {
        return !none($collection, $predicate);
    }
}