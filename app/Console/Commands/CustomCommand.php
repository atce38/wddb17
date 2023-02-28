<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;

class CustomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:jameel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is Jameel Command. Created Customly which can execute by any person who have this code';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $emp=Employee::find(13);
        $emp->delete();

        return "Hello I m Jameel Command and I m Executed";
    }
}
