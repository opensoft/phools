<?php
/**
 * 
 */

namespace Opensoft\Drools\TestPayloads;

use Opensoft\Drools\Entity\AbstractDroolsObject;

/**
 *
 *
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 *
 * @XmlEntity(xml="org.test.Message")
 */ 
class Message extends AbstractDroolsObject
{
    /**
     * @var
     *
     * @XmlText(type="string")
     */
    public $text;

    public function __construct($text)
    {
        $this->text = $text;
    }
}
