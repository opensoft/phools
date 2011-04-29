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
class Query extends Command
{

    /**
     * @var
     *
     * @XmlAttribute(type="string")
     */
    private $name;

    /**
     * @var
     *
     * @XmlAttribute(type="string")
     */
    private $outIdentifier;

    /**
     * @var
     *
     * @XmlElement(type="Opensoft/Drools/Entity/AbstractDroolsObject", collection=true)
     */
    private $arguments;


    public function __construct($name)
    {
        $this->name = $name;
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

    public function setArguments($arguments)
    {
        $this->arguments = $arguments;
    }

    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * @param  $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return
     */
    public function getName()
    {
        return $this->name;
    }


}
