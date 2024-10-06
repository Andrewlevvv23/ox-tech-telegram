<?php

namespace andrewlevvv23\oxTechTelegram\Console\Commands;

use Illuminate\Console\Command;

class PublishConfigCommand extends Command
{
    protected $signature = 'ox-tech-telegram:publish-config';

    protected $description = 'Publish the ox-tech-telegram config file to the local config directory';

    public function handle()
    {
        $configPath = __DIR__.'/../../../config/telegram.php';

        $publishPath = config_path('telegram.php');

        $this->info('Publishing config...');
        if (!file_exists($publishPath)) {
            copy($configPath, $publishPath);
            $this->info('Config file published successfully.');
        } else {
            $this->warn('Config file already exists. Please delete it before publishing again.');
        }

        return Command::SUCCESS;
    }
}