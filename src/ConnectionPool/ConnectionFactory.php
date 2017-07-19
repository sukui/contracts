<?php

namespace ZanPHP\Contracts\ConnectionPool;

interface ConnectionFactory
{
    /**
     * ConnectionFactory constructor.
     * @param array $config
     */
    public function __construct(array $config);

    /**
     * @return \Zan\Framework\Contract\Network\Connection
     */
    public function create();

    public function close();

}