<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'tewodros yesmaw',
            'role' => 1,
            'email' => 'tewodros.yesmaw@cbe.com.et',
            'password' => bcrypt('tewodros.yesmaw@cbe.com.et')
        ]);

        App\User::create([
            'name' => 'genet chanyalew',
            'role' => 2,
            'unit' => '04',
            'email' => 'genetchanyalew@cbe.com.et',
            'password' => bcrypt('password')
        ]);

        App\User::create([
            'name' => 'abebe kebede',
            'role' => 3,
            'email' => 'abebekebede@cbe.com.et',
            'password' => bcrypt('password')
        ]);

        App\User::create([
            'name' => 'tariku abera',
            'role' => 4,
            'email' => 'tarikuabera@cbe.com.et',
            'password' => bcrypt('password')
        ]);

        App\User::create([
            'name' => 'mikiyas alemu',
            'role' => 5,
            'email' => 'mikiyasalemu@cbe.com.et',
            'password' => bcrypt('password')
        ]);

        App\User::create([
            'name' => 'new user',
            'role' => 5,
            'email' => 'newuser@cbe.com.et',
            'password' => bcrypt('password')
        ]);

        App\User::create([
            'name' => 'ayele mamo',
            'role' => 6,
            'email' => 'ayelemamo@cbe.com.et',
            'password' => bcrypt('password')
        ]);
    }
}
