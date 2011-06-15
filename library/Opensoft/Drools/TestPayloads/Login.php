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
 * @XmlEntity(xml="profit.Login")
 */ 
class Login extends AbstractDroolsObject
{
    /**
     * @var
     *
     * @XmlText(type="string")
     */
    public $username;

    /**
     * @var DateTime
     *
     * @XmlText(type="datetime")
     */
    public $timestamp;

    public function __construct($username)
    {
        $this->username = $username;
        $this->timestamp = new \DateTime();
    }
}
