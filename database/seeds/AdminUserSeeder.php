<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\User::insert([
            'password' => \Illuminate\Support\Facades\Hash::make('123456'),
            'firstname' => 'Admin',
            'lastname' => 'AdminLast',
            'skype' => 'Skype',
            'phone' => '+9372',
            'email' => 'admin@mail.ru',
            'referer_id' => null
        ]);

        $this->command->info("Admin was added");
    }
}
