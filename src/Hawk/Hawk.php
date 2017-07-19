<?php

namespace ZanPHP\Contracts\Hawk;

interface Hawk
{
    public function run($server);
    public function add($biz, array $metrics, array $tags = []);
    public function report();
    public function addServerServiceData($service, $method, $clientIp, $key, $val);
    public function addClientServiceData($service, $method, $serverIp, $key, $val);
    public function addTotalSuccessTime($side, $service, $method, $ip, $diffSec);
    public function addTotalFailureTime($side, $service, $method, $ip, $diffSec);
    public function addTotalSuccessCount($side, $service, $method, $ip);
    public function addTotalFailureCount($side, $service, $method, $ip);
}