<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $clientRole = Role::where('name', 'client')->first();

        $admin = User::create([
            'name'=>'Admin',
            'last_name'=>'AdminLastName',
            'birth_date'=>'11-11-1995',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('adminpass')
        ]);

        $client = User::create([
            'name'=>'Client',
            'last_name'=>'ClientLastName',
            'birth_date'=>'11-11-1991',
            'email'=>'client@client.com',
            'password'=>Hash::make('clientpass')
        ]);

        $admin->roles()->attach($adminRole);
        $client->roles()->attach($clientRole);
    }
}
