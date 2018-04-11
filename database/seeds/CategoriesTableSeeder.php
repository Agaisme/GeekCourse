<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' 			=> 'Web Development',
                'slug' 			=> str_slug('Web Development'),
            ],
            [
                'name' 			=> 'Mobile Apps Development',
                'slug' 			=> str_slug('Mobile Apps Development'),
            ],
            [
                'name' 			=> 'Database',
                'slug' 			=> str_slug('Database'),
            ],
            [
                'name' 			=> 'Game Development',
                'slug' 			=> str_slug('Game Development'),
            ],
        ];

        foreach ($data as $key => $value) {
            DB::table("categories")->insert($value);
        }

    }
}
