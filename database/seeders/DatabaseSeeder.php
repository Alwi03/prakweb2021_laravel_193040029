<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
        //     'name' => 'Alwi Ramadhan',
        //     'email' => 'alwi.romadhon@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Yusril Ismail Azi',
        //     'email' => 'yusril@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web-programming'

        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'

        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis vitae vero blanditiis enim, sint cumque esse nam amet maxime voluptates dolore, rerum obcaecati nesciunt magni provident ab in sequi explicabo? Sequi illum illo, nemo iure, optio eius doloribus nihil architecto quas cumque consequatur quisquam nisi non provident, atque inventore similique dignissimos corporis. Atque, deserunt tempora, explicabo dolorum, laborum illum sit itaque error incidunt odio unde quod! Cum dolores animi, laboriosam culpa, possimus est error veniam doloribus, quaerat magnam repellendus tempora ex suscipit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis vitae vero blanditiis enim, sint cumque esse nam amet maxime voluptates dolore, rerum obcaecati nesciunt magni provident ab in sequi explicabo? Sequi illum illo, nemo iure, optio eius doloribus nihil architecto quas cumque consequatur quisquam nisi non provident, atque inventore similique dignissimos corporis. Atque, deserunt tempora, explicabo dolorum, laborum illum sit itaque error incidunt odio unde quod! Cum dolores animi, laboriosam culpa, possimus est error veniam doloribus, quaerat magnam repellendus tempora ex suscipit. Doloremque, esse? Laboriosam deleniti, tenetur dolores nulla quas incidunt animi voluptas dolor architecto rerum eveniet, sequi voluptatibus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis vitae vero blanditiis enim, sint cumque esse nam amet maxime voluptates dolore, rerum obcaecati nesciunt magni provident ab in sequi explicabo? Sequi illum illo, nemo iure, optio eius doloribus nihil architecto quas cumque consequatur quisquam nisi non provident, atque inventore similique dignissimos corporis. Atque, deserunt tempora, explicabo dolorum, laborum illum sit itaque error incidunt odio unde quod! Cum dolores animi, laboriosam culpa, possimus est error veniam doloribus, quaerat magnam repellendus tempora ex suscipit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis vitae vero blanditiis enim, sint cumque esse nam amet maxime voluptates dolore, rerum obcaecati nesciunt magni provident ab in sequi explicabo? Sequi illum illo, nemo iure, optio eius doloribus nihil architecto quas cumque consequatur quisquam nisi non provident, atque inventore similique dignissimos corporis. Atque, deserunt tempora, explicabo dolorum, laborum illum sit itaque error incidunt odio unde quod! Cum dolores animi, laboriosam culpa, possimus est error veniam doloribus, quaerat magnam repellendus tempora ex suscipit. Doloremque, esse? Laboriosam deleniti, tenetur dolores nulla quas incidunt animi voluptas dolor architecto rerum eveniet, sequi voluptatibus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis vitae vero blanditiis enim, sint cumque esse nam amet maxime voluptates dolore, rerum obcaecati nesciunt magni provident ab in sequi explicabo? Sequi illum illo, nemo iure, optio eius doloribus nihil architecto quas cumque consequatur quisquam nisi non provident, atque inventore similique dignissimos corporis. Atque, deserunt tempora, explicabo dolorum, laborum illum sit itaque error incidunt odio unde quod! Cum dolores animi, laboriosam culpa, possimus est error veniam doloribus, quaerat magnam repellendus tempora ex suscipit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis vitae vero blanditiis enim, sint cumque esse nam amet maxime voluptates dolore, rerum obcaecati nesciunt magni provident ab in sequi explicabo? Sequi illum illo, nemo iure, optio eius doloribus nihil architecto quas cumque consequatur quisquam nisi non provident, atque inventore similique dignissimos corporis. Atque, deserunt tempora, explicabo dolorum, laborum illum sit itaque error incidunt odio unde quod! Cum dolores animi, laboriosam culpa, possimus est error veniam doloribus, quaerat magnam repellendus tempora ex suscipit. Doloremque, esse? Laboriosam deleniti, tenetur dolores nulla quas incidunt animi voluptas dolor architecto rerum eveniet, sequi voluptatibus.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis vitae vero blanditiis enim, sint cumque esse nam amet maxime voluptates dolore, rerum obcaecati nesciunt magni provident ab in sequi explicabo? Sequi illum illo, nemo iure, optio eius doloribus nihil architecto quas cumque consequatur quisquam nisi non provident, atque inventore similique dignissimos corporis. Atque, deserunt tempora, explicabo dolorum, laborum illum sit itaque error incidunt odio unde quod! Cum dolores animi, laboriosam culpa, possimus est error veniam doloribus, quaerat magnam repellendus tempora ex suscipit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis vitae vero blanditiis enim, sint cumque esse nam amet maxime voluptates dolore, rerum obcaecati nesciunt magni provident ab in sequi explicabo? Sequi illum illo, nemo iure, optio eius doloribus nihil architecto quas cumque consequatur quisquam nisi non provident, atque inventore similique dignissimos corporis. Atque, deserunt tempora, explicabo dolorum, laborum illum sit itaque error incidunt odio unde quod! Cum dolores animi, laboriosam culpa, possimus est error veniam doloribus, quaerat magnam repellendus tempora ex suscipit. Doloremque, esse? Laboriosam deleniti, tenetur dolores nulla quas incidunt animi voluptas dolor architecto rerum eveniet, sequi voluptatibus.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
