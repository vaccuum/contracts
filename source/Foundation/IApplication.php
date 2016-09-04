<?php namespace Vaccuum\Contracts\Foundation;

interface IApplication
{
    /**
     * Run application & handle the request.
     *
     * @return mixed
     */
    public function execute();
}