<?php

namespace ZanPHP\Codec;


interface Serialization
{
    public function serialize($object);

    public function deserialize($byteBuffer);
}