<?php namespace Vaccuum\Contracts\Container;

interface IContainer
{
    /**
     * Define parameter.
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return mixed
     */
    public function parameter($name, $value);

    /**
     * Define dependency.
     *
     * @param string $name
     * @param string $dependencies
     *
     * @return mixed
     */
    public function definition($name, $dependencies);

    /**
     * Define alias.
     *
     * @param string $name
     * @param string $dependency
     *
     * @return mixed
     */
    public function alias($name, $dependency);

    /**
     * Define factory method.
     *
     * @param string   $dependency
     * @param callable $delegate
     *
     * @return mixed
     */
    public function factory($dependency, $delegate);

    /**
     * Define singleton dependency.
     *
     * @param string|object $dependency
     *
     * @return mixed
     */
    public function share($dependency);

    /**
     * Create object instance.
     *
     * @param string $name
     * @param array  $dependencies
     *
     * @return mixed
     */
    public function make($name, array $dependencies = []);
}