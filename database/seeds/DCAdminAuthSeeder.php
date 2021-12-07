<?php

use Illuminate\Database\Seeder;

class DCAdminAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\DCAdminAuth::create([
            'name' => 'mikiyas alemu',
            'email' => 'mikiyasalemu@cbe.com.et',
            'password' => bcrypt('password')
        ]);
    }
}
