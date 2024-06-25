<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\User;
use App\Models\Role;
use DB;
use Schema;
use Hash;

class SystsemInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize the system';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->init();
    }

    public function init(){
        $this->line("****SYSTEM INITIALISING****");
        $this->line("Checking DB...");
        try{
            DB::connection()->getPdo();
            $this->info("DB connection successful");
        }
        catch (\Exception $e) {
            $this->error("Database test failed. Please add you DB connection info in the .env file");
            $this->error("If you do not have .env file copy .en.example and rename it to .env");
            return 1;
        }
        if(!Schema::hasTable('roles')){
            $this->info("Creating database migration");
            $this->call('migrate');
            $this->info("Seedng Roles table");
            $this->call('db:seed');
        }

        $create_admin = $this->ask("Would you like to create an Admin Account?\n Yes: Y|y,\n No: any other key");
        if($create_admin == "Y" or $create_admin == "y"){
            $this->line("Creating Admin Account..");
            $this->line("Prompts starting with (*) are required");

            $name = $this->ask("*Enter admin's name");
            $email = $this->ask("*Enter admin's email address");
            $password = $this->ask("*Enter admin's password");
            if($name != "" && $email != "" && $password != ""){
                $usr = User::where('email', $email)->first();
                if($usr){
                    $this->error("The email address you entered has already been taken");
                    return 1;
                }
                else{
                    $role = Role::where('name', 'admin')->first();
                    $admin = User::create([
                        'name' => $name,
                        'email' => $email,
                        'password' => Hash::make($password),
                        'role_id' => $role->id,
                        'status' => "active",
                    ]);
                    $this->info("Admin has been created");
                    $this->line("Re-run this command to create another admin account");
                }
            }
            else{
                $this->error("You did not enter all required information");
                $this->error("Re-run this command to try again");
            } 
        }
        else{
            $this->info("ALL SET..");
        }
    }
}
