<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class DeleteAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:admin {--email=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete an admin user by email';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->option('email');

        if (!$email) {
            $this->error('Please provide an email.');
            return 1;
        }

        $user = User::where('email', $email)->first();

        if (!$user) {
            $this->error('No user found with that email.');
            return 1;
        }

        if ($user->role !== 'admin') {
            $this->error('User is not an admin.');
            return 1;
        }

        $user->delete();

        $this->info("Admin user with email {$email} deleted successfully.");
        return 0;
    }
}
