<?php


namespace App\Extension\Ofqual\backend\Command;


use Symfony\Component\Console\Attribute\AsCommand;
use App\Install\LegacyHandler\Upgrade\PostUpgradeHandler;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;


#[AsCommand(name: 'scrm:quick-repair-and-rebuild')]
class QuickRepairAndRebuild extends Command
{
    private PostUpgradeHandler $repair;

    /**
     * @var array
     */
   
    public function __construct( PostUpgradeHandler $postUpgradeHandler, string $name = null)
     {
        parent::__construct($name);
        $this->repair = $postUpgradeHandler;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Run legacy quick repair and rebuild process');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
       $this->repair->run();

        return 0;
    }

}
