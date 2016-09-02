<?php namespace Vaccuum\Contracts\Config;

interface IConfig
{
    /**
     * Get configuration value.
     *
     * @param string $name or path expression
     *
     * @return mixed
     */
    public function get($name);

    /**
     * Set configuration value.
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return void
     */
    public function set($name, $value);
}