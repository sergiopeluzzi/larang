<?php

use Illuminate\Database\Seeder;

class ProjectNotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Larang\Models\User::truncate();
        factory(\Larang\Models\ProjectNote::class, 50)->create();
    }
}
