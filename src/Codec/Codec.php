<?php

namespace ZanPHP\Codec;


interface Codec
{
    /**
     * @param PDU $pdu
     * @return string
     * @throws \ZanPHP\Exception\Codec\CodecException
     */
    public function encode(PDU $pdu);

    /**
     * @param string $bytesBuffer
     * @return PDU
     * @throws \ZanPHP\Exception\Codec\CodecException
     */
    public function decode($bytesBuffer);
}