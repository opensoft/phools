<?php
/**
 * 
 */

namespace Opensoft\Drools\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 *
 *
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 */ 
class TestCommand extends Command implements ContainerAwareInterface
{
    private $container;

    /**
     * Sets the Container.
     *
     * @param ContainerInterface $container A ContainerInterface instance
     */
    function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

/**
     *
     */
    public function configure()
    {
        $this
            ->setName('test')
            ->setDescription("Tails the Global log file")
            ->setHelp(<<<EOF
The <info>tailLog</info> command tails the Global log file (with colors):

  <info>./console tailLog</info>
EOF
            );

    }

    /**
     *
     * @param ProFIT_Console_Input_InputInterface $input
     * @param ProFIT_Console_Output_OutputInterface $output
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $communicator = $this->container->get('drools.communicator');


        $message = new \Opensoft\Drools\TestPayloads\Login('salaboy');
        $communicator->insert($message, 'login1');

        $communicator->fireAllRules();

        $response = $communicator->send();
    }

}
