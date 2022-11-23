<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::query()->insert(
            [
                [
                    "id" => 1,
                    "name" => "Romance"
                ],
                [
                    "id" => 2,
                    "name" => "Mystery"
                ],
                [
                    "id" => 3,
                    "name" => "Horror"
                ]
            ]
        );
    }
}
