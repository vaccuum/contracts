<?php namespace Vaccuum\Contracts\Foundation;

use Symfony\Component\HttpFoundation\Response;

interface IApplication
{
    /**
     * Handle the request.
     *
     * @return Response
     */
    public function start();
}