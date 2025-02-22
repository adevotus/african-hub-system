<?php

namespace Database\Seeders;

use App\Models\User;
use App\Util\StringUtil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an admin user
        User::create([
            'firstName' => 'Admin',
            'lastName' => 'norm',
            'userNumber' => StringUtil::generateRandomNumber(5),
            'roles' => 'admin',
            'email' => 'admin@africanhub.com',
            'password' => Hash::make('123456789'),
        ]);

        // Create a sample student user
        User::create([
            'firstName' => 'John',
            'lastName' => 'Doe',
            'userNumber' => StringUtil::generateRandomNumber(5) ,
            'roles' => 'student',
            'email' => 'john@example.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'firstName' => 'super',
            'lastName' => 'administrator',
            'userNumber' => StringUtil::generateRandomNumber(5) ,
            'roles' => 'super',
            'email' => 'super@africanhub.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
