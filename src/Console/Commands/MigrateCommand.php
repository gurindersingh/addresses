<?php

declare(strict_types=1);

namespace Rinvex\Addresses\Console\Commands;

use Illuminate\Console\Command;

class MigrateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rinvex:migrate:addresses';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate Rinvex Addresses Tables.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->warn($this->description);
        $this->call('migrate', ['--step' => true, '--path' => 'vendor/rinvex/addresses/database/migrations']);
    }
}
