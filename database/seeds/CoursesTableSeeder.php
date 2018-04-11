<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
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
                'title' 		=> 'Node JS: Advanced Concepts',
                'slug' 			=> str_slug('Node JS: Advanced Concepts'),
                'description' 	=> 'Get advanced with Node.Js! Learn caching with Redis, speed up through clustering, and add image upload with S3 and Node!',
                'category_id' 	=> '1',
                'author_id' 	=> '1',
                
            ],
            [
                'title' 		=> 'Learn and Understand AngularJS',
                'slug' 			=> str_slug('Learn and Understand AngularJS'),
                'description' 	=> 'Master AngularJS and the Javascript concepts behind it, design custom directives, and build a single page application.',
                'category_id' 	=> '1',
                'author_id' 	=> '1',
                
            ],
            [
                'title' 		=> 'I want to connect my Xamarin Forms app to REST API',
                'slug' 			=> str_slug('I want to connect my Xamarin Forms app to REST API'),
                'description' 	=> 'In less than 3hours, learn how to create a REST API with ASP.NET Core and call it from Xamarin Forms app (iOS & Android)',
                'category_id' 	=> '2',
                'author_id' 	=> '1',
                
            ],
            [
                'title' 		=> 'Mastering Ansible',
                'slug' 			=> str_slug('Mastering Ansible'),
                'description' 	=> 'Exploit the power of Ansible to expedite scalable orchestration, DevOps, and automation',
                'category_id' 	=> '3',
                'author_id' 	=> '1',
                
            ],
            [
                'title' 		=> 'The Ultimate Guide to Cinematography with Unity',
                'slug' 			=> str_slug('The Ultimate Guide to Cinematography with Unity'),
                'description' 	=> 'Created in partnership with Unity Technologies: Master Timeline, Cinemachine, & C#. Develop a stealth adventure game!',
                'category_id' 	=> '4',
                'author_id' 	=> '1',
                
            ],
        ];

        foreach ($data as $key => $value) {
            DB::table("courses")->insert($value);
        }

    }
}
