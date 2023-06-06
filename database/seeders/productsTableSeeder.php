<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('products')->insert([
           [
               'cate_id' => '1',
               'name' => 'Samsung Galaxy S22',
               'slug' => 'Samsung_Galaxy_S22',
               'small_description' => 'un écran Full HD+ Dynamic AMOLED 2X de 6,1 pouces avec des cadres incroyablement minces, un taux de rafraîchissement de 120 Hz, un taux d échantillonnage tactile de 240 Hz en mode jeu et une luminosité maximale de 1 300 nits.',
               'description' => 'Le Samsung Galaxy S22 est l un 3 smartphones de la gamme Galaxy S22 annoncé le 9 février 2022. Il est équipé d un SoC Exynos 2200 épaulé par 8 Go de RAM et 128 ou 256 Go de stockage. Il est équipé d un écran AMOLED 120 Hz de 6,1 pouces et d un triple capteur photo polyvalent de 50+10+12 mégapixels. Il dispose également d une batterie de 3700 mAh compatible recharge rapide 25W et recharge sans fil 15W.',
               'original_price' => '490000',
               'selling_price' => '450000',
               'image' => 'galaxy-s22.jpg',
               'qty' => '11',
               'tax' => '0',
               'status' => '0',
               'trending' => '1',
               'meta_title' => 'samsung',
               'meta_keyword' => 'Samsung',
               'meta_description' => 'un écran Full HD+ Dynamic AMOLED 2X de 6,1 pouces avec des cadres incroyablement minces, un taux de rafraîchissement de 120 Hz, un taux d échantillonnage tactile de 240 Hz en mode jeu et une luminosité maximale de 1 300 nits.',
           ],
            [
                'cate_id' => '1',
                'name' => 'IPhone 11',
                'slug' => 'IPhone_11',
                'small_description' => 'Il est équipé d un écran LCD de 6,1 pouces avec une résolution de 1792 x 828 pixels et une densité de pixels de 326 ppp. Le téléphone est alimenté par la puce A13 Bionic, la même que celle utilisée dans l iPhone 11 Pro et l iPhone 11 Pro Max, ce qui en fait un téléphone puissant capable de gérer les tâches les plus exigeantes',
                'description' => 'Le téléphone dispose d un système de caméra arrière à double objectif, composé d un objectif grand angle de 12 mégapixels et d un objectif ultra-grand angle de 12 mégapixels. Il est également équipé d une caméra avant TrueDepth de 12 mégapixels qui prend en charge la fonctionnalité de reconnaissance faciale Face ID. L iPhone 11 est disponible en trois capacités de stockage interne : 64 Go, 128 Go et 256 Go.',
                'original_price' => '390000',
                'selling_price' => '350000',
                'image' => 'iphone-11.jpg',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'apple',
                'meta_keyword' => 'apple',
                'meta_description' => 'Il est équipé d un écran LCD de 6,1 pouces avec une résolution de 1792 x 828 pixels et une densité de pixels de 326 ppp. Le téléphone est alimenté par la puce A13 Bionic, la même que celle utilisée dans l iPhone 11 Pro et l iPhone 11 Pro Max, ce qui en fait un téléphone puissant capable de gérer les tâches les plus exigeantes',
            ],
            [
            'cate_id' => '2',
            'name' => 'MSI Alpha15',
            'slug' => 'MSI_Alpha15',
            'small_description' => 'Le MSI Alpha 15 est un ordinateur portable de jeu puissant équipé d un processeur AMD Ryzen et d une carte graphique AMD Radeon RX 5500M. Il dispose également d un écran de 15,6 pouces avec une fréquence de rafraîchissement de 144 Hz, offrant une expérience de jeu fluide et immersive. Le MSI Alpha 15 est un choix idéal pour les joueurs qui cherchent un ordinateur portable de jeu performant à un prix abordable.',
            'description' => 'Le MSI Alpha 15 est un ordinateur portable de jeu puissant équipé d un processeur AMD Ryzen et d une carte graphique AMD Radeon RX 5500M. Il dispose également d un écran de 15,6 pouces avec une fréquence de rafraîchissement de 144 Hz, offrant une expérience de jeu fluide et immersive. Le MSI Alpha 15 est un choix idéal pour les joueurs qui cherchent un ordinateur portable de jeu performant à un prix abordable.',
            'original_price' => '1390000',
            'selling_price' => '1350000',
            'image' => 'MSI_Alpha15.jpg',
            'qty' => '11',
            'tax' => '0',
            'status' => '0',
            'trending' => '1',
            'meta_title' => 'msi',
            'meta_keyword' => 'msi',
            'meta_description' => 'Le MSI Alpha 15 est un ordinateur portable de jeu puissant équipé d un processeur AMD Ryzen et d une carte graphique AMD Radeon RX 5500M. Il dispose également d un écran de 15,6 pouces avec une fréquence de rafraîchissement de 144 Hz, offrant une expérience de jeu fluide et immersive. Le MSI Alpha 15 est un choix idéal pour les joueurs qui cherchent un ordinateur portable de jeu performant à un prix abordable.',
        ],
        ]);
    }
}
