<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MultiplicationTableCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'multiplication';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'multiplication';

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
        for ($i = 0; $i < 10; $i++){

            echo("\n");

            for ($j = 0; $j < 10; $j++)
                echo( "$i x $j = ".$i*$j."\t");

        }
    }
}
