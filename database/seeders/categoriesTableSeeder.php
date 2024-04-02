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
                'description' => 'Nous proposons une sélection de téléphones de qualité supérieure, rigoureusement testés et soumis à des contrôles de qualité stricts. Nous travaillons avec les meilleurs fabricants pour vous offrir des téléphones fiables, performants et durables, dotés des dernières technologies et des fonctionnalités les plus avancées.',
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
                'description' => 'Nos ordinateurs sont soigneusement sélectionnés pour offrir une expérience informatique exceptionnelle. Nous avons des ordinateurs pour tous les besoins, des modèles portables pour une utilisation en déplacement aux ordinateurs de bureau performants pour une utilisation professionnelle ou de jeux.',
                'status' => '0',
                'popular' => '1',
                'image' => 'MSI_Alpha15.jpg',
                'meta_title' => 'Ordinateur',
                'meta_keyword' => 'Ordinateur',
                'meta_descrip' => 'Ordinateur de marque',
            ],
            [
                'name' => 'Casque BLuetooth',
                'slug' => 'Casque_BLuetooth',
                'description' => 'Les casques Bluetooth sont disponibles dans une variété de styles, de tailles et de couleurs pour s adapter à tous les goûts et toutes les préférences.  ',
                'status' => '0',
                'popular' => '0',
                'image' => 'casque.jpg',
                'meta_title' => 'Casque BLuetooth',
                'meta_keyword' => 'Casque_BLuetooth',
                'meta_descrip' => 'Casque BLuetooth',
            ],
            [
                'name' => 'Chargeur',
                'slug' => 'Chargeur',
                'description' => 'Les chargeurs pour laptop/telephone sont des accessoires indispensables pour les personnes qui utilisent régulièrement des appareils électroniques.',
                'status' => '0',
                'popular' => '0',
                'image' => 'chargeur.jpg',
                'meta_title' => 'Chargeur',
                'meta_keyword' => 'Chargeur',
                'meta_descrip' => 'Chargeur de marque',
            ],
            [
                'name' => 'Montre connectée',
                'slug' => 'Montre_connectée',
                'description' => 'Que vous cherchiez une montre pour le fitness, pour les loisirs ou pour le travail, vous pouvez trouver la montre connectée parfaite pour vous',
                'status' => '0',
                'popular' => '0',
                'image' => 'montre.jpg',
                'meta_title' => 'montre',
                'meta_keyword' => 'Montre_connectée',
                'meta_descrip' => 'Montre_connectée de marque',
            ],
            [
                'name' => 'Ecouteur bluetooth',
                'slug' => 'ecouteur_BLuetooth',
                'description' => 'Les écouteurs Bluetooth sont disponibles dans une variété de formes et de tailles, y compris des écouteurs intra-auriculaires, des écouteurs sans fil et des écouteurs à réduction de bruit. Ils sont de plus en plus populaires en raison de leur commodité et de leur qualité sonore améliorée.',
                'status' => '0',
                'popular' => '1',
                'image' => 'ecouteur.jpg',
                'meta_title' => 'ecouteur',
                'meta_keyword' => 'ecouteur',
                'meta_descrip' => 'ecouteur',
            ],
            [
                'name' => 'Pochette de telephone',
                'slug' => 'Pochette_de_telephone',
                'description' => 'Protégez votre téléphone tout en le personnalisant avec une coque de téléphone élégante et fonctionnelle.',
                'status' => '0',
                'popular' => '0',
                'image' => 'coque.jpg',
                'meta_title' => 'Coque_de_telephone',
                'meta_keyword' => 'Coque_de_telephone',
                'meta_descrip' => 'Coque_de_telephone',
            ],
            [
                'name' => 'Stockage',
                'slug' => 'Stockage',
                'description' => 'Protégez vos fichiers importants et transportez-les facilement avec un disque dur ou une clé USB de qualité supérieure.',
                'status' => '0',
                'popular' => '0',
                'image' => 'stockage.jpg',
                'meta_title' => 'Stockage',
                'meta_keyword' => 'Stockage',
                'meta_descrip' => 'Stockage',
            ],
            [
                'name' => 'Tablette',
                'slug' => 'Tablette',
                'description' => 'Découvrez notre sélection de tablettes de haute qualité et trouvez celle qui répond le mieux à vos besoins',
                'status' => '0',
                'popular' => '1',
                'image' => 'tablette.jpg',
                'meta_title' => 'Tablette',
                'meta_keyword' => 'Tablette',
                'meta_descrip' => 'Tablette de marque',
            ],
        ]);
    }
}
