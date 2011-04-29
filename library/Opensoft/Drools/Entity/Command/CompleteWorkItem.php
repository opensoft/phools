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
class CompleteWorkItem extends Command
{
    /**
     * @var
     *
     * @XmlAttribute(type="string")
     */
    private $workItemId;

    /**
     * @var boolean
     *
     * @XmlAttribute(type="boolean")
     */
    private $results;

    /**
     *
     */
    public function __construct($workItemId)
    {
        $this->workItemId = $workItemId;
    }


    /**
     * @param boolean $results
     * @return void
     */
    public function setResults($results)
    {
        $this->results = $results;
    }

    /**
     * @return boolean
     */
    public function getResults()
    {
        return $this->results;
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
