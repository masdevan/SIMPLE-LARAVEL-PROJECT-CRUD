<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'Bang Depan Anjay Mabar',
            'username' => 'MasDevan Kemche',
            'email' => 'masdevan@gmail.com',
            'password' => bcrypt('password')
        ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Design Ilustrasi',
            'slug' => 'design-ilustrasi'
        ]);

        Post::factory(20)->create();

        /*
        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit odio voluptatibus officiis vero placeat a explicabo magni qui cupiditate, minus laboriosam sunt',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta blanditiis in quisquam est modi vitae autem quibusdam debitis aperiam, quis mollitia tempore nostrum, quo assumenda. Doloremque pariatur explicabo, soluta sequi magni deserunt officiis dolor perspiciatis aperiam obcaecati aliquam nihil animi reiciendis rem, distinctio vel libero mollitia corrupti harum! Dignissimos, quam reprehenderit excepturi, ipsum ducimus deleniti porro illo alias minus mollitia aperiam asperiores architecto molestiae harum nesciunt doloremque numquam quos. Consectetur, recusandae odit! Officiis autem obcaecati ducimus nihil facilis nam quis nostrum sit, ea non pariatur incidunt nemo dolores nisi natus necessitatibus saepe animi cupiditate laudantium ipsam temporibus. Laudantium, id ullam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius doloremque ullam asperiores veniam odio similique quisquam commodi earum assumenda nisi alias at esse quas cumque soluta fuga nulla aspernatur quae provident vitae velit, est ea porro placeat? Doloremque possimus error totam consequatur eum est dicta eveniet fugit consequuntur qui, autem in ut inventore cumque aut assumenda debitis sunt deserunt voluptates? Ipsam minus enim assumenda, qui molestias praesentium nam eius blanditiis a consequuntur, soluta quaerat laborum aliquid impedit atque commodi. Iusto, debitis facilis vel dolorem ad reprehenderit veritatis quaerat vitae dolore. Repellat similique sed sint ratione perspiciatis quidem, repudiandae omnis autem?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit odio voluptatibus officiis vero placeat a explicabo magni qui cupiditate, minus laboriosam sunt',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta blanditiis in quisquam est modi vitae autem quibusdam debitis aperiam, quis mollitia tempore nostrum, quo assumenda. Doloremque pariatur explicabo, soluta sequi magni deserunt officiis dolor perspiciatis aperiam obcaecati aliquam nihil animi reiciendis rem, distinctio vel libero mollitia corrupti harum! Dignissimos, quam reprehenderit excepturi, ipsum ducimus deleniti porro illo alias minus mollitia aperiam asperiores architecto molestiae harum nesciunt doloremque numquam quos. Consectetur, recusandae odit! Officiis autem obcaecati ducimus nihil facilis nam quis nostrum sit, ea non pariatur incidunt nemo dolores nisi natus necessitatibus saepe animi cupiditate laudantium ipsam temporibus. Laudantium, id ullam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius doloremque ullam asperiores veniam odio similique quisquam commodi earum assumenda nisi alias at esse quas cumque soluta fuga nulla aspernatur quae provident vitae velit, est ea porro placeat? Doloremque possimus error totam consequatur eum est dicta eveniet fugit consequuntur qui, autem in ut inventore cumque aut assumenda debitis sunt deserunt voluptates? Ipsam minus enim assumenda, qui molestias praesentium nam eius blanditiis a consequuntur, soluta quaerat laborum aliquid impedit atque commodi. Iusto, debitis facilis vel dolorem ad reprehenderit veritatis quaerat vitae dolore. Repellat similique sed sint ratione perspiciatis quidem, repudiandae omnis autem?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit odio voluptatibus officiis vero placeat a explicabo magni qui cupiditate, minus laboriosam sunt',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta blanditiis in quisquam est modi vitae autem quibusdam debitis aperiam, quis mollitia tempore nostrum, quo assumenda. Doloremque pariatur explicabo, soluta sequi magni deserunt officiis dolor perspiciatis aperiam obcaecati aliquam nihil animi reiciendis rem, distinctio vel libero mollitia corrupti harum! Dignissimos, quam reprehenderit excepturi, ipsum ducimus deleniti porro illo alias minus mollitia aperiam asperiores architecto molestiae harum nesciunt doloremque numquam quos. Consectetur, recusandae odit! Officiis autem obcaecati ducimus nihil facilis nam quis nostrum sit, ea non pariatur incidunt nemo dolores nisi natus necessitatibus saepe animi cupiditate laudantium ipsam temporibus. Laudantium, id ullam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius doloremque ullam asperiores veniam odio similique quisquam commodi earum assumenda nisi alias at esse quas cumque soluta fuga nulla aspernatur quae provident vitae velit, est ea porro placeat? Doloremque possimus error totam consequatur eum est dicta eveniet fugit consequuntur qui, autem in ut inventore cumque aut assumenda debitis sunt deserunt voluptates? Ipsam minus enim assumenda, qui molestias praesentium nam eius blanditiis a consequuntur, soluta quaerat laborum aliquid impedit atque commodi. Iusto, debitis facilis vel dolorem ad reprehenderit veritatis quaerat vitae dolore. Repellat similique sed sint ratione perspiciatis quidem, repudiandae omnis autem?</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit odio voluptatibus officiis vero placeat a explicabo magni qui cupiditate, minus laboriosam sunt',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta blanditiis in quisquam est modi vitae autem quibusdam debitis aperiam, quis mollitia tempore nostrum, quo assumenda. Doloremque pariatur explicabo, soluta sequi magni deserunt officiis dolor perspiciatis aperiam obcaecati aliquam nihil animi reiciendis rem, distinctio vel libero mollitia corrupti harum! Dignissimos, quam reprehenderit excepturi, ipsum ducimus deleniti porro illo alias minus mollitia aperiam asperiores architecto molestiae harum nesciunt doloremque numquam quos. Consectetur, recusandae odit! Officiis autem obcaecati ducimus nihil facilis nam quis nostrum sit, ea non pariatur incidunt nemo dolores nisi natus necessitatibus saepe animi cupiditate laudantium ipsam temporibus. Laudantium, id ullam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius doloremque ullam asperiores veniam odio similique quisquam commodi earum assumenda nisi alias at esse quas cumque soluta fuga nulla aspernatur quae provident vitae velit, est ea porro placeat? Doloremque possimus error totam consequatur eum est dicta eveniet fugit consequuntur qui, autem in ut inventore cumque aut assumenda debitis sunt deserunt voluptates? Ipsam minus enim assumenda, qui molestias praesentium nam eius blanditiis a consequuntur, soluta quaerat laborum aliquid impedit atque commodi. Iusto, debitis facilis vel dolorem ad reprehenderit veritatis quaerat vitae dolore. Repellat similique sed sint ratione perspiciatis quidem, repudiandae omnis autem?</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);
        */

    }
}
