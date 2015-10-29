<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Larang\Models\User::truncate();
        factory(\Larang\Models\User::class, 5)->create();
    }
}
