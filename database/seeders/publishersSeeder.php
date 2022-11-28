<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class publishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('publishers')->delete();

        $data = [
            [
                'name' => 'Zainal M',
                'address' => 'Jl.Baru, Kota Depok, Jawa Barat',
                'phone' => '08123123123',
                'email' => 'zainal@gmail.com',
                'image' => 'publisher1',
            ],
            [
                'name' => 'Indri Cantika',
                'address' => 'Bukit Cimanggu, Kota Bogor, Jawa Barat',
                'phone' => '08221122112',
                'email' => 'indri@gmail.com',
                'image' => 'publisher2',
            ],
        ];
        
        DB::table('publishers')->insert($data);
    }
}
