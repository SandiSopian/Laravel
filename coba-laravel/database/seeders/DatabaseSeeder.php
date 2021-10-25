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
        //     'name' => 'Sandi',
        //     'email' => 'sandi@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'Sopian',
        //     'email' => 'sopian@gmail.com',
        //     'password' => bcrypt('123996')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Database Administrator',
            'slug' => 'database-administrator'
        ]);
                
        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science'
        ]);

        Post::factory(20)->create();

    //     Post::create([
    //         'title' => 'Judul Pertama',
    //         'slug' => 'judul-pertama',
    //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, debitis veritatis animi rerum quod sint adipisci. Maiores autem impedit voluptate et distinctio pariatur odit ullam aperiam blanditiis voluptatibus, sit atque illo expedita. Accusantium esse odio iure, ',
    //         'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, debitis veritatis animi rerum quod sint adipisci. Maiores autem impedit voluptate et distinctio pariatur odit ullam aperiam blanditiis voluptatibus, sit atque illo expedita. Accusantium esse odio iure, minima molestias aliquid itaque iste quidem modi. Natus, numquam dolor voluptatem consequuntur sapiente, nihil culpa minima repudiandae corrupti pariatur rerum quidem. Harum, distinctio excepturi quam dolore facilis id dolorum consequuntur sint expedita, saepe incidunt corporis consectetur quod! Dolore nihil ea quibusdam nemo dignissimos, repellendus in aspernatur non suscipit, pariatur assumenda, aperiam a explicabo eligendi nulla voluptate quo voluptates! Voluptas ut consectetur nostrum obcaecati tenetur iusto! Debitis eum dolorum voluptatum distinctio ex, libero quasi? Quam voluptates saepe ipsum voluptas minus aliquid aspernatur repudiandae reprehenderit provident quae cum, ducimus, fugiat temporibus. Commodi modi voluptatem magnam ab ad pariatur enim hic facilis vel, architecto asperiores atque et?',
    //         'category_id' => 1,
    //         'user_id' => 1,
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Kedua',
    //         'slug' => 'judul-kedua',
    //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, debitis veritatis animi rerum quod sint adipisci. Maiores autem impedit voluptate et distinctio pariatur odit ullam aperiam blanditiis voluptatibus, sit atque illo expedita. Accusantium esse odio iure, ',
    //         'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, debitis veritatis animi rerum quod sint adipisci. Maiores autem impedit voluptate et distinctio pariatur odit ullam aperiam blanditiis voluptatibus, sit atque illo expedita. Accusantium esse odio iure, minima molestias aliquid itaque iste quidem modi. Natus, numquam dolor voluptatem consequuntur sapiente, nihil culpa minima repudiandae corrupti pariatur rerum quidem. Harum, distinctio excepturi quam dolore facilis id dolorum consequuntur sint expedita, saepe incidunt corporis consectetur quod! Dolore nihil ea quibusdam nemo dignissimos, repellendus in aspernatur non suscipit, pariatur assumenda, aperiam a explicabo eligendi nulla voluptate quo voluptates! Voluptas ut consectetur nostrum obcaecati tenetur iusto! Debitis eum dolorum voluptatum distinctio ex, libero quasi? Quam voluptates saepe ipsum voluptas minus aliquid aspernatur repudiandae reprehenderit provident quae cum, ducimus, fugiat temporibus. Commodi modi voluptatem magnam ab ad pariatur enim hic facilis vel, architecto asperiores atque et?',
    //         'category_id' => 1,
    //         'user_id' => 1,
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Ketiga',
    //         'slug' => 'judul-ketiga',
    //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, debitis veritatis animi rerum quod sint adipisci. Maiores autem impedit voluptate et distinctio pariatur odit ullam aperiam blanditiis voluptatibus, sit atque illo expedita. Accusantium esse odio iure, ',
    //         'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, debitis veritatis animi rerum quod sint adipisci. Maiores autem impedit voluptate et distinctio pariatur odit ullam aperiam blanditiis voluptatibus, sit atque illo expedita. Accusantium esse odio iure, minima molestias aliquid itaque iste quidem modi. Natus, numquam dolor voluptatem consequuntur sapiente, nihil culpa minima repudiandae corrupti pariatur rerum quidem. Harum, distinctio excepturi quam dolore facilis id dolorum consequuntur sint expedita, saepe incidunt corporis consectetur quod! Dolore nihil ea quibusdam nemo dignissimos, repellendus in aspernatur non suscipit, pariatur assumenda, aperiam a explicabo eligendi nulla voluptate quo voluptates! Voluptas ut consectetur nostrum obcaecati tenetur iusto! Debitis eum dolorum voluptatum distinctio ex, libero quasi? Quam voluptates saepe ipsum voluptas minus aliquid aspernatur repudiandae reprehenderit provident quae cum, ducimus, fugiat temporibus. Commodi modi voluptatem magnam ab ad pariatur enim hic facilis vel, architecto asperiores atque et?',
    //         'category_id' => 2,
    //         'user_id' => 1,
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Keempat',
    //         'slug' => 'judul-keempat',
    //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, debitis veritatis animi rerum quod sint adipisci. Maiores autem impedit voluptate et distinctio pariatur odit ullam aperiam blanditiis voluptatibus, sit atque illo expedita. Accusantium esse odio iure, ',
    //         'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, debitis veritatis animi rerum quod sint adipisci. Maiores autem impedit voluptate et distinctio pariatur odit ullam aperiam blanditiis voluptatibus, sit atque illo expedita. Accusantium esse odio iure, minima molestias aliquid itaque iste quidem modi. Natus, numquam dolor voluptatem consequuntur sapiente, nihil culpa minima repudiandae corrupti pariatur rerum quidem. Harum, distinctio excepturi quam dolore facilis id dolorum consequuntur sint expedita, saepe incidunt corporis consectetur quod! Dolore nihil ea quibusdam nemo dignissimos, repellendus in aspernatur non suscipit, pariatur assumenda, aperiam a explicabo eligendi nulla voluptate quo voluptates! Voluptas ut consectetur nostrum obcaecati tenetur iusto! Debitis eum dolorum voluptatum distinctio ex, libero quasi? Quam voluptates saepe ipsum voluptas minus aliquid aspernatur repudiandae reprehenderit provident quae cum, ducimus, fugiat temporibus. Commodi modi voluptatem magnam ab ad pariatur enim hic facilis vel, architecto asperiores atque et?',
    //         'category_id' => 2,
    //         'user_id' => 2,
    //     ]);
     }
}
