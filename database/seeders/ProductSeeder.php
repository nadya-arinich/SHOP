<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'name' => 'Мини-сад 26 см Е0303',
            'small_description' => 'Мини-сад 26 см Е0303',
            'description' => 'Мини-сад 26 см Е0303',
            'price' => '210',
            'picture' => 'flora/1.jpeg'
        ]);
        DB::table('products')->insert([
            'name' => 'Мини-сад 30 см Е0113',
            'small_description' => 'Мини-сад 30 см Е0113',
            'description' => 'Мини-сад 30 см Е0113',
            'price' => '235',
            'picture' => 'flora/2.jpeg'
        ]);
        DB::table('products')->insert([
            'name' => 'Мини сад с бонсаем во флорариуме',
            'small_description' => 'Мини сад с бонсаем во флорариуме',
            'description' => 'Мини сад с бонсаем во флорариуме',
            'price' => '85',
            'picture' => 'flora/img_0963_1.jpg'
        ]);
        DB::table('products')->insert([
            'name' => 'Мини-сад Е0073 с суккулентами',
            'small_description' => 'Мини-сад Е0073 с суккулентами',
            'description' => 'Мини-сад Е0073 с суккулентами',
            'price' => '85',
            'picture' => 'flora/img_6914.jpg'
        ]);
        DB::table('products')->insert([
            'name' => 'Мини-сад Е0074 с имитацией воды',
            'small_description' => 'Мини-сад Е0074 с имитацией воды',
            'description' => 'Мини-сад Е0074 с имитацией воды',
            'price' => '175',
            'picture' => 'flora/_mg_4656-min_0.jpg'
        ]);
        DB::table('products')->insert([
            'name' => 'Мини-сад Е0070',
            'small_description' => 'Мини-сад Е0070',
            'description' => 'Мини-сад Е0070',
            'price' => '73',
            'picture' => 'flora/img00060.jpg'
        ]);
        




    }
}
