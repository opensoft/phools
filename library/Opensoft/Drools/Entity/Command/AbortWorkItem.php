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
class AbortWorkItem extends Command
{
    /**
     * @var
     *
     * @XmlAttribute(type="string")
     */
    private $workItemId;

    /**
     *
     */
    public function __construct($workItemId)
    {
        $this->workItemId = $workItemId;
    }

    /**
     * @param  $workItemId
     * @return void
     */
    public function setWorkItemId($workItemId)
    {
        $this->workItemId = $workItemId;
    }

    /**
     * @return
     */
    public function getWorkItemId()
    {
        return $this->workItemId;
    }
}
