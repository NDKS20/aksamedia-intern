<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Admin',
            'Owner',
            'User',
        ];

        foreach ($roles as $role) {
            Role::create([
                'title' => $role,
                'name' => Str::slug($role),
            ]);
        }
    }
}
