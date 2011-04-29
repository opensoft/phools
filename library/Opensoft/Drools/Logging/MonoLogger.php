<?php
/**
 * 
 */

namespace Opensoft\Drools\Logging;


/**
 *
 *
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 */ 
class MonoLogger implements Logger
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
