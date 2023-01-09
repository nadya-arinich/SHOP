<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Мини-сад "Бонсай с Собачкой 2"',
            'description' => 'Фикус Гинсенг во флорариуме все также требует яркого рассеянного освещения и боится сквозняков. Поэтому место, где вы разместите садик – основополагающая часть ухода. Важно, чтобы он стоял достаточно близко к окну, особенно зимой. Летом допускается размещение в метре-двух от окна. Поливайте бонсай по мере просыхания грунта максимально близко к стволу, примерно раз в два-три дня. У бонсаев маленькая корневая система поэтому поглощать воду они будут только в небольшом радиусе от ствола, в то же время вода в грунте без корней имеет свойство закисать. Так что, не стоит увлажнять всю землю во флорариуме. Фикусы Гинсенг относятся к растениям, которые регулярно сменяют листву. Это значит, что на вашем растении будут не только регулярно появляться новые листочки, но и опадать старые. Если они опадут в труднодоступные места, используйте пинцет, чтобы убрать их. Если в квартире слишком сухо, желательно повышать влажность воздуха с помощью увлажнителя, емкости с водой с большой площадью испарения рядом с садом или опрыскивания. ',
            'price' => '175',
            'picture' => 'sad3_0.jpg'
        ]);
        ;
    }
}
