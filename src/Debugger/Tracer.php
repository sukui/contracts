<?php

namespace ZanPHP\Debugger;


interface Tracer
{
    public function getKey();

    public function beginTransaction($traceType, $name, $req);

    public function commit($logType, $res = []);

    public function report();
}