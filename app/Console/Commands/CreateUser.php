<?php

namespace App\Console\Commands;

use App\Models\Clients;
use App\Models\FailedLinks;
use App\Models\ProductsForMapping;
use App\Models\User;
use Faker\Core\File;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:createUser {username} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create admin USer';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $user = new User();
        $user->password = Hash::make($this->arguments()['password']);
        $user->email = $this->arguments()['username'];
        $user->name = $this->arguments()['username'];
        $user->save();
    }



}
