<?php
namespace Console;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Console\Command;
/**
 * Author: Narek Vardanyan <vardanyan703@gmail.com>
 */
class TimeCommand extends Command
{
    public function configure()
    {
        $this -> setName('get-users');
    }
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this -> getUsers($input, $output);
    }
}