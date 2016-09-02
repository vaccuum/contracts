<?php namespace Vaccuum\Contracts\Config;

interface IDirectoryReader
{
    /**
     * Read configuration files from directory.
     *
     * @param string $path
     *
     * @throws ConfigException
     * @return array
     */
    public function read($path);
}