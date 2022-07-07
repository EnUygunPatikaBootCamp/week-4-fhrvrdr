<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class CreateArrayCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-array';


    protected function configure(): void
    {
        $this
            // configure an argument
            ->addArgument('arraySize', InputArgument::REQUIRED, 'Size of the array.')// ...
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        // generating random array
        for ($i = 0; $i < $input->getArgument('arraySize'); $i++) {
            $rndArray[$i] = rand(1,1000);
        }

        echo str_replace("\n", '', print_r($rndArray, true)) . "\n";

        $output->writeln('En küçük sayı: '. min($rndArray));
        $output->writeln('En büyük sayı: '. max($rndArray));

        return Command::SUCCESS;

    }
}