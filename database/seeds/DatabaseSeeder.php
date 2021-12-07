<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SuperAdminAuthSeeder::class);
        $this->call(DCManagerAuthSeeder::class);
        $this->call(InfManagerAuthSeeder::class);
        $this->call(UnitManagerAuthSeeder::class);
        $this->call(DCAdminAuthSeeder::class);
        $this->call(DCReceptionAuthSeeder::class);
    }
}
