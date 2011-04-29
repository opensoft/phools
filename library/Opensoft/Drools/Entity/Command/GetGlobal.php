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
class GetGlobal extends Command
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
