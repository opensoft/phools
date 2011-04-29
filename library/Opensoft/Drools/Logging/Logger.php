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
interface Logger 
{
    public function debug($message);

    public function info($message);

    public function warn($message);

    public function err($message);
}
