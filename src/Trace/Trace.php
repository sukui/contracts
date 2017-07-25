<?php

namespace ZanPHP\Contracts\Trace;

interface Trace
{
    public function initHeader($msgId = null);

    public function transactionBegin($type, $name);

    public function getRootId();

    public function getParentId();

    public function commit($handle, $status, $sendData = '');

    public function logEvent($type, $status, $name = "", $context = "");

    public function setRemoteCallMsgId($remoteCallMsgId);

    public function getRemoteCallMsgId();

    public function send();
}