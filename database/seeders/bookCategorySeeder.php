<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class bookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('book_category')->delete();

        $data = [
            [
                'book_id' => 1,
                'category_id' => 1,
            ],
            [
                'book_id' => 2,
                'category_id' => 1,
            ],
            [
                'book_id' => 3,
                'category_id' => 3,
            ],
            [
                'book_id' => 4,
                'category_id' => 2,
            ],
        ];
        
        DB::table('book_category')->insert($data);
    }
}
