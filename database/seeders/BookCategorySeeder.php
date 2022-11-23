<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookCategory::query()->insert(
            [
                [
                    "id" => 1,
                    "books_id" => "1",
                    "categories_id" => "1",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 2,
                    "books_id" => "2",
                    "categories_id" => "2",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 3,
                    "books_id" => "3",
                    "categories_id" => "3",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 4,
                    "books_id" => "3",
                    "categories_id" => "2",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 5,
                    "books_id" => "4",
                    "categories_id" => "3",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 6,
                    "books_id" => "4",
                    "categories_id" => "2",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 7,
                    "books_id" => "5",
                    "categories_id" => "1",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 8,
                    "books_id" => "6",
                    "categories_id" => "1",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 9,
                    "books_id" => "7",
                    "categories_id" => "1",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 10,
                    "books_id" => "8",
                    "categories_id" => "2",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 11,
                    "books_id" => "9",
                    "categories_id" => "2",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            ]
        );
    }
}
