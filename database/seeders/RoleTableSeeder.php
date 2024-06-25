<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'admin',
                'description' => 'Admin User',
            ],
            [
                'name' => 'athlete',
                'description' => 'Athlete User',
            ],
        ];

        Role::truncate();
        foreach($roles AS $role){
            Role::create([
                'name' => $role['name'],
                'description' => $role['description'],
            ]);
        }
    }
}
