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
class GetObjects extends Command
{
    /**
     * @var
     *
     * @XmlAttribute(type="string")
     */
    private $objectFilter;

    /**
     * @var
     *
     * @XmlAttribute(type="string")
     */
    private $outIdentifier;


    public function setObjectFilter($objectFilter)
    {
        $this->objectFilter = $objectFilter;
    }

    public function getObjectFilter()
    {
        return $this->objectFilter;
    }

    public function setOutIdentifier($outIdentifier)
    {
        $this->outIdentifier = $outIdentifier;
    }

    public function getOutIdentifier()
    {
        return $this->outIdentifier;
    }
}
