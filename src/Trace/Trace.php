<?php

namespace ZanPHP\Contracts\Trace;

interface Trace
{
    const GROUP_NAME = "zan_group";
    const NAME = "zan";
    const PROTOCOL = "PT1";

    const TRACE_KEY = "CAT_TRACE";
    const ROOT_ID_KEY = '_catRootMessageId';
    const PARENT_ID_KEY = '_catParentMessageId';
    const CHILD_ID_KEY = '_catChildMessageId';

    public function initHeader($msgId = null);

    public function transactionBegin($type, $name);

    public function getRootId();

    public function getParentId();

    public function commit($handle, $status, $sendData = '');

    public function logEvent($type, $status, $name = "", $context = "");

    public function setRemoteCallMsgId($remoteCallMsgId);

    public function getRemoteCallMsgId();

    public function send();

    public static function generateId();
}