<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        User::create([
           'name' => 'Muhammad Ikhsan',
           'username' => 'muhammadikhsan',
           'email' => 'muhammadikhsan@gmail.com',
           'password' => bcrypt('12345')
        ]);

        //User::create([
        //    'name' => 'Anselma Putri',
        //    'email' => 'anselma@gmail.com',
        //    'password' => bcrypt('12345')
        //]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programmming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        //Post::create([
        //    'title' => 'Judul Pertama',
        //    'slug' => 'judul-pertama',
        //    'excerpt' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum natus, voluptas vel vero amet quisquam iste quo enim totam odio, saepe laudantium ut animi, repellat voluptate sint aspernatur',
        //    'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum natus, voluptas vel vero amet quisquam iste quo enim totam odio, saepe laudantium ut animi, repellat voluptate sint aspernatur. Nulla, quod repudiandae fuga, mollitia libero
        //    dolores provident est eos eum reprehenderit omnis soluta, commodi eveniet officia quos ullam quisquam dolorem labore eius temporibus consequuntur hic? Culpa ratione doloribus, soluta facilis iure, obcaecati magni velit quibusdam autem
        //    voluptatibus distinctio! Exercitationem, veritatis voluptatibus est quia repellat unde delectus accusantium? Possimus temporibus modi delectus maxime explicabo nemo repellendus placeat magnam quidem odit. Repudiandae ut ea odit? Veritatis
        //    reiciendis ex, eligendi dignissimos impedit consectetur illum!',
        //    'category_id' => 1,
        //    'user_id' => 1
        //]);

        //Post::create([
        //    'title' => 'Judul Ke Dua',
        //    'slug' => 'judul-ke-dua',
        //    'excerpt' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum natus, voluptas vel vero amet quisquam iste quo enim totam odio, saepe laudantium ut animi, repellat voluptate sint aspernatur',
        //    'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum natus, voluptas vel vero amet quisquam iste quo enim totam odio, saepe laudantium ut animi, repellat voluptate sint aspernatur. Nulla, quod repudiandae fuga, mollitia libero
        //    dolores provident est eos eum reprehenderit omnis soluta, commodi eveniet officia quos ullam quisquam dolorem labore eius temporibus consequuntur hic? Culpa ratione doloribus, soluta facilis iure, obcaecati magni velit quibusdam autem
        //    voluptatibus distinctio! Exercitationem, veritatis voluptatibus est quia repellat unde delectus accusantium? Possimus temporibus modi delectus maxime explicabo nemo repellendus placeat magnam quidem odit. Repudiandae ut ea odit? Veritatis
        //    reiciendis ex, eligendi dignissimos impedit consectetur illum!',
        //    'category_id' => 1,
        //    'user_id' => 1
        //]);

        //Post::create([
        //    'title' => 'Judul Ke Tiga',
        //    'slug' => 'judul-ke-tiga',
        //    'excerpt' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum natus, voluptas vel vero amet quisquam iste quo enim totam odio, saepe laudantium ut animi, repellat voluptate sint aspernatur',
        //    'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum natus, voluptas vel vero amet quisquam iste quo enim totam odio, saepe laudantium ut animi, repellat voluptate sint aspernatur. Nulla, quod repudiandae fuga, mollitia libero
        //    dolores provident est eos eum reprehenderit omnis soluta, commodi eveniet officia quos ullam quisquam dolorem labore eius temporibus consequuntur hic? Culpa ratione doloribus, soluta facilis iure, obcaecati magni velit quibusdam autem
        //    voluptatibus distinctio! Exercitationem, veritatis voluptatibus est quia repellat unde delectus accusantium? Possimus temporibus modi delectus maxime explicabo nemo repellendus placeat magnam quidem odit. Repudiandae ut ea odit? Veritatis
        //    reiciendis ex, eligendi dignissimos impedit consectetur illum!',
        //    'category_id' => 2,
        //    'user_id' => 1
        //]);

        //Post::create([
        //    'title' => 'Judul Ke Empat',
        //    'slug' => 'judul-ke-empat',
        //   'excerpt' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum natus, voluptas vel vero amet quisquam iste quo enim totam odio, saepe laudantium ut animi, repellat voluptate sint aspernatur',
        //    'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum natus, voluptas vel vero amet quisquam iste quo enim totam odio, saepe laudantium ut animi, repellat voluptate sint aspernatur. Nulla, quod repudiandae fuga, mollitia libero
        //    dolores provident est eos eum reprehenderit omnis soluta, commodi eveniet officia quos ullam quisquam dolorem labore eius temporibus consequuntur hic? Culpa ratione doloribus, soluta facilis iure, obcaecati magni velit quibusdam autem
        //    voluptatibus distinctio! Exercitationem, veritatis voluptatibus est quia repellat unde delectus accusantium? Possimus temporibus modi delectus maxime explicabo nemo repellendus placeat magnam quidem odit. Repudiandae ut ea odit? Veritatis
        //    reiciendis ex, eligendi dignissimos impedit consectetur illum!',
        //    'category_id' => 2,
        //    'user_id' => 2
        //]);

    }
}
