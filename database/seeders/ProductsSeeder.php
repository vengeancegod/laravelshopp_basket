<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'LG',
            'description' => 'Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue.',
            'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
            'price' => 39999.00
          ]);
          
        DB::table('products')->insert([
            'name' => 'ASUS ROG Strix XG27UQR',
            'description' => 'Монитор Asus ROG Strix XG27UQR – мощная игровая модель со стильным дизайном прямого 27-дюймового экрана и поворотной подставки. Вы можете наклонять и регулировать высоту монитора, а также работать в портретном режиме.',
            'photo' => 'https://avatars.mds.yandex.net/get-mpic/3916156/img_id8541130423479615331.jpeg/orig',
            'price' => 81000.00
          ]);  

        DB::table('products')->insert([
            'name' => 'Xiaomi Mi Curved Gaming Monitor 34',
            'description' => 'Геймерский монитор с изогнутым 34-дюймовым антибликовым экраном, оптимизированный для мультимедийных развлечений и игр. Матрица VA с разрешающей способностью 3440x1440 пикселей, временем отклика 4 мс и частотой обновления 144 Гц обеспечивает создание детализированного изображения с реалистичной передачей цветовой палитры.',
            'photo' => 'https://avatars.mds.yandex.net/get-mpic/4304254/img_id8195621860356248599.jpeg/orig',
            'price' => 28829.00
          ]);   
        DB::table('products')->insert([
            'name' => 'A4tech Gaming X7-G800V',
            'description' => 'A4Tech X7-G800V — это неприхотливая, надёжная и лёгкая в использовании игровая клавиатура. Эргономичный дизайн удобен для запястий, поскольку позволяет им естественно расположиться на клавиатуре.',
            'photo' => 'https://avatars.mds.yandex.net/get-mpic/1705228/img_id4618446445219549312.png/orig',
            'price' => 4849.00
          ]);    
        DB::table('products')->insert([
            'name' => 'Apple iPhone 14 Pro 128 ГБ',
            'description' => 'iPhone 14 Pro поднимает планку возможностей 48 мегапикселей, обеспечивая в 4 раза большее разрешение в ProRAW для умопомрачительной детализации в каждом кадре. Новая система Pro Camera System добавляет к диапазону зума телеобъектив оптического качества в 2 раза, что обеспечивает большую гибкость при съемке.',
            'photo' => 'https://avatars.mds.yandex.net/get-mpic/1927699/img_id2340870575975482082.jpeg/orig',
            'price' => 104990.00
          ]); 
        DB::table('products')->insert([
            'name' => 'Apple AirPods 2 ',
            'description' => 'AirPods — это сочетание тщательно продуманного дизайна, передовых технологий и кристально чистого звука. Благодаря новому чипу H1 от Apple эти наушники могут работать в режиме телефонного разговора до 3 часов без подзарядки.',
            'photo' => 'https://avatars.mds.yandex.net/get-mpic/4412310/img_id8386850073624085644.png/orig',
            'price' => 13590.00
          ]);         
    }
}
