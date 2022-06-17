<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('abouts')->insert([
           "title" => "HAKKIMIZDA",
            "content" => "SinanSalim Erkek Kuaförü; profesyonellik ve yenilikçiliği kendine ilke edinmiş , kaliteli ve özgün ufka sahip personelle sizlere kendinizi harika hissettirecek saç modelleri sunmaktayız. Erkek kuaför ünitemizde size özel saç tasarımlarının yanı sıra saçınıza dair her türlü bakım, perma, röfle, balyaj defrize, modern ve klasik topuzlar, en güzel günlerinizde sizi herkesden farklı ve özel kılacak saç modelleriyle hizmetinizdeyiz. Kuruluş anımızdan itibaren %100 kalite ilkesini hedefleyen salon anlayışını ve müşteri memnuniyetini baz alarak hizmetlerimize devam etmekteyiz. Salonumuzun dizaynı misafirlerimizin rahatlığı ön planda tutularak dekore edilmiştir. Temizlik ve hijyene gösterdiğimiz özensiz misafirlerimizi kendi evinde gibi hissettirecektir."
        ]);
    }
}
