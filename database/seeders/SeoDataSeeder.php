<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => "/",
                'seo_title' => "Услуги адвоката в Курске",
                'seo_description' => "Юридическая помощь и адвокатские услуги: консультации, защита прав, сопровождение споров. Опыт и профессионализм в решении любых дел.",
                'page_title' => "",
            ],
            [
                'url' => "main",
                'seo_title' => "Услуги адвоката в Курске",
                'seo_description' => "Юридическая помощь и адвокатские услуги: консультации, защита прав, сопровождение споров. Опыт и профессионализм в решении любых дел.",
                'page_title' => "",
            ],
            [
                'url' => "contacts",
                'seo_title' => "Контакты",
                'seo_description' => "Свяжитесь со мной любым удобным способом и мы начнем работу по вашему делу.",
                'page_title' => "",
            ],
        ];

        DB::table("seo_data")->insert($data);
    }
}
