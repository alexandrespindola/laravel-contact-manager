<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ClearContactsTable extends Command
{
    protected $signature = 'clear:contacts';

    protected $description = 'Clear the contacts table';

    public function handle()
    {
        DB::table('contacts')->delete();

        $this->info('Contacts table cleared!');
    }
}
