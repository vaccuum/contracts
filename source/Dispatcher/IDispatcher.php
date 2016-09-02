<?php namespace Vaccuum\Contracts\Dispatcher;

use Closure;

interface IDispatcher
{
    /**
     * Dispatch given action using provided arguments.
     *
     * @param array         $arguments
     * @param Closure|array $handler
     *
     * @throws DispatcherException
     * @return mixed
     */
    public function dispatch(array $arguments, $handler);
}