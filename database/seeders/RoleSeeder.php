<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Role::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     'admin', 'client'
        // ];

        // foreach($data as $value)
        // {
        //     Role::insert([
        //         'name' => $value,
        //     ]);
            
        // }

        DB::table('users')->insert([
        [
            'name' => 'galih',
            'email' => 'galih@gmail.com',
            'password' => Hash::make('galih123'),
            'phone' => '081290287360',
            'address' => 'bogor',
            'role_id' => 2
        ],[
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'phone' => '081290287360',
            'address' => 'london',
            'role_id' => 1
        ]
            
        ]);
    }
}
