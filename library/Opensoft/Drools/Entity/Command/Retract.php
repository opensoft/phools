<?php
/**
 * 
 */

namespace Opensoft\Drools\Entity\Command;


/**
 *
 *
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 *
 * @XmlEntity
 */ 
class Retract extends Command
{
    /**
     * @var
     *
     * @XmlAttribute(type="string")
     */
    private $handle;

    /**
     * @param string $handle The FactHandle associated to the object to be retracted
     */
    public function __construct($handle)
    {
        $this->handle = $handle;
    }

    /**
     * @param  $handle
     * @return void
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
    }

    /**
     * @return
     */
    public function getHandle()
    {
        return $this->handle;
    }


}
