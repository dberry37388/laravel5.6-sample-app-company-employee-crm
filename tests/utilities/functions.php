<?php

/**
 * Helper function for "creating" and storing a new instance
 * of the given model.
 *
 * @param $class
 * @param array $attributes
 * @param null $times
 * @return mixed
 */
function create($class, array $attributes = [], $times = null)
{
    return factory($class, $times)->create($attributes);
}

/**
 * Helper function for "making" a new instance of
 * the given model.
 *
 * @param $class
 * @param array $attributes
 * @param null $times
 * @return mixed
 */
function make($class, array $attributes = [], $times = null)
{
    return factory($class, $times)->make($attributes);
}