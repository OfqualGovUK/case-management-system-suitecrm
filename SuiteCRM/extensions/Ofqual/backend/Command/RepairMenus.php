<?php


namespace App\Extension\Ofqual\backend\Command;


use Symfony\Component\Console\Attribute\AsCommand;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use App\Extension\Ofqual\backend\Menu\MenuRepairer;


#[AsCommand(name: 'scrm:repair-menus')]
class RepairMenus extends Command
{
    private MenuRepairer $repair;

    /**
     * @var array
     */

    public function __construct(MenuRepairer $menuRepairerHandler, string $name = null)
    {
        parent::__construct($name);
        $this->repair = $menuRepairerHandler;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Rebuilds the standard Modules in the Menu system to include our modules.');
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
