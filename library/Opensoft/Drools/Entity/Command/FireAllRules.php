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
class FireAllRules extends Command
{
    /**
     * @var
     *
     * @XmlAttribute(type="integer")
     */
    private $max;

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
    private $agendaFilter;


    /**
     * @param  $agendaFilter
     * @return void
     */
    public function setAgendaFilter($agendaFilter)
    {
        $this->agendaFilter = $agendaFilter;
    }

    /**
     * @return
     */
    public function getAgendaFilter()
    {
        return $this->agendaFilter;
    }

    /**
     * @param  $max
     * @return void
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @return
     */
    public function getMax()
    {
        return $this->max;
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
