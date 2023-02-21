<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'novel', 'comic', 'fiction', 'history', 'romance', 'drama', 'sport', 'horror',
            'action', 'comedy', 'slice of life', 'triller',
        ];

        foreach ($data as $value) {
            Category::insert([

                'name' => $value
            ]);
        }
    }
}
