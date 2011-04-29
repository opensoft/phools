<?php
/**
 * 
 */

namespace Opensoft\Drools\Logging;

use Zend\Log\Logger as ZendLog;

/**
 *
 *
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 */ 
class ZendLogger extends ZendLog implements Logger
{
    public function debug($message)
    {
        $this->log($message, ZendLog::DEBUG);
    }

    public function info($message)
    {
        $this->log($message, ZendLog::INFO);
    }

    public function warn($message)
    {
        $this->log($message, ZendLog::WARN);
    }

    public function err($message)
    {
        $this->log($message, ZendLog::ERR);
    }
}
