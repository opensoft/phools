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
class GetObject extends Command
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
     * @XmlAttribute(type="string")
     */
    private $handle;



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
