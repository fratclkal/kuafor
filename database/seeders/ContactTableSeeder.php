<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('contacts') -> insert([
           'phone_num' => '0536 051 4948',
           'email' => 'sinansalimkuafor@gmail.com' ,
            'address' => 'Bahçelievler Mahallesi Divan Caddesi No:47/3  BATMAN / MERKEZ'
        ]);

    }
}
