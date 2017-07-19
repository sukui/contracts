<?php

namespace Zan\Framework\Contract\Foundation;


interface ContextInterface
{
    public function get($key, $default = null);

    public function set($key, $value);

    /**
     * @param static|array $ctx
     * @param bool $override
     * @return mixed
     */
    public function merge($ctx, $override = true);
}