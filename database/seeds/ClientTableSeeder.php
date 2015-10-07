<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Larang\Client::truncate();
        factory(\Larang\Client::class, 10)->create();
    }
}
