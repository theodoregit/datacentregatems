<?php

use Illuminate\Database\Seeder;

class DCManagerAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\DCManagerAuth::create([
            'name' => 'abebe kebede',
            'email' => 'abebekebede@cbe.com.et',
            'password' => bcrypt('password')
        ]);
    }
}
