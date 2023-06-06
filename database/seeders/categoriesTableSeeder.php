<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('categories')->insert([
            [
                'name' => 'Telephone',
                'slug' => 'Telephone',
                'description' => 'Telephone de marque',
                'status' => '0',
                'popular' => '1',
                'image' => 'tel.jpg',
                'meta_title' => 'Telephone',
                'meta_keyword' => 'Telephone',
                'meta_descrip' => 'Telephone de marque',
            ],
            [
                'name' => 'Ordinateur',
                'slug' => 'Ordinateur',
                'description' => 'Ordinateur de marque',
                'status' => '0',
                'popular' => '1',
                'image' => 'ordi.jpg',
                'meta_title' => 'Ordinateur',
                'meta_keyword' => 'Ordinateur',
                'meta_descrip' => 'Ordinateur de marque',
            ],
        ]);
    }
}
