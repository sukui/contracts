<?php

namespace ZanPHP\Contracts\Session;

interface Storable
{
    public function get($key);
    public function set($key, $value);
    public function del($key);
}