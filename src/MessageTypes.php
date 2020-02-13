<?php

declare(strict_types=1);

namespace Kix\ApolloPHP;

final class MessageTypes
{
    public const GQL_CONNECTION_INIT = 'connection_init';
    public const GQL_CONNECTION_ACKNOWLEDGE = 'connection_ack';
    public const GQL_CONNECTION_ERROR = 'connection_error';
    public const GQL_CONNECTION_KEEP_ALIVE = 'ka';
    public const GQL_CONNECTION_TERMINATE = 'connection_terminate';
    public const GQL_START = 'start';
    public const GQL_DATA = 'data';
    public const GQL_ERROR = 'error';
    public const GQL_COMPLETE = 'complete';
    public const GQL_STOP = 'stop';
}
