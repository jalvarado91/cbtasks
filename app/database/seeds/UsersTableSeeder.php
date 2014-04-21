<?php

class UsersTableSeeder extends Seeder{
    public function run()
    {
        User::truncate();

        User::create([
            'username' => 'jalvarado',
            'email'    => 'jalvarado91@gmail.com',
            'password' => '1234'
        ]);

        User::create([
            'username' => 'ThisGuyBro',
            'email'    => 'dudemaster@bromail.com',
            'password' => 'dudeman'
        ]);
    }
} 