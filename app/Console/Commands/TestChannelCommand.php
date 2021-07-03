<?php

namespace App\Console\Commands;

use App\Events\ExchangeTickerEvent;
use Illuminate\Console\Command;

class TestChannelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'channel:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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

        broadcast(new ExchangeTickerEvent(['test']));
        return 0;
    }
}
