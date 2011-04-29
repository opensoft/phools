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
class SetGlobal extends Command
{
    /**
     * @var
     *
     * @XmlAttribute(type="string")
     */
    private $identifier;

    /**
     * @var
     *
     * @XmlAttribute(type="Opensoft\Drools\Entity\AbstractDroolsObject")
     */
    private $object;

    /**
     * @var
     *
     * @XmlAttribute(type="boolean")
     */
    private $out;

    /**
     * @var
     *
     * @XmlAttribute(type="string")
     */
    private $outIdentifier;

    public function __construct($identifier)
    {
        $this->identifier = $identifier;                
    }

    /**
     * @param  $identifier
     * @return void
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param  $object
     * @return void
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * @return
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param  $out
     * @return void
     */
    public function setOut($out)
    {
        $this->out = $out;
    }

    /**
     * @return
     */
    public function getOut()
    {
        return $this->out;
    }

    /**
     * @param  $outIdentifier
     * @return void
     */
    public function setOutIdentifier($outIdentifier)
    {
        $this->outIdentifier = $outIdentifier;
    }

    /**
     * @return
     */
    public function getOutIdentifier()
    {
        return $this->outIdentifier;
    }


}
