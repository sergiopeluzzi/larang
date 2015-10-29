<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Larang\Models\Project::truncate();
        factory(\Larang\Models\Project::class, 10)->create();
    }
}
