<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class AssignPermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:permission {user} {permission}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds permission to the user';

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
        $user=User::find($this->argument('user'));
        if (!$user) $this->error(__('User not found'));

        $user->givePermissionTo($this->argument('permission'));

        $this->info('Permission successfully assigned');

        return 0;
    }
}
