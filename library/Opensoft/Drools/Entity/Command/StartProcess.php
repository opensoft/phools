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
class StartProcess extends Command
{
    /**
     * @var
     *
     * @XmlAttribute(type="string", name="processId")
     */
    private $processId;

    /**
     * A Map<String, Object> to pass parameters in the process startup (TODO)
     *
     * @var
     *
     * @XmlElement(type="string", collection=true)
     */
    private $parameters;

    /**
     * @XmlElement(type="Opensoft/Drools/Entity/AbstractDroolsObject", collection=true)
     */
    private $data = array();

    /**
     * @param string $processId The ID of the process to be started
     */
    public function __construct($processId)
    {
        $this->processId = $processId;
    }

    public function setData(array $data)
    {
        foreach ($data as $datem) {
            $this->addData($datem);
        }
    }

    public function addData($data)
    {
        $this->data[] = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setParameters(array $parameters)
    {
        $this->parameters = $parameters;
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param  $processId
     * @return void
     */
    public function setProcessId($processId)
    {
        $this->processId = $processId;
    }

    /**
     * @return
     */
    public function getProcessId()
    {
        return $this->processId;
    }


}
