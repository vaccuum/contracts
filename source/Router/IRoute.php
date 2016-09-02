<?php namespace Vaccuum\Contracts\Router;

interface IRoute
{
    /**
     * Get route methods.
     *
     * @return array
     */
    public function methods();

    /**
     * Get route uri.
     *
     * @return string
     */
    public function path();

    /**
     * Get route data.
     *
     * @return array
     */
    public function data();
}