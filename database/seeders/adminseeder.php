<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::create(
            [

                'name'=>'admin',
                'email'=>'admin1234@gmail.com',
                'phone'=> 6677,
                'address'=>'Dhaka',
                'roll_id'=> 1,
                'status'=>3,
                'password'=>Hash::make('1234'),

            ]
            );

    }
}
