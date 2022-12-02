<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Ahmad Haidar',
            'email' => 'haidar@haidar.com',
            'password' => bcrypt('admin'),
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum rerum maxime eos corrupti, libero incidunt qui iste? Animi, cupiditate.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum rerum maxime eos corrupti, libero incidunt qui iste? Animi, cupiditate. Hic cum eos illo tempore nihil esse saepe numquam voluptatem pariatur animi qui atque ipsa, excepturi doloremque voluptas sunt debitis, iusto nostrum totam! Molestias et sunt dicta cupiditate, dolores obcaecati dolor quas similique, dignissimos reprehenderit labore amet voluptates excepturi modi optio saepe rerum quo repellendus vitae temporibus esse! Porro quos quis hic excepturi suscipit, corrupti soluta ducimus consequatur, doloribus repellendus aspernatur, quidem maxime voluptates totam culpa exercitationem modi fuga. Quaerat fuga qui, sed neque saepe et dolore odio accusantium nisi tempore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum rerum maxime eos corrupti, libero incidunt qui iste? Animi, cupiditate. Hic cum eos illo tempore nihil esse saepe numquam voluptatem pariatur animi qui atque ipsa, excepturi doloremque voluptas sunt debitis, iusto nostrum totam! Molestias et sunt dicta cupiditate, dolores obcaecati dolor quas similique, dignissimos reprehenderit labore amet voluptates excepturi modi optio saepe rerum quo repellendus vitae temporibus esse! Porro quos quis hic excepturi suscipit, corrupti soluta ducimus consequatur, doloribus repellendus aspernatur, quidem maxime voluptates totam culpa exercitationem modi fuga. Quaerat fuga qui, sed neque saepe et dolore odio accusantium nisi tempore.</p>',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum rerum maxime eos corrupti, libero incidunt qui iste? Animi, cupiditate.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum rerum maxime eos corrupti, libero incidunt qui iste? Animi, cupiditate. Hic cum eos illo tempore nihil esse saepe numquam voluptatem pariatur animi qui atque ipsa, excepturi doloremque voluptas sunt debitis, iusto nostrum totam! Molestias et sunt dicta cupiditate, dolores obcaecati dolor quas similique, dignissimos reprehenderit labore amet voluptates excepturi modi optio saepe rerum quo repellendus vitae temporibus esse! Porro quos quis hic excepturi suscipit, corrupti soluta ducimus consequatur, doloribus repellendus aspernatur, quidem maxime voluptates totam culpa exercitationem modi fuga. Quaerat fuga qui, sed neque saepe et dolore odio accusantium nisi tempore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum rerum maxime eos corrupti, libero incidunt qui iste? Animi, cupiditate. Hic cum eos illo tempore nihil esse saepe numquam voluptatem pariatur animi qui atque ipsa, excepturi doloremque voluptas sunt debitis, iusto nostrum totam! Molestias et sunt dicta cupiditate, dolores obcaecati dolor quas similique, dignissimos reprehenderit labore amet voluptates excepturi modi optio saepe rerum quo repellendus vitae temporibus esse! Porro quos quis hic excepturi suscipit, corrupti soluta ducimus consequatur, doloribus repellendus aspernatur, quidem maxime voluptates totam culpa exercitationem modi fuga. Quaerat fuga qui, sed neque saepe et dolore odio accusantium nisi tempore.</p>',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum rerum maxime eos corrupti, libero incidunt qui iste? Animi, cupiditate.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum rerum maxime eos corrupti, libero incidunt qui iste? Animi, cupiditate. Hic cum eos illo tempore nihil esse saepe numquam voluptatem pariatur animi qui atque ipsa, excepturi doloremque voluptas sunt debitis, iusto nostrum totam! Molestias et sunt dicta cupiditate, dolores obcaecati dolor quas similique, dignissimos reprehenderit labore amet voluptates excepturi modi optio saepe rerum quo repellendus vitae temporibus esse! Porro quos quis hic excepturi suscipit, corrupti soluta ducimus consequatur, doloribus repellendus aspernatur, quidem maxime voluptates totam culpa exercitationem modi fuga. Quaerat fuga qui, sed neque saepe et dolore odio accusantium nisi tempore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum rerum maxime eos corrupti, libero incidunt qui iste? Animi, cupiditate. Hic cum eos illo tempore nihil esse saepe numquam voluptatem pariatur animi qui atque ipsa, excepturi doloremque voluptas sunt debitis, iusto nostrum totam! Molestias et sunt dicta cupiditate, dolores obcaecati dolor quas similique, dignissimos reprehenderit labore amet voluptates excepturi modi optio saepe rerum quo repellendus vitae temporibus esse! Porro quos quis hic excepturi suscipit, corrupti soluta ducimus consequatur, doloribus repellendus aspernatur, quidem maxime voluptates totam culpa exercitationem modi fuga. Quaerat fuga qui, sed neque saepe et dolore odio accusantium nisi tempore.</p>',
            'category_id' => 3,
            'user_id' => 1,
        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
