<?php namespace Vaccuum\Contracts\Router;

interface IRouter
{
    /**
     * Match route and get route info.
     *
     * @return IRouteInfo
     */
    public function match();

    /**
     * Directly push route object into routes collection.
     *
     * @param IRoute $route
     *
     * @return void
     */
    public function push(IRoute $route);

    /**
     * Map a route using raw data.
     *
     * @param array $data
     *
     * @throws RouterException
     * @return void
     */
    public function map(array $data);
}