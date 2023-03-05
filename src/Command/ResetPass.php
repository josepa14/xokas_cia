<?php
namespace App\Command;

use App\Service\ServicioPersonalUser;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// the name of the command is what users type after "php bin/console"
#[AsCommand(
name: 'app:reset-pass',
description: 'Reseteo de password.',
hidden: false,
aliases: ['app:modify-user']
)]
class ResetPass extends Command
{
    private $servicioPersonalUser;
    public function __construct(ServicioPersonalUser $spu)
    {
        $this->servicioPersonalUser = $spu;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            // configure an argument
            ->addArgument('username', InputArgument::REQUIRED, 'The username of the user.')
            // ...
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $u = $input->getArgument('username');
        $this->servicioPersonalUser->modificar($u);
        $output->writeln('Pass reseteada para el usuario: '.$input->getArgument('username'));
        
        return Command::SUCCESS;
    }
}

?>