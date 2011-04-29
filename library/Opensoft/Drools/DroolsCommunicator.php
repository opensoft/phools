<?php
/**
 * 
 */

namespace Opensoft\Drools;

use Opensoft\Drools\Logging\Logger,
    Opensoft\Drools\Logging\LoggerAware,
    Zend\Http\Client as HttpClient,
    Doctrine\OXM\Marshaller\XmlMarshaller;

/**
 *
 *
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 */ 
class DroolsCommunicator implements LoggerAware
{
    /**
     * @var \Doctrine\OXM\Marshaller\XmlMarshaller
     */
    private $marshaller;

    /**
     * @var Opensoft\Drools\Logging\Logger
     */
    private $logger;

    /**
     * @var string
     */
    private $droolsUrl;

    /**
     * @var \Zend\Http\Client
     */
    private $httpClient;

    /**
     * @var array
     */
    private $commands;

    /**
     * @param SoapClient $soapClient
     * @param XmlMarshaller $marshaller
     */
    public function __construct($droolsUrl, XmlMarshaller $marshaller, Logger $logger = null)
    {
        $this->droolsUrl = $droolsUrl;
        $this->httpClient = new HttpClient($droolsUrl);

        $this->marshaller = $marshaller;

        $this->logger = $logger;
    }

    /**
     * @param \Opensoft\Drools\Opensoft\Drools\Logging\Logger $logger
     * @return void
     */
    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function insert($objects, $ident = null)
    {
        if (!is_array($objects)) {
            $this->commands[] = new \Opensoft\Drools\Entity\Command\Insert($objects, $ident);
        } else {
            $this->commands[] = new \Opensoft\Drools\Entity\Command\InsertElements($objects, $ident);
        }


        return $this;
    }

    public function retract($handle)
    {
        $this->commands[] = new \Opensoft\Drools\Entity\Command\Retract($handle);

        return $this;
    }

    public function modify($handle, array $fields)
    {
        $this->commands[] = new \Opensoft\Drools\Entity\Command\Modify($handle, $fields);

        return $this;
    }

    public function getObject($handle, $outIdentifier = null)
    {
        $this->commands[] = new \Opensoft\Drools\Entity\Command\GetObject($handle, $outIdentifier);

        return $this;
    }

    public function fireAllRules()
    {
        $this->commands[] = new \Opensoft\Drools\Entity\Command\FireAllRules();

        return $this;
    }

    public function send()
    {
        $commands = new \Opensoft\Drools\Entity\BatchExecution('ksession1', $this->commands);

        $xml = $this->marshaller->marshalToString($commands);

        $this->logger->info("Sending to Drools: " . $xml);
        print_r($xml);

        $response = $this->httpClient->setRawData($xml, 'text/plain')->request('POST');

        if (!$response->isSuccessful()) {
            $this->logger->err($response->getHeadersAsString());
            throw new \RuntimeException("Drools Execution server returned an invalid response");
        }

        $responseXml = $response->getBody();
        if (empty($responseXml)) {
            print_r($response);
            throw new \RuntimeException("Drools Execution server returned an invalid response");
        }

        $this->logger->info("Server returned: " . $responseXml);
        print_r($responseXml);

        return $this->marshaller->unmarshalFromString($responseXml);
    }

}
