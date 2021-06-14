<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class Hello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello {name} {--L|lastname=The Man}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display Hello';

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
        $this->displayTable();
    }

    public function getInput() {
        $name = $this->secret('What is your name: ');
        $confirm = $this->confirm('Do you want to print your name?');
        
        if ($confirm) {
            $this->error($name);
        }
    }

    public function displayTable() {
        $header = ['Name', 'Email'];
        $users = User::select('name', 'email')->limit(30)->get();
        $this->table($header, $users);
    }
}
