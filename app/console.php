#!/usr/bin/env php
<?php
/**
 *
 * 
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 */

require_once __DIR__ . "/autoload.php";
require_once __DIR__ . "/AppKernel.php";

use Opensoft\Drools\Console\Application;
use Symfony\Component\Console\Input\ArgvInput;

$input = new ArgvInput();
$env = $input->getParameterOption(array('--env', '-e'), 'dev');
$debug = !$input->getParameterOption(array('--no-debug'));

$kernel = new AppKernel($env, $debug);
$console = new Application($kernel);
$console->run();