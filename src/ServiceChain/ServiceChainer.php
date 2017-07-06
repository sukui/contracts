<?php

namespace ZanPHP\Contracts\ServiceChain;

interface ServiceChainer
{
    const TYPE_HTTP = 1;
    const TYPE_TCP  = 2;
    const TYPE_JOB  = 3;

    public function getKey($type);

    /**
     * get service chain value by type
     * @param $type
     * @param array $ctx
     * @return mixed
     */
    public function getValue($type, array $ctx = []);

    /**
     * get endpoint by app-name and service chain key
     * @param string $appName
     * @param string $scKey
     * @return array|null list($host, $port) = getEndpoint()
     */
    public function getEndpoint($appName, $scKey);
}