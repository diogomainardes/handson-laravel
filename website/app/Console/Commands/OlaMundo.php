<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class OlaMundo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ola:mundo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Isso é um comando customizado';

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
     * @return mixed
     */
    public function handle()
    {
        echo "Este é um comando customizado dentro do Laravel";
    }
}
