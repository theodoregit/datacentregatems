<?php

use Illuminate\Database\Seeder;

class InfManagerAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\InfManagerAuth::create([
            'name' => 'tariku abera',
            'email' => 'tarikuabera@cbe.com.et',
            'password' => bcrypt('password')
        ]);
    }
}
