<?php

namespace ZanPHP\Contracts\DebuggerTrace;

interface DebuggerTrace
{
    public function beginTransaction($traceType, $name, $req);

    public function commit($logType, $res = []);

    public function report();
}