<?php
// src/Command/DebugRolesCommand.php
namespace App\Command;

use App\Repository\UserRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DebugRolesCommand extends Command
{
    protected static $defaultName = 'app:debug:roles';

    public function __construct(private UserRepository $userRepository)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $email = $input->getArgument('email');
        $user = $this->userRepository->findOneBy(['email' => $email]);

        if (!$user) {
            $output->writeln("User not found!");
            return Command::FAILURE;
        }

        $output->writeln("User: ".$user->getEmail());
        $output->writeln("Stored role: ".$user->getRole());
        $output->writeln("Computed roles: ".implode(', ', $user->getRoles()));

        return Command::SUCCESS;
    }

    protected function configure()
    {
        $this->addArgument('email', InputArgument::REQUIRED, 'User email');
    }
}