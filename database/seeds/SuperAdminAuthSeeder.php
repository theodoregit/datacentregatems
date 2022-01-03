<?php

use Illuminate\Database\Seeder;

class SuperAdminAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'teddy',
            'email' => 'tewodros.yesmaw2@cbe.com.et',
            'password' => bcrypt('tewodros.yesmaw@cbe.com.et')
        ]);
    }
}
