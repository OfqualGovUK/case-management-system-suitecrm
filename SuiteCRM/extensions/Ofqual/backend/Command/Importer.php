<?php


namespace App\Extension\Ofqual\backend\Command;


use Symfony\Component\Console\Attribute\AsCommand;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use App\Extension\Ofqual\backend\Command\Import\OQImporter;


#[AsCommand(name: 'scrm:importer')]
class Importer extends Command
{
    private OQImporter $importer;

    /**
     * @var array
     */

    public function __construct(OQImporter $ImporterHandler, string $name = null)
    {
        parent::__construct($name);
        $this->importer = $ImporterHandler;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Imports objects from a series of json Files.');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->importer->run();

        return 0;
    }
}
