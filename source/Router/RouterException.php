<?php namespace Vaccuum\Contracts\Router;

use Exception;

class RouterException extends Exception
{
    /** @var IRoute|array */
    public $routeData;

    /**
     * RouterException constructor.
     *
     * @param string       $message
     * @param IRoute|array $routeData
     */
    public function __construct($message, $routeData)
    {
        parent::__construct($message);

        $this->routeData = $routeData;
    }
}