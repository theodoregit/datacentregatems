<?php

use Illuminate\Database\Seeder;

class DCReceptionAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\DCReceptionAuth::create([
            'name' => 'ayele mamo',
            'email' => 'ayelemamo@cbe.com.et',
            'password' => bcrypt('password')
        ]);
    }
}
