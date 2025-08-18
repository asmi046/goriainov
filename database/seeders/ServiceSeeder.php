<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => "Представительство в арбитражных судах",
                'sub_title' => "Увеличьте шансы на победу!",
                'slug' => Str::slug("Представительство в арбитражных судах"),
            ],

            [
                'title' => "Представительство в банкротстве",
                'sub_title' => "Банкротство — не конец, а инструмент. Используйте его правильно!",
                'slug' => Str::slug("Представительство в банкротстве"),
            ],

            [
                'title' => "Представительство в корпоративных спорах",
                'sub_title' => "Корпоративные конфликты — это война без выстрелов. Доверьте защиту профессионалам!",
                'slug' => Str::slug("Представительство в корпоративных спорах"),
            ],
        ];

        foreach ($data as $item) {
            DB::table("services")->insert($item);

            // DB::table("seo_data")->insert(
            //     [
            //         'url' => 'services/'.$item['slug'],
            //         'seo_title' => $item['title'],
            //         'seo_description' => $item['title'],
            //     ]
            // );
        }
    }
}
