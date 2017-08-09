<?php

namespace ZanPHP\Contracts\Codec;


interface Serialization
{
    public function serialize(Serializable $serializable);

    public function deserialize($byteBuffer);
}