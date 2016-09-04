<?php namespace Vaccuum\Contracts\Router;

use Closure;

interface IRouteInfo
{
    /**
     * Get route arguments.
     *
     * @return array
     */
    public function arguments();

    /**
     * Get route middleware.
     *
     * @return array
     */
    public function middleware();

    /**
     * Get route handler.
     *
     * @return Closure|array
     */
    public function handler();

    /**
     * Get route action.
     *
     * @return Closure|string
     */
    public function action();

    /**
     * Get route controller.
     *
     * @return string
     */
    public function controller();

    /**
     * Whether the route was found.
     *
     * @return bool
     */
    public function found();

    /**
     * Whether the route was accessed using allowed method.
     *
     * @return bool
     */
    public function allowed();
}