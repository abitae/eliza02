<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $permission = Permission::create(['name' => 'create user']);
        $permission = Permission::create(['name' => 'view user']);
        $permission = Permission::create(['name' => 'edit user']);
        $permission = Permission::create(['name' => 'delete user']);
        
        $user = User::create([
            'name' => 'Abel Arana',
            'email' => 'abel.arana@hotmail.com',
            'password' => bcrypt('lobomalo123'),
        ]);
        $role = Role::create(['name' => 'Super Admin']);
        $role->syncPermissions(Permission::all());
        $user->assignRole($role);

        $role = Role::create(['name' => 'Admin']);
        $role = Role::create(['name' => 'User']);
        User::factory(100)->create();

    }
}
