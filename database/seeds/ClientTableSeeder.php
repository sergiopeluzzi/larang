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
        //\Larang\Models\Client::truncate();
        factory(\Larang\Models\Client::class, 10)->create();
    }
}
