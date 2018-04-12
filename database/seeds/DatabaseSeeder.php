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
        factory(\App\Models\User::class)->times(50)->create();
        $this->call(CategoriesTableSeeder::class);
        /*$this->call(UsersTableSeeder::class);*/
        $this->call(CoursesTableSeeder::class);
        $this->call(VideosTableSeeder::class);
    }
}
