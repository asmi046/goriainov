<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("services/arb.svg", file_get_contents(public_path('tmp_data/service/arb.svg')), 'public');
        Storage::disk('public')->put("services/bankr.svg", file_get_contents(public_path('tmp_data/service/bankr.svg')), 'public');
        Storage::disk('public')->put("services/corp.svg", file_get_contents(public_path('tmp_data/service/corp.svg')), 'public');
        $data = [
            [
                'title' => "Представительство в арбитражных судах",
                'sub_title' => "Увеличьте шансы на победу!",
                'slug' => Str::slug("Представительство в арбитражных судах"),
                'icon' => "services/arb.svg",
            ],

            [
                'title' => "Представительство в банкротстве",
                'sub_title' => "Банкротство — не конец, а инструмент. Используйте его правильно!",
                'slug' => Str::slug("Представительство в банкротстве"),
                'icon' => "services/bankr.svg",
            ],

            [
                'title' => "Представительство в корпоративных спорах",
                'sub_title' => "Корпоративные конфликты — это война без выстрелов. Доверьте защиту профессионалам!",
                'slug' => Str::slug("Представительство в корпоративных спорах"),
                'icon' => "services/corp.svg",
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
