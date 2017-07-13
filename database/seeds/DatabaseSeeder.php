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
        //$this->call(ShoulderTypeSeeder::class);
        //$this->call(ShoulderSeeder::class);
        $this->call('SubjectCrosswalkTableSeeder');
    }
}
