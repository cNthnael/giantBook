<?php

namespace Database\Seeders;

use App\Models\Categories;
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
        $this->call([
            BooksSeeder::class
        ]);

        $this->call([
            BookCategorySeeder::class
        ]);

        $this->call([
            CategoriesSeeder::class
        ]);

        $this->call([
            PublishersSeeder::class
        ]);
    }
}
