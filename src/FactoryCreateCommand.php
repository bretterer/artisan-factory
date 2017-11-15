<?php


namespace Bretterer\ArtisanFactory;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class FactoryCreateCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'factory:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate and persist a model to the database.';

    public function handle()
    {
        $iterations = $this->option('iterations');
        $model = $this->argument('factory');
        $this->info("Creating {$iterations} {$model} " . str_plural('instance', $iterations) . "." );

        $this->comment(factory("{$model}", (int)$iterations)->create());

    }

    /**
     * {@inheritdoc}
     */
    protected function getOptions()
    {
        return [
            ['iterations', 'i', InputOption::VALUE_OPTIONAL, 'The number of objects to create.', '1']
        ];
    }
    /**
     * {@inheritdoc}
     */
    protected function getArguments()
    {
        return [
            ['factory', InputArgument::REQUIRED, 'The factory to create.'],
        ];
    }
}