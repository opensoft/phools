<?php
/**
 * 
 */

namespace Opensoft\Drools\Entity\Command;

use Opensoft\Drools\Entity\AbstractDroolsEvent;

/**
 *
 *
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 *
 * @XmlEntity
 */ 
class SignalEvent extends Command
{
    /**
     * @var
     *
     * @XmlAttribute(type="string")
     */
    private $eventType;

    /**
     * @var
     *
     * @XmlAttribute(type="string")
     */
    private $processInstanceId;

    /**
     * @var
     *
     * @XmlElement(type="Opensoft\Drools\Entity\AbstractDroolsEvent")
     */
    private $event;

    /**
     * @param string $handle The FactHandle associated to the object to be retracted
     */
    public function __construct($eventType, $processInstanceId = null, AbstractDroolsEvent $event = null)
    {
        $this->eventType = $eventType;
        $this->processInstanceId = $processInstanceId;
        $this->event = $event;
    }

    /**
     * @param  $eventType
     * @return void
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * @return
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param  $event
     * @return void
     */
    public function setEvent(AbstractDroolsEvent $event)
    {
        $this->event = $event;
    }

    /**
     * @return
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param  $processInstanceId
     * @return void
     */
    public function setProcessInstanceId($processInstanceId)
    {
        $this->processInstanceId = $processInstanceId;
    }

    /**
     * @return
     */
    public function getProcessInstanceId()
    {
        return $this->processInstanceId;
    }
}
