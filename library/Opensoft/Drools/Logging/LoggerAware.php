<?php
/**
 * 
 */

namespace Opensoft\Drools\Logging;

use Opensoft\Drools\Logging\Logger;

/**
 *
 *
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 */ 
interface LoggerAware 
{
    public function setLogger(Logger $logger);
}
