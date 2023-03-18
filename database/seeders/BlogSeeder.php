<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::truncate();
  
        $json = File::get("database/data/blog.json");
        $countries = json_decode($json);
  
        foreach ($countries as $key => $value) {
            Blog::create([
                "thumbnail" => 'imageblogs/PwgodMM8IS3BTjuL6UudAF0rBtaRgRuhFizqYAPj.jpg',
                "title" => $value->title,
                "tag" => $value->tag,
                "description" => $value->description,
                "content" => $value->content,
                "category_id" => 4,
                "user_id" => User::first()->id
            ]);
        }
    }
}
