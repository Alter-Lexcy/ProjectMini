<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RoleUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleadmin = Role::firstOrCreate(['name'=>'guru']);
        Role::firstOrCreate(['name'=>'murid']);

        $admin = User::create([
            'name'=>'Guru',
            'email'=>'guru123@gmail.com',
            'password'=>Hash::make('12345679')
        ]);

        $admin->assignRole($roleadmin);
    }
}
