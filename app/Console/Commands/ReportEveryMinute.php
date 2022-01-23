<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ReportEveryMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:every-minute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a report every minute';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo 'Report Every Minute \n';
    }
}
