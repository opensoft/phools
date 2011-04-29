<?php
/**
 * 
 */

namespace Opensoft\Drools\Entity\Command;

use Opensoft\Drools\Entity\AbstractDroolsObject;

/**
 *
 *
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 *
 * @XmlEntity
 */ 
class InsertElements extends Command
{
    /**
     * @var
     *
     * @XmlAttribute(type="string")
     */
    private $outIdentifier;

    /**
     * @var
     *
     * @XmlElement(type="Opensoft\Drools\Entity\AbstractDroolsObject", collection=true)
     */
    protected $objects;

    /**
     * @var boolean
     *
     * @XmlAttribute(type="boolean")
     */
    private $returnObject;

    /**
     * @var string
     *
     * @XmlAttribute(type="string")
     */
    private $entryPoint;

    public function __construct(array $objects, $outIdentifier = null)
    {
        $this->setObjects($objects);
        $this->outIdentifier = $outIdentifier;
    }

    /**
     * @param string $entryPoint
     * @return void
     */
    public function setEntryPoint($entryPoint)
    {
        $this->entryPoint = $entryPoint;
    }

    /**
     * @return string
     */
    public function getEntryPoint()
    {
        return $this->entryPoint;
    }

    /**
     * @param  $object
     * @return void
     */
    public function setObjects($objects)
    {
        foreach ($objects as $object) {
            $this->addObjects($object);
        }
    }

    public function addObjects(AbstractDroolsObject $object)
    {
        $this->objects[] = $object;
    }

    /**
     * @return
     */
    public function getObjects()
    {
        return $this->objects;
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

    public function setReturnObject($returnObject)
    {
        $this->returnObject = $returnObject;
    }

    public function getReturnObject()
    {
        return $this->returnObject;
    }


}
