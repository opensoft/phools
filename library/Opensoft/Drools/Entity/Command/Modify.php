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
class Modify extends Command
{
    /**
     * @var
     *
     * @XmlAttribute(type="string")
     */
    private $handle;

    /**
     * @var Setter[]
     *
     * @XmlElement(type="Opensoft\Drools\Entity\Command\Setter", collection=true)
     */
    private $setters;

    /**
     * @param string $handle The FactHandle associated to the object to be retracted
     */
    public function __construct($handle, array $setters)
    {
        $this->handle = $handle;

        foreach ($setters as $key => $value) {
            $this->set($key, $value);
        }
    }

    public function set($accessor, $value)
    {
        $this->setters[] = new Setter($accessor, $value);
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


}

/**
 *
 * @XmlEntity
 */
class Setter
{
    /**
     * @var string
     *
     * @XmlAttribute(type="string")
     */
    private $accessor;

    /**
     * @var string
     *
     * @XmlAttribute(type="string")
     */
    private $value;

    public function __construct($accessor, $value)
    {
        $this->accessor = $accessor;
        $this->value = $value;
    }
}
