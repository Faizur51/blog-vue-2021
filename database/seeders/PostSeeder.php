<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Factory::create();
        foreach (range(1,20) as $index){
            $name=$faker->name;
            Post::create([
                'user_id'=>rand(1,21),
                'category_id'=>rand(1,20),
                'title'=>$name,
                'slug'=>slugify($name),
                'content'=>$faker->paragraph,
                'image'=>$faker->imageUrl(),
                'status'=>randomStatus(),
            ]);
        }
    }
}
