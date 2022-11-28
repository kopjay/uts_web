<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class booksSeeder extends Seeder
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
                'publisher_id' => 1,
                'title' => 'Lord of the Rings',
                'author' => 'Tolkien',
                'year' => 2001,
                'synopsis' => 'A fellowship of hobbits, elves, dwarfs, and men is formed to destroy the ring by casting it into the volcanic fires of the Crack of Doom, where it was forged.',
                'image' => 'lotr',
            ],
            [
                'publisher_id' => 2,
                'title' => 'Harry Potter',
                'author' => 'JK Rowling',
                'year' => 1997,
                'synopsis' => 'At Hogwarts, Harry will learn what it means to be Wizard. He will learn many things about wizardry from his teachers and Head Master, Dumbledore.',
                'image' => 'harry',
            ],
            [
                'publisher_id' => 1,
                'title' => 'Constructing A Nervous System',
                'author' => 'Jay',
                'year' => 2022,
                'synopsis' => 'This book tell about how to Constructing A Nervous System.',
                'image' => 'jay',
            ],
            [
                'publisher_id' => 2,
                'title' => 'Sapiens',
                'author' => 'Yuval',
                'year' => 2011,
                'synopsis' => 'Sapiens: A Brief History of Humankind is a book bound to appear on a large number',
                'image' => 'sapiens',
            ],
        ];
        
        DB::table('books')->insert($data);
    }
}
