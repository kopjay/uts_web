<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('categories')->delete();

        $data = [
            [
                'name' => 'Fiction',
            ],
            [
                'name' => 'Romance',
            ],
            [
                'name' => 'Science',
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
