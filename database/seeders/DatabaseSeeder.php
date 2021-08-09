<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // User::create([
        //     'name' => 'Muhammad Syaugi',
        //     'email' => 'Muhammadsyaugi13@gmail.com',
        //     'password' => Hash::make('12345')
        // ]);

        // User::create([
        //     'name' => 'Aji',
        //     'email' => '4ji@gmail.com',
        //     'password' => Hash::make('123')
        // ]);

        User::factory(4)->create();
        Post::factory(20)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerp' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, dignissimos.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus laborum nisi, doloribus, ad tenetur voluptas quas ducimus doloremque temporibus nesciunt tempore delectus dicta velit eos deleniti itaque, distinctio et voluptates? Consectetur dolorem voluptatem magnam cupiditate velit error fugit architecto aliquam. Eaque, nobis ex esse, eligendi odit sapiente libero nulla nam provident est quasi alias quia maiores totam molestiae eveniet dignissimos!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerp' => 'architecto aliquam. Eaque, nobis ex esse, eligendi odit sapiente libero nulla n',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus laborum nisi, doloribus, ad tenetur voluptas quas ducimus doloremque temporibus nesciunt tempore delectus dicta velit eos deleniti itaque, distinctio et voluptates? Consectetur dolorem voluptatem magnam cupiditate velit error fugit am provident est quasi alias quia maiores totam molestiae eveniet dignissimos!',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerp' => 'doloribus, ad tenetur voluptas quas ducimus',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus laborum nisi, doloribus, ad tenetur voluptas quas ducimus doloremqt voluptates? Consectetur dolorem voluptatem magnam cupiditate velit error fugit am provident est quasi alias quia maiores totam molestiae eveniet dignissimos!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
