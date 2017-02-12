<?php

class GObject
{
    /**
     * GObject constructor.
     * @param null|string|array $param
     */
    public function __construct()
    {
    }

    /**
     * @param string $signal
     * @param callable $callback
     * @param null|mixed $userparam
     * @return int
     */
    public function connect_simple($signal, $callback, $userparam = null)
    {
    }
}
