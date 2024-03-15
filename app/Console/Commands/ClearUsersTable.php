<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ClearUsersTable extends Command
{
    protected $signature = 'clear:users';

    protected $description = 'Clear the users table';

    public function handle()
    {
        DB::table('users')->delete();

        $this->info('Users table cleared!');
    }
}
