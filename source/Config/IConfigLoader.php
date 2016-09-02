<?php namespace Vaccuum\Contracts\Config;

interface IConfigLoader
{
    /**
     * Load configuration from directory.
     *
     * @param string $path
     *
     * @throws ConfigException
     * @return mixed
     */
    public function loadDirectory($path);

    /**
     * Load configuration for registered bundles.
     *
     * @throws ConfigException
     * @return mixed
     */
    public function loadBundles();
}