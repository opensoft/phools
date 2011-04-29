<?php
/**
 *
 *
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 */

require_once __DIR__ . "/../library/vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php";


use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    "Opensoft\\Drools" => __DIR__ . "/../library",
    "Symfony"          => __DIR__ . "/../library/vendor",
    "Zend"             => __DIR__ . "/../library/vendor/zf2/library",
    "Doctrine\\OXM"    => __DIR__ . "/../library/vendor/doctrine-oxm/lib",
    "Doctrine\\Common" => __DIR__ . "/../library/vendor/doctrine-oxm/lib/vendor/doctrine-common/lib",
));

$loader->register();