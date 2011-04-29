<?php
/**
 * 
 */

namespace Opensoft\Drools\Entity;

use Opensoft\Drools\Entity\Command\Command;

/**
 *
 *
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 *
 * @XmlRootEntity
 */ 
class BatchExecution 
{
    /**
     * @var string
     *
     * @XmlAttribute(type="string")
     */
    private $lookup;

    /**
     * @var Opensoft\Drools\Entity\Command\Command
     *
     * @XmlElement(type="Opensoft\Drools\Entity\Command\Command", collection=true)
     */
    private $commands;

    public function __construct($lookup, array $commands = array())
    {
        $this->lookup = $lookup;
        $this->setCommands($commands);
    }



    public function addCommand(Command $command)
    {
        $this->commands[] = $command;
    }

    public function setCommands(array $commands)
    {
        foreach ($commands as $command) {
            $this->addCommand($command);
        }
    }

    public function getCommands()
    {
        return $this->commands;
    }

    /**
     * Sets the knowledge session id on which the commands are going to be
     * executed
     *
     * @param string $lookup
     * @return void
     */
    public function setLookup($lookup)
    {
        $this->lookup = $lookup;
    }

    /**
     * @return string
     */
    public function getLookup()
    {
        return $this->lookup;
    }
}
