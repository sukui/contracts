<?php

namespace ZanPHP\Codec;


interface Codec
{
    public function encode(...$args);

    public function decode($byteBuffer);
}