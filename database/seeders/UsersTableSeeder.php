<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       \DB::table('users')->insert([
            [
                'name' => 'Ray',
                'email' => 'Ray.g@gmail.com',
                'password' => Hash::make('12345678') ,
                'lname' => 'Talla',
                'phone'=> '696478523',
                'address1'=> 'Ssadi-Douala',
                'address2'=> 'yansoki-Douala',
                'city'=> 'Douala',
                'state'=> 'ssadi',
                'country'=> 'Cameroun',
                'pincode'=> '1234',
                'role' => 'admin',

            ],
            [
                'name' => 'claude',
                'email' => 'claude.r@gmail.com',
                'password' => Hash::make('12345678'),
                'lname' => 'DJIOJIP',
                'phone'=> '698745632',
                'address1'=> 'Kotto-Douala',
                'address2'=> 'Yansoki-Douala',
                'city'=> 'Douala',
                'state'=> 'yansoki',
                'country'=> 'Cameroun',
                'pincode'=> '1234',
                'role' => 'user',
            ]
        ]);

    }

}
