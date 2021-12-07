<?php

use Illuminate\Database\Seeder;

class UnitManagerAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\UnitManagerAuth::create([
            'name' => 'genet chanyalew',
            'email' => 'genetchanyalew@cbe.com.et',
            'unit' => '04',
            'password' => bcrypt('password')
        ]);
    }
}
