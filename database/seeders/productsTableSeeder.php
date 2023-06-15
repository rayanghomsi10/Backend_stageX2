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
                'name' => 'Samsung Galaxy S21 FE - 5G - 8/256 Go - Graphite',
                'slug' => 'Galaxy_S21',
                'small_description' => 'Smartphone 6,4" Super AMOLED FHD+ 120Hz - Snapdragon 888 - 5G - RAM 8 Go - 4500 mAh - Charge rapide 25W - 32MP - Android 12
Une expérience épique pour tous les fans : Grand écran fluide 6,4” -120Hz / Des photos lumineuses de jour comme de nuit / Space Zoom x30 Zoom Optique Hybride x3 / Processeur Puissant pour des performances épiques / Batterie 4500 mAh et charge sans fil.
',
                'description' => '
Plus de fluidité et de confort
Ecran 120 Hz Super AMOLED
Navigation toujours plus fluide.
Expérience de jeu ultra-réactive avec un taux d échantillonnage tactile de 240 Hz (en mode jeu)
Un maximum de contenu sur grand écran
Une immersion totale
Ratio d’écran de 19,5:9
Bordures minimaliste

Durabilité
Le verre Gorilla Glass Victus protège l écran contre les chutes accidentelles
Des capteurs photos exceptionnels
Selfie 32MP - f/2,2, FOV 80˚
Ultra Grand Angle 12MP - f/2,2, FOV 123˚
Grand Angle 12MP OIS - Dual Pixel AF, OIS, f/1,8, FOV 79˚
Zoom optique X3 8MP OIS - SpaceZoom 30x , OIS, f/2,4, FOV 32˚
Vivez l’expérience GalaxyS
Le Galaxy S21 FE vous offre la puissance et la vitesse nécessaire pour optimiser vos utilisations grâce au processeur Snapdragon 888.
Batterie longue durée : 4 500 mAh pour vous suivre toute la journée…et toute la nuit.',
                'original_price' => '375000',
                'selling_price' => '357000',
                'image' => 's21fe.jpg',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'samsung',
                'meta_keyword' => 'Samsung',
                'meta_description' => 'Smartphone 6,4" Super AMOLED FHD+ 120Hz - Snapdragon 888 - 5G - RAM 8 Go - 4500 mAh - Charge rapide 25W - 32MP - Android 12
Une expérience épique pour tous les fans : Grand écran fluide 6,4” -120Hz / Des photos lumineuses de jour comme de nuit / Space Zoom x30 Zoom Optique Hybride x3 / Processeur Puissant pour des performances épiques / Batterie 4500 mAh et charge sans fil.
',
            ],
            [
                'cate_id' => '1',
                'name' => 'Samsung Galaxy S23 - 5G - 8/256 Go - Graphite',
                'slug' => 'Galaxy_S23',
                'small_description' => 'Smartphone 6,4" Super AMOLED FHD+ 120Hz - Snapdragon 888 - 5G - RAM 8 Go - 4500 mAh - Charge rapide 25W - 32MP - Android 12
Une expérience épique pour tous les fans : Grand écran fluide 6,4” -120Hz / Des photos lumineuses de jour comme de nuit / Space Zoom x30 Zoom Optique Hybride x3 / Processeur Puissant pour des performances épiques / Batterie 4500 mAh et charge sans fil.
',
                'description' => '
Un écran Infinity-O de 6.1"
Le Samsung Galaxy S23 est équipé d un écran Infinity-O Dynamic AMOLED 2X de 6.1" à résolution Full HD+ 1080 x 2340 pixels, qui sublime la richesse des images tout en vous offrant une immersion spectaculaire. Et avec un taux de rafraichissement adaptatif de 120 Hz, utiliser son smartphone n aura jamais été aussi agréable. Par ailleurs, le S23 intègre un processeur Snapdragon 8 de Gen 2 cadencé à 8 Go de RAM et 128 Go de capacité afin de vous offrir toute la puissance nécessaire pour profiter au mieux de votre smartphone, même les jeux les plus exigeants en ressources graphiques fonctionnent de manière ultra fluide.
Dual SIM et compatible eSIM, le Samsung Galaxy S23 vous permet de gérer efficacement votre vie professionnelle et votre vie personnelle de la meilleure des façons.

Un design novateur et avant-gardiste
Prenez des photos très détaillées grâce au Samsung Galaxy S23 et à son triple capteur photo de 50+12+10 MP. Il intègre notamment un optimiseur de scènes, une reconnaissance automatique de l image et un cadrage professionnel intelligent pour vous proposer le meilleur paramétrage et cadrage pour mettre grandement en valeur vos photos. Quant au mode Nuit avancé, vous pouvez prendre encore plus de photos impressionnantes, même la nuit.
',
                'original_price' => '465000',
                'selling_price' => '441000',
                'image' => 's23.jpeg',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'samsung',
                'meta_keyword' => 'Samsung',
                'meta_description' => '
Un écran Infinity-O de 6.1"
Le Samsung Galaxy S23 est équipé d un écran Infinity-O Dynamic AMOLED 2X de 6.1" à résolution Full HD+ 1080 x 2340 pixels, qui sublime la richesse des images tout en vous offrant une immersion spectaculaire. Et avec un taux de rafraichissement adaptatif de 120 Hz, utiliser son smartphone n aura jamais été aussi agréable. Par ailleurs, le S23 intègre un processeur Snapdragon 8 de Gen 2 cadencé à 8 Go de RAM et 128 Go de capacité afin de vous offrir toute la puissance nécessaire pour profiter au mieux de votre smartphone, même les jeux les plus exigeants en ressources graphiques fonctionnent de manière ultra fluide.
Dual SIM et compatible eSIM, le Samsung Galaxy S23 vous permet de gérer efficacement votre vie professionnelle et votre vie personnelle de la meilleure des façons.

Un design novateur et avant-gardiste
Prenez des photos très détaillées grâce au Samsung Galaxy S23 et à son triple capteur photo de 50+12+10 MP. Il intègre notamment un optimiseur de scènes, une reconnaissance automatique de l image et un cadrage professionnel intelligent pour vous proposer le meilleur paramétrage et cadrage pour mettre grandement en valeur vos photos. Quant au mode Nuit avancé, vous pouvez prendre encore plus de photos impressionnantes, même la nuit.
',
            ],
            [
                'cate_id' => '1',
                'name' => 'Samsung Galaxy S20',
                'slug' => 'Samsung_Galaxy_S20',
                'small_description' => 'Le Samsung Galaxy S20 FE 5G est un smartphone annoncé le 23 septembre 2020, est un telephone qui s adaptera a tous vos problemes',
                'description' => 'Le Samsung Galaxy S20 FE 5G est un smartphone annoncé le 23 septembre 2020. Il est équipé d une fiche technique similaire à celle du Galaxy S20 5G, avec une solution photo différente (12+8+12 mégapixels) et un écran Full HD+ plat similaire à celui du Galaxy Note 20. Il est disponible en différents coloris à un prix inférieur au S20 5G classique.',
                'original_price' => '390000',
                'selling_price' => '350000',
                'image' => 'galaxy-s20.jpg',
                'qty' => '21',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'samsung',
                'meta_keyword' => 'samsung',
                'meta_description' => 'Le Samsung Galaxy S20 FE 5G est un smartphone annoncé le 23 septembre 2020. Il est équipé d une fiche technique similaire à celle du Galaxy S20 5G, avec une solution photo différente (12+8+12 mégapixels) et un écran Full HD+ plat similaire à celui du Galaxy Note 20. Il est disponible en différents coloris à un prix inférieur au S20 5G classique.',
            ],
            [
                'cate_id' => '1',
                'name' => 'IPhone 11',
                'slug' => 'IPhone_11',
                'small_description' => 'Il est équipé d un écran LCD de 6,1 pouces avec une résolution de 1792 x 828 pixels et une densité de pixels de 326 ppp. Le téléphone est alimenté par la puce A13 Bionic, la même que celle utilisée dans l iPhone 11 Pro et l iPhone 11 Pro Max, ce qui en fait un téléphone puissant capable de gérer les tâches les plus exigeantes',
                'description' => 'Le téléphone dispose d un système de caméra arrière à double objectif, composé d un objectif grand angle de 12 mégapixels et d un objectif ultra-grand angle de 12 mégapixels. Il est également équipé d une caméra avant TrueDepth de 12 mégapixels qui prend en charge la fonctionnalité de reconnaissance faciale Face ID. L iPhone 11 est disponible en trois capacités de stockage interne : 64 Go, 128 Go et 256 Go.',
                'original_price' => '290000',
                'selling_price' => '250000',
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
            'small_description' => 'Le MSI Alpha 15 est un ordinateur portable de jeu puissant équipé d un processeur AMD Ryzen et d une carte graphique AMD Radeon RX 5500M. Il dispose également d un écran de 15,6 pouces avec une fréquence de rafraîchissement de 144 Hz, offrant une expérience de jeu fluide et immersive.',
            'description' => 'Processeur : AMD Ryzen 7 3750H
Carte graphique : AMD Radeon RX 5500M avec 4 Go de mémoire GDDR6
Écran : 15,6 pouces Full HD (1920 x 1080) IPS avec un taux de rafraîchissement de 144 Hz
Mémoire vive : 8 Go DDR4 (extensible jusqu à 64 Go)
Stockage : SSD NVMe de 512 Go
Clavier : Rétroéclairé RGB
Connectivité : Wi-Fi 5, Bluetooth 5.0, Ethernet Gigabit, USB Type-C, HDMI, mini DisplayPort
Système d exploitation : Windows 10 Home',
            'original_price' => '1390000',
            'selling_price' => '1350000',
            'image' => 'MSI_Alpha15-transformed.png',
            'qty' => '11',
            'tax' => '0',
            'status' => '0',
            'trending' => '1',
            'meta_title' => 'msi',
            'meta_keyword' => 'msi',
            'meta_description' => 'Le MSI Alpha 15 est un ordinateur portable de jeu puissant équipé d un processeur AMD Ryzen et d une carte graphique AMD Radeon RX 5500M. Il dispose également d un écran de 15,6 pouces avec une fréquence de rafraîchissement de 144 Hz, offrant une expérience de jeu fluide et immersive. Le MSI Alpha 15 est un choix idéal pour les joueurs qui cherchent un ordinateur portable de jeu performant à un prix abordable.',
        ],
            [
                'cate_id' => '2',
                'name' => 'MSI GP66 Leopard',
                'slug' => 'MSI_GP66_Leopard',
                'small_description' => 'Le MSI GP66 Vector est un ordinateur portable haut de gamme avec des performances de pointe, un écran Full HD de 15,6 pouces à taux de rafraîchissement élevé et un clavier rétroéclairé RGB. Il est conçu pour les joueurs et les professionnels de la création de contenu qui recherchent un appareil puissant et polyvalent.',
                'description' => '
Processeur : Intel Core i7-11800H de 11ème génération
Carte graphique : NVIDIA GeForce RTX 3070 avec 8 Go de mémoire GDDR6
Écran : 15,6 pouces Full HD (1920 x 1080) IPS avec un taux de rafraîchissement de 144 Hz
Mémoire vive : 16 Go DDR4 (extensible jusqu à 64 Go)
Stockage : SSD NVMe de 512 Go
Clavier : Rétroéclairé RGB
Connectivité : Wi-Fi 6E, Bluetooth 5.2, Ethernet Gigabit, Thunderbolt 4, USB Type-C, HDMI, mini DisplayPort
Système d
exploitation : Windows 10 Home',
                'original_price' => '1300000',
                'selling_price' => '950000',
                'image' => 'MSI GP66 Leopard.jpg',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'msi',
                'meta_keyword' => 'msi',
                'meta_description' => 'Le MSI GP66 Vector est un ordinateur portable gaming haut de gamme, offrant des performances exceptionnelles grâce à son processeur Intel Core i7 de 11ème génération et sa carte graphique NVIDIA GeForce RTX 3070. Avec son écran Full HD de 15,6 pouces à taux de rafraîchissement de 144 Hz et son clavier rétroéclairé RGB, il est idéal pour les joueurs exigeants qui cherchent une expérience de jeu immersive et fluide. Sa conception robuste et ses nombreuses fonctionnalités en font également un choix populaire parmi les professionnels de la création de contenu.',
            ],
            [
                'cate_id' => '2',
                'name' => 'Asus ROG Strix Scar II',
                'slug' => 'Asus_ROG_Strix_Scar_II',
                'small_description' => 'L Asus ROG Strix Scar II est un ordinateur portable gaming de haute performance, avec un écran Full HD de 15,6 pouces à taux de rafraîchissement élevé et un clavier rétroéclairé RGB. Il est conçu pour offrir une expérience de jeu immersive et fluide aux joueurs exigeants.',
                'description' => 'Processeur : Intel Core i7-8750H de 8ème génération
Carte graphique : NVIDIA GeForce RTX 2070 avec 8 Go de mémoire GDDR6
Écran : 15,6 pouces Full HD (1920 x 1080) IPS avec un taux de rafraîchissement de 144 Hz
Mémoire vive : 16 Go DDR4 (extensible jusqu à 32 Go)
Stockage : SSD NVMe de 512 Go
Clavier : Rétroéclairé RGB
Connectivité : Wi-Fi 5, Bluetooth 5.0, Ethernet Gigabit, USB Type-C, HDMI, mini DisplayPort
Système d exploitation : Windows 10 Home',
                'original_price' => '1200000',
                'selling_price' => '900000',
                'image' => 'Asus ROG Strix Scar II.jpg',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'msi',
                'meta_keyword' => 'msi',
                'meta_description' => 'Le MSI GP66 Vector est un ordinateur portable gaming haut de gamme, offrant des performances exceptionnelles grâce à son processeur Intel Core i7 de 11ème génération et sa carte graphique NVIDIA GeForce RTX 3070. Avec son écran Full HD de 15,6 pouces à taux de rafraîchissement de 144 Hz et son clavier rétroéclairé RGB, il est idéal pour les joueurs exigeants qui cherchent une expérience de jeu immersive et fluide. Sa conception robuste et ses nombreuses fonctionnalités en font également un choix populaire parmi les professionnels de la création de contenu.',
            ],
            [
                'cate_id' => '2',
                'name' => 'MSI Gp62 7rex Leopard',
                'slug' => 'MSI_Gp62_7rex_Leopard',
                'small_description' => 'Le MSI GP62 7REX Leopard est un choix solide pour les joueurs à la recherche d un ordinateur portable de jeu abordable. Il est équipé d un processeur Intel Core i7-7700HQ et d une carte graphique NVIDIA GeForce GTX 1050 Ti pour des performances de jeu décentes. L écran Full HD avec un taux de rafraîchissement de 60 Hz offre également une expérience de jeu agréable.
                ',
                'description' => 'Processeur : Intel Core i7-7700HQ de 7ème génération
Carte graphique : NVIDIA GeForce GTX 1050 Ti avec 4 Go de mémoire GDDR5
Écran : 15,6 pouces Full HD (1920 x 1080) IPS avec un taux de rafraîchissement de 60 Hz
Mémoire vive : 8 Go DDR4 (extensible jusqu à 32 Go)
Stockage : SSD de 128 Go + disque dur de 1 To à 7200 tr/min
Clavier : Rétroéclairé rouge
Connectivité : Wi-Fi 5, Bluetooth 4.2, Ethernet Gigabit, USB Type-C, HDMI, mini DisplayPort
Système d exploitation : Windows 10 Home',
                'original_price' => '1200000',
                'selling_price' => '900000',
                'image' => 'MSI Gp62 7rex Leopard.jpg',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'msi',
                'meta_keyword' => 'msi',
                'meta_description' => 'Le MSI GP62 7REX Leopard est un choix solide pour les joueurs à la recherche d un ordinateur portable de jeu abordable. Il est équipé d un processeur Intel Core i7-7700HQ et d une carte graphique NVIDIA GeForce GTX 1050 Ti pour des performances de jeu décentes. L écran Full HD avec un taux de rafraîchissement de 60 Hz offre également une expérience de jeu agréable.
                ',
            ],
            [
                'cate_id' => '2',
                'name' => 'HP pavillon gaming17',
                'slug' => 'HP_pavillon_gaming17',
                'small_description' => 'Le HP Pavilion Gaming 17 est un choix solide pour les joueurs à la recherche d un ordinateur portable de jeu abordable avec un grand écran. Il est équipé d un processeur Intel Core i5-9300H et d une carte graphique NVIDIA GeForce GTX 1050 pour des performances de jeu décentes.
                 ',
                'description' => 'Processeur : Intel Core i5-9300H de 9ème génération
Carte graphique : NVIDIA GeForce GTX 1050 avec 3 Go de mémoire GDDR5
Écran : 17,3 pouces Full HD (1920 x 1080) IPS avec un taux de rafraîchissement de 60 Hz
Mémoire vive : 8 Go DDR4 (extensible jusqu à 16 Go)
Stockage : SSD de 512 Go
Clavier : Rétroéclairé rouge
Connectivité : Wi-Fi 5, Bluetooth 5.0, Ethernet Gigabit, USB Type-C, HDMI, mini DisplayPort
Système d exploitation : Windows 10 Home',
                'original_price' => '700000',
                'selling_price' => '630000',
                'image' => 'HP pavillon gaming17.jpg',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'msi',
                'meta_keyword' => 'msi',
                'meta_description' => 'Le HP Pavilion Gaming 17 est un choix solide pour les joueurs à la recherche d un ordinateur portable de jeu abordable avec un grand écran. Il est équipé d un processeur Intel Core i5-9300H et d une carte graphique NVIDIA GeForce GTX 1050 pour des performances de jeu décentes.
                 ',
            ],
            [
                'cate_id' => '2',
                'name' => 'Dell G7',
                'slug' => 'Dell_G7',
                'small_description' => 'Le Dell G7 est conçu pour offrir des performances de jeu exceptionnelles et une expérience utilisateur fluide grâce à ses composants haut de gamme et à son écran haute résolution avec un taux de rafraîchissement élevé. Il est équipé d un processeur Intel Core i7-9750H et d une carte graphique NVIDIA GeForce RTX 2060 Max-Q pour des performances graphiques impressionnantes. L écran Full HD avec un taux de rafraîchissement de 144 Hz offre également une expérience de jeu fluide et agréable.
                ',
                'description' => 'Processeur : Intel Core i7-9750H de 9ème génération
Carte graphique : NVIDIA GeForce RTX 2060 Max-Q avec 6 Go de mémoire GDDR6
Écran : 15,6 pouces Full HD (1920 x 1080) IPS avec un taux de rafraîchissement de 144 Hz
Mémoire vive : 16 Go DDR4 (extensible jusqu à 32 Go)
Stockage : SSD NVMe de 512 Go
Clavier : Rétroéclairé RGB
Connectivité : Wi-Fi 6, Bluetooth 5.0, Ethernet Gigabit, Thunderbolt 3, USB Type-C, HDMI, mini DisplayPort
Système d exploitation : Windows 10 Home',
                'original_price' => '700000',
                'selling_price' => '630000',
                'image' => 'Dell G7.jpg',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'msi',
                'meta_keyword' => 'msi',
                'meta_description' => 'Le Dell G7 est conçu pour offrir des performances de jeu exceptionnelles et une expérience utilisateur fluide grâce à ses composants haut de gamme et à son écran haute résolution avec un taux de rafraîchissement élevé. Il est équipé d un processeur Intel Core i7-9750H et d une carte graphique NVIDIA GeForce RTX 2060 Max-Q pour des performances graphiques impressionnantes. L écran Full HD avec un taux de rafraîchissement de 144 Hz offre également une expérience de jeu fluide et agréable.
                ',
            ],
            [
                'cate_id' => '2',
                'name' => 'Asus-ROG STRIX G17',
                'slug' => 'Asus_ROG_STRIX_G17',
                'small_description' => '17,3 pouce LCD-IPS (Anti-Reflets) Full HD 144Hz - AMD Ryzen 7 4800H - NVIDIA GeForce RTX 3060 Max-P 6Go GDR6 - 16 Go (2 x 8 Go) DDR4 3200Mhz - SSD M.2 512 Go PCIe Gen 3.0 - Sans Système D Exploitation',
                'description' => 'Écran : 17,3 pouces Full HD (1920 x 1080) 144Hz LCD - IPS (Anti-Reflets)
Puce graphique : NVIDIA GeForce RTX 3060 Max-P (130W) 6 Go GDDR6
Processeur : AMD Ryzen™ 7 4800H 2.9 GHz de base (12M Cache, jusqu à 4,2 GHz, 8 cœurs / 16 threads)
Mémoire vive : 16 Go DDR4 3200 MHz (2 x 8 Go), extensible jusqu à 32 Go max.
Châssis : Aluminium (Le châssis est robuste et résistant pour supporter les exigences de performances des jeux vidéo et de tâches intensives, en ce qui concerne le matériau, il est en aluminium et est souvent utilisé pour sa légèreté et sa résistance à la corrosion.)
Stockage : 1 x SSD de 512 Go PCIe Gen 3.0 4x NVMe M.2
Batterie : Batterie Li-Polymère 4 cellules de 76 Whrs
WI-FI/Bluetooth : Wi-Fi 6 (802.11ax) + Bluetooth 5.1 (double bande) 2x2; (*La version de Bluetooth peut changer en fonction des mises à jour de votre système d exploitation.) -RangeBoost
Haut-parleurs : Haut-parleurs stéréo 2 x 2 W, Smart AMP, Technologie audio ASUS Sonic Studio 4 et DTS: X Ultra.',
                'original_price' => '700000',
                'selling_price' => '630000',
                'image' => 'Asus-ROG STRIX G17.jpeg',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'msi',
                'meta_keyword' => 'msi',
                'meta_description' => '17,3 pouce LCD-IPS (Anti-Reflets) Full HD 144Hz - AMD Ryzen 7 4800H - NVIDIA GeForce RTX 3060 Max-P 6Go GDR6 - 16 Go (2 x 8 Go) DDR4 3200Mhz - SSD M.2 512 Go PCIe Gen 3.0 - Sans Système D Exploitation
                ',
            ],
            [
                'cate_id' => '2',
                'name' => 'HP Victus',
                'slug' => 'HP Victus',
                'small_description' => '16,1" Full HD 144Hz - NVIDIA GeForce RTX 3060 - AMD Ryzen 5 5600H - SSD 512 Go - RAM 16 Go - Windows 11
                ',
                'description' => 'Écran : 16.1" (40.9 cm) diagonal, IPS, micro-bords, antireflet, 250 nits, 45 % NTSC
Fréquence de Rafraîchissement : 144Hz
Luminosité : 250 cd/m²
Résolution : Full HD 1920 x 1080 Pixels
Système D exploitation : Windows 11 Famille
Chipset : AMD
Processeur : AMD Ryzen™ 5 5600H (jusqu’à 4,2 GHz de fréquence Boost maximale, mémoire cache L3 16 Mo , 6 cœurs, 12 threads)
Carte Graphique : NVIDIA® GeForce RTX™ 3060 Ordinateur portable GPU (6 Go de mémoire GDDR6 dédiée)
Stockage : SSD 512 GB PCIe® NVMe&trade TLC M.2
Mémoire Vive :16 Go de mémoire RAM DDR4-3200 MHz (2 x 8 Go)
Norme Réseau Sans Fil Wi-FI : Carte Realtek Wi-Fi 6 (2x2)
Interface réseau : LAN GbE 10/100/1000 intégré
Norme Bluetooth : Bluetooth® 5.2 (prise en charge de débits de données en gigabits)
Webcam : Caméra HP Wide Vision HD 720p
Haut-Parleurs : Système audio par B&O; Doubles haut-parleurs; HP Audio Boost
Type d alimentation : Adaptateur secteur intelligent 200 W
Type de batterie : Li-ion polymère 4 cellules de 70 W/h
Autonomie de la batterie utilisation mixte : Jusqu à 8 heures et 45 minutes
Lecture vidéo Autonomie de la batterie : Jusqu à 8 heures et 45 minutes
Clavier : Argent mica, rétroéclairé, de grande taille avec pavé numérique
Logements d extension : 1 lecteur de cartes multimédias SD multiformat
Dimensions (L x P x H) : 37 x 26 x 2,35 cm
Poids : 2,48 kilogrammes
Composants : Plastique
Couleurs : Blanc
Garantie : Garantie 2 ans',
                'original_price' => '786000',
                'selling_price' => '590000',
                'image' => 'HP Victus.png',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'msi',
                'meta_keyword' => 'msi',
                'meta_description' => '17,3 pouce LCD-IPS (Anti-Reflets) Full HD 144Hz - AMD Ryzen 7 4800H - NVIDIA GeForce RTX 3060 Max-P 6Go GDR6 - 16 Go (2 x 8 Go) DDR4 3200Mhz - SSD M.2 512 Go PCIe Gen 3.0 - Sans Système D Exploitation
                ',
            ],
            [
                'cate_id' => '2',
                'name' => 'asus tuf gaming a17',
                'slug' => 'asus_tuf_gaming_a15',
                'small_description' => '15.6" Dalle IPS FHD 144 Hz - NVIDIA GeForce RTX 3050 Ti - Intel Core i5-11400H - SSD M.2 512 GO - 16 GO DDR4 3200Mhz - Windows 11 Famille
                ',
                'description' => 'Écran : 16.1" (40.9 cm) diagonal, IPS, micro-bords, antireflet, 250 nits, 45 % NTSC
Fréquence de Rafraîchissement : 144Hz
Luminosité : 250 cd/m²
Résolution : Full HD 1920 x 1080 Pixels
Système D exploitation : Windows 11 Famille
Chipset : AMD
Processeur : AMD Ryzen™ 5 5600H (jusqu’à 4,2 GHz de fréquence Boost maximale, mémoire cache L3 16 Mo , 6 cœurs, 12 threads)
Carte Graphique : NVIDIA® GeForce RTX™ 3060 Ordinateur portable GPU (6 Go de mémoire GDDR6 dédiée)
Stockage : SSD 512 GB PCIe® NVMe&trade TLC M.2
Mémoire Vive :16 Go de mémoire RAM DDR4-3200 MHz (2 x 8 Go)
Norme Réseau Sans Fil Wi-FI : Carte Realtek Wi-Fi 6 (2x2)
Interface réseau : LAN GbE 10/100/1000 intégré
Norme Bluetooth : Bluetooth® 5.2 (prise en charge de débits de données en gigabits)
Webcam : Caméra HP Wide Vision HD 720p
Haut-Parleurs : Système audio par B&O; Doubles haut-parleurs; HP Audio Boost
Type d alimentation : Adaptateur secteur intelligent 200 W
Type de batterie : Li-ion polymère 4 cellules de 70 W/h
',
                'original_price' => '786000',
                'selling_price' => '590000',
                'image' => 'asus_tuf_gaming_a17.png',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'msi',
                'meta_keyword' => 'msi',
                'meta_description' => '15.6" Dalle IPS FHD 144 Hz - NVIDIA GeForce RTX 3050 Ti - Intel Core i5-11400H - SSD M.2 512 GO - 16 GO DDR4 3200Mhz - Windows 11 Famille
                ',
            ],
            [
                'cate_id' => '2',
                'name' => 'asus tuf gaming a15',
                'slug' => 'asus_tuf_gaming_a15',
                'small_description' => '17.3" Dalle IPS FHD 144Hz - NVIDIA GeForce RTX 3070 Max-P TGP 140w 8Go GDDR6 - Intel Core i7-12700H - SSD M.2 PCIe 3.0 512 GO - 16 GO DDR5 4800Mhz - Sans Système D Exploitation
                ',
                'description' => 'Écran : 17.3" pouces LCD - IPS (Anti-Reflets) 144Hz

Résolution : Full HD 1920 x 1080P (16/9)

Sans Système D exploitation

Processeur : Intel Core I7-12700H (3.5Ghz/4.7Ghz)

Carte Graphique : NVIDIA GeForce RTX 3070 Max-P 8Go GDDR6 (1460Mhz/140W)

Mémoire Vive : 16 Go (2 x 8Go) DDR5 4800Mhz

Stockage : 512 Go SSD M.2 PCIe 4.0

Clavier : Rétroéclairé / Touchpad / Pavé Numérique

Audio : Haut-Parleurs Stéréo / Dolby Atmos / Hi-Res Audio

Norme WI-FI : 802.11AX (WIFI 6)

Norme Bluetooth : 5.2',
                'original_price' => '1100000',
                'selling_price' => '910000',
                'image' => 'asus_tuf_gaming_a15.png',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'msi',
                'meta_keyword' => 'msi',
                'meta_description' => '17.3" Dalle IPS FHD 144Hz - NVIDIA GeForce RTX 3070 Max-P TGP 140w 8Go GDDR6 - Intel Core i7-12700H - SSD M.2 PCIe 3.0 512 GO - 16 GO DDR5 4800Mhz - Sans Système D Exploitation
                ',
            ],
            [
                'cate_id' => '3',
                'name' => 'P9',
                'slug' => 'P9',
                'small_description' => 'Dernier casque Bluetooth sans fil P9  2023 ,version Bluetooth: 5.0 /5.1',
                'description' => 'Dernier casque Bluetooth sans fil P9  2023 caractéristique, version Bluetooth: 5.0 /5.1, Compatible avec les téléphones mobiles iphone et android. IPX4, casque Bluetooth de sport HiFi, La connexion Bluetooth est super stable, La musique montée sur la tête est meilleure ',
                'original_price' => '25000',
                'selling_price' => '20000',
                'image' => 'casque 20k.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'P9',
                'meta_keyword' => 'P9',
                'meta_description' => 'Dernier casque Bluetooth sans fil P9  2023 ,version Bluetooth: 5.0 /5.1',
            ],
            [
                'cate_id' => '3',
                'name' => 'RT-6',
                'slug' => 'RT-6',
                'small_description' => 'Dernier casque Bluetooth sans fil P9  2023 ,version Bluetooth: 5.0 /5.1',
                'description' => 'Le casque proposé sur le site de e-commerce est un accessoire audio d entrée de gamme, offrant une qualité sonore et un confort de port basiques pour un prix abordable. Avec ses haut-parleurs de petite taille et ses coussinets d oreille en mousse, ce casque est idéal pour les utilisateurs qui cherchent une solution audio simple et peu coûteuse.',
                'original_price' => '8000',
                'selling_price' => '5000',
                'image' => 'casque 5k (2).jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'RT-6',
                'meta_keyword' => 'RT-6',
                'meta_description' => 'Dernier casque Bluetooth sans fil P9  2023 ,version Bluetooth: 5.0 /5.1',
            ],
            [
                'cate_id' => '3',
                'name' => 'Gt45',
                'slug' => 'Gt45',
                'small_description' => 'Dernier casque Bluetooth sans fil P9  2023 ,version Bluetooth: 5.0 /5.1',
                'description' => 'Le casque avec oreilles de chat proposé sur le site de e-commerce est un accessoire audio original et ludique, offrant une qualité sonore correcte et un confort satisfaisant pour une utilisation quotidienne. Son design amusant en fait également un produit tendance et idéal pour les amoureux des chats.',
                'original_price' => '15000',
                'selling_price' => '10000',
                'image' => 'casque_chat.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'Gt45',
                'meta_keyword' => 'Gt45',
                'meta_description' => 'Dernier casque Bluetooth sans fil P9  2023 ,version Bluetooth: 5.0 /5.1',
            ],
            [
                'cate_id' => '5',
                'name' => 'Apple watch s6 steel',
                'slug' => 'apple_watch-s6_steel',
                'small_description' => 'L Apple Watch Series 6 en acier est une montre connectée haut de gamme avec un design élégant et une construction en acier inoxydable durable. Elle est équipée d un écran Retina always-on et d un capteur de fréquence cardiaque, idéale pour les utilisateurs exigeants.',
                'description' => 'L Apple Watch Series 6 en acier est une montre connectée haut de gamme offrant un design élégant et une construction en acier inoxydable durable. Elle est équipée d un écran Retina always-on, d un capteur de fréquence cardiaque, d un GPS intégré et d une autonomie de batterie allant jusqu à 18 heures. Avec sa connectivité cellulaire en option et ses nombreuses fonctionnalités de santé et de fitness, cette montre est idéale pour les utilisateurs exigeants qui cherchent un produit haut de gamme.',
                'original_price' => '48000',
                'selling_price' => '40000',
                'image' => 'apple-watch-s6-steel.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'applewatch',
                'meta_keyword' => 'applewatch',
                'meta_description' => 'L Apple Watch Series 6 en acier est une montre connectée haut de gamme avec un design élégant et une construction en acier inoxydable durable. Elle est équipée d un écran Retina always-on et d un capteur de fréquence cardiaque, idéale pour les utilisateurs exigeants.',
            ],
            [
                'cate_id' => '5',
                'name' => 'Apple watch se',
                'slug' => 'apple_watch_se',
                'small_description' => 'L Apple Watch SE est une montre connectée de milieu de gamme avec des fonctionnalités avancées telles que le suivi de la condition physique et la connectivité GPS. Elle est équipée d un écran Retina toujours allumé et est idéale pour les utilisateurs qui cherchent un produit de qualité à un prix abordable.',
                'description' => 'L Apple Watch SE est une montre connectée de milieu de gamme avec des fonctionnalités avancées telles que le suivi de la condition physique et la connectivité GPS. Elle est équipée d un écran Retina toujours allumé et est idéale pour les utilisateurs qui cherchent un produit de qualité à un prix abordable.',
                'original_price' => '38000',
                'selling_price' => '30000',
                'image' => 'apple-watch-se.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'applewatch',
                'meta_keyword' => 'applewatch',
                'meta_description' => 'L Apple Watch Series 6 en acier est une montre connectée haut de gamme avec un design élégant et une construction en acier inoxydable durable. Elle est équipée d un écran Retina always-on et d un capteur de fréquence cardiaque, idéale pour les utilisateurs exigeants.',
            ],
            [
                'cate_id' => '5',
                'name' => 'Samsung galaxy watch5pro',
                'slug' => 'samsung_galaxy_watch5pro',
                'small_description' => 'La Samsung Galaxy Watch3 est une smartwatch haut de gamme avec un écran AMOLED circulaire, des fonctionnalités de suivi de la condition physique, de messagerie et d intégration de smartphone, ainsi qu une autonomie de la batterie pouvant durer jusqu à deux jours.',
                'description' => 'La Samsung Galaxy Watch3 est une smartwatch haut de gamme qui offre une gamme de fonctionnalités pour le suivi de la condition physique, la messagerie et l intégration de smartphone. Elle dispose d un écran AMOLED circulaire avec une lunette rotative pour la navigation et est disponible en deux tailles (41mm et 45mm) et en divers finitions. La montre peut surveiller la fréquence cardiaque, les niveaux d oxygène dans le sang et le sommeil, et offre une gamme de modes de suivi d entraînement. Elle dispose également de Samsung Pay, d assistants vocaux et d une connectivité LTE (sur certains modèles). L autonomie de la batterie peut durer jusqu à deux jours, selon l utilisation.',
                'original_price' => '37000',
                'selling_price' => '30000',
                'image' => 'samsung-galaxy-watch5pro.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'samsungwatch',
                'meta_keyword' => 'samsungwatch',
                'meta_description' => 'La Samsung Galaxy Watch3 est une smartwatch haut de gamme avec un écran AMOLED circulaire, des fonctionnalités de suivi de la condition physique, de messagerie et d intégration de smartphone, ainsi qu une autonomie de la batterie pouvant durer jusqu à deux jours.',
            ],
            [
                'cate_id' => '6',
                'name' => 'Bud2pro',
                'slug' => 'bud2pro',
                'small_description' => 'la deuxième génération d écouteurs sans fil d Apple, offrant une qualité sonore améliorée, une connexion Bluetooth 5.0 plus rapide et une autonomie de batterie allant jusqu à 5 heures. Ils sont équipés de la commande vocale Siri et sont résistants à l eau et à la transpiration, ce qui les rend idéaux pour une utilisation lors de séances d entraînement.',
                'description' => 'la deuxième génération d écouteurs sans fil d Apple, offrant une qualité sonore améliorée et une connexion Bluetooth 5.0 plus rapide et plus stable. Les AirPods 2 sont équipés de la commande vocale Siri, et offrent une autonomie de batterie allant jusqu à 5 heures d écoute et jusqu à 24 heures avec l étui de charge. Ils sont également résistants à l eau et à la transpiration, ce qui les rend idéaux pour une utilisation lors de séances d entraînement.',
                'original_price' => '15000',
                'selling_price' => '10000',
                'image' => 'bud2pro.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'airpod',
                'meta_keyword' => 'airpod',
                'meta_description' => 'la deuxième génération d écouteurs sans fil d Apple, offrant une qualité sonore améliorée, une connexion Bluetooth 5.0 plus rapide et une autonomie de batterie allant jusqu à 5 heures. Ils sont équipés de la commande vocale Siri et sont résistants à l eau et à la transpiration, ce qui les rend idéaux pour une utilisation lors de séances d entraînement.',
            ],
            [
                'cate_id' => '6',
                'name' => 'Airspods',
                'slug' => 'airspods',
                'small_description' => 'Les AirPods Pro sont des écouteurs sans fil haut de gamme avec une qualité sonore exceptionnelle, une réduction active du bruit et une autonomie de batterie allant jusqu à 4,5 heures. Ils sont résistants à l eau et à la transpiration et disposent de la technologie de transparence pour rester conscient de l environnement extérieur.',
                'description' => 'Les AirPods Pro sont des écouteurs sans fil haut de gamme qui offrent une qualité sonore exceptionnelle et une réduction active du bruit pour une expérience d écoute immersive. Ils sont dotés de la technologie de transparence pour permettre de rester conscient de l environnement extérieur, et sont résistants à l eau et à la transpiration. Avec une autonomie de batterie allant jusqu à 4,5 heures, et jusqu à 24 heures avec l étui de charge, les AirPods Pro sont un excellent choix pour les utilisateurs exigeants.',
                'original_price' => '20000',
                'selling_price' => '15000',
                'image' => 'airspods.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'airpod',
                'meta_keyword' => 'airpod',
                'meta_description' => 'Les AirPods Pro sont des écouteurs sans fil haut de gamme avec une qualité sonore exceptionnelle, une réduction active du bruit et une autonomie de batterie allant jusqu à 4,5 heures. Ils sont résistants à l eau et à la transpiration et disposent de la technologie de transparence pour rester conscient de l environnement extérieur.',
            ],
            [
                'cate_id' => '6',
                'name' => 'Black_buds live',
                'slug' => 'black_buds_live',
                'small_description' => 'des écouteurs sans fil haut de gamme conçus pour offrir une expérience d écoute supérieure avec une qualité sonore exceptionnelle, une réduction active du bruit et une autonomie de batterie allant jusqu à 20 heures. Ils sont dotés de coussinets d oreille doux et confortables et d un bandeau en maille respirant pour un port prolongé.',
                'description' => 'des écouteurs sans fil haut de gamme conçus pour offrir une expérience d écoute supérieure avec une qualité sonore exceptionnelle et une réduction active du bruit. Ils sont dotés de coussinets d oreille doux et confortables, et d un bandeau en maille respirant pour un port prolongé. Les AirPods Max offrent une autonomie de batterie allant jusqu à 20 heures, et sont disponibles en plusieurs couleurs élégantes.',
                'original_price' => '10000',
                'selling_price' => '8000',
                'image' => 'bud2pro.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'airpod',
                'meta_keyword' => 'airpod',
                'meta_description' => 'des écouteurs sans fil haut de gamme conçus pour offrir une expérience d écoute supérieure avec une qualité sonore exceptionnelle, une réduction active du bruit et une autonomie de batterie allant jusqu à 20 heures. Ils sont dotés de coussinets d oreille doux et confortables et d un bandeau en maille respirant pour un port prolongé.',
            ],
            [
                'cate_id' => '7',
                'name' => 'Iphone 11 pochette',
                'slug' => 'Iphone_11_pochette',
                'small_description' => 'Protégez votre iPhone 11 avec style grâce à cette pochette blanche élégante et pratique. Fabriquée à partir de matériaux de qualité supérieure, comme le silicone doux et résistant, cette pochette est conçue pour protéger votre téléphone des rayures, des chutes et des dommages causés par l usure quotidienne.',
                'description' => 'La texture douce et agréable au toucher de cette pochette offre une prise en main confortable et sécurisée, tandis que sa conception permet un accès facile à tous les ports et boutons de votre iPhone 11, ainsi qu à la caméra et au flash.
 En plus de protéger votre téléphone, cette pochette blanche ajoute une touche de style et de personnalité à votre iPhone 11. Elle est un accessoire de mode tendance qui complète le design élégant de votre téléphone, tout en le protégeant efficacement.',
                'original_price' => '4000',
                'selling_price' => '3500',
                'image' => 'pochette 11.webp',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'pochette',
                'meta_keyword' => 'pochette',
                'meta_description' => 'La texture douce et agréable au toucher de cette pochette offre une prise en main confortable et sécurisée, tandis que sa conception permet un accès facile à tous les ports et boutons de votre iPhone 11, ainsi qu à la caméra et au flash.

    En plus de protéger votre téléphone, cette pochette blanche ajoute une touche de style et de personnalité à votre iPhone 11. Elle est un accessoire de mode tendance qui complète le design élégant de votre téléphone, tout en le protégeant efficacement.',
            ],
            [
                'cate_id' => '7',
                'name' => 'Iphone 12 pochette',
                'slug' => 'Iphone_12_pochette',
                'small_description' => 'Offrez une protection élégante et efficace à votre iPhone 12 avec cette pochette noire pratique et tendance. Conçue spécialement pour l iPhone 12, cette pochette est fabriquée à partir de matériaux de qualité supérieure, comme le cuir véritable ou le silicone doux et résistant.',
                'description' => 'Cette pochette noir pour iPhone 12 offre une prise en main confortable et sécurisée grâce à sa texture douce et agréable au toucher. Elle est également conçue pour permettre un accès facile à tous les ports et boutons de votre iPhone 12, ainsi qu à la caméra et au flash.
 En plus de protéger votre téléphone des rayures, des chutes et des dommages causés par l usure quotidienne, cette pochette noire ajoute une touche de sophistication à votre iPhone 12. Elle est un accessoire de mode tendance qui complète parfaitement le design élégant de votre téléphone.',
                'original_price' => '4000',
                'selling_price' => '3500',
                'image' => 'pochette 12.webp',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'pochette',
                'meta_keyword' => 'pochette',
                'meta_description' => 'Cette pochette noir pour iPhone 12 offre une prise en main confortable et sécurisée grâce à sa texture douce et agréable au toucher. Elle est également conçue pour permettre un accès facile à tous les ports et boutons de votre iPhone 12, ainsi qu à la caméra et au flash.

    En plus de protéger votre téléphone des rayures, des chutes et des dommages causés par l usure quotidienne, cette pochette noire ajoute une touche de sophistication à votre iPhone 12. Elle est un accessoire de mode tendance qui complète parfaitement le design élégant de votre téléphone.',
            ],
            [
                'cate_id' => '7',
                'name' => 'Iphone 13 pochette',
                'slug' => 'Iphone_13_pochette',
                'small_description' => 'Donnez une touche de couleur à votre iPhone 12 avec cette pochette rouge et bleu, pratique et tendance. Cette pochette est spécialement conçue pour protéger votre iPhone 12 des rayures, des chutes et des dommages causés par l usure quotidienne, tout en ajoutant une touche de personnalité à votre téléphone.',
                'description' => 'Fabriquée à partir de matériaux de qualité supérieure, comme le silicone doux et résistant, cette pochette offre une prise en main confortable et sécurisée. Elle est conçue pour permettre un accès facile à tous les ports et boutons de votre iPhone 12, ainsi qu à la caméra et au flash.

    Avec son design coloré rouge et bleu, cette pochette pour iPhone 12 est un accessoire de mode tendance qui complète parfaitement le design élégant de votre téléphone. Elle est également un excellent choix pour ceux qui cherchent à personnaliser leur téléphone et à le rendre unique.',
                'original_price' => '4000',
                'selling_price' => '3500',
                'image' => 'pochette 13.webp',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'pochette',
                'meta_keyword' => 'pochette',
                'meta_description' => 'Fabriquée à partir de matériaux de qualité supérieure, comme le silicone doux et résistant, cette pochette offre une prise en main confortable et sécurisée. Elle est conçue pour permettre un accès facile à tous les ports et boutons de votre iPhone 12, ainsi qu à la caméra et au flash.

    Avec son design coloré rouge et bleu, cette pochette pour iPhone 12 est un accessoire de mode tendance qui complète parfaitement le design élégant de votre téléphone. Elle est également un excellent choix pour ceux qui cherchent à personnaliser leur téléphone et à le rendre unique.',
            ],
            [
                'cate_id' => '8',
                'name' => 'Canvio Basics 4 To - Noir',
                'slug' => 'Canvio_Basics_4_To_Noir',
                'small_description' => 'Disque Dur Externe 4 To',
                'description' => 'Toshiba Canvio Basics. Capacité disque dur: 4000 Go, Taille du disque dur: 2.5"". Version USB: 3.0 (3.1 Gen 1). Couleur du produit: Noir

UN ENDROIT DE STOCKAGE POUR TOUS VOS FICHIERS
Stockage grande capacité dans un boîtier compact et pratique, à la finition mate noire. Disponibles en différentes capacités (jusqu à 4 To), les disques durs Canvio Basics sont parfaits pour le stockage des données, la musique, les films et les photos. Alimentés par USB, ces appareils peuvent être utilisés avec un seul câble USB connecté à un ordinateur de bureau ou un ordinateur portable.

    VOTRE COMPAGNON COMPACT
Le Canvio Basics est compact et de style classique. Avec son boîtier fin et compact, et sa partie supérieure plate, le disque dur Canvio Basics est véritablement portable : il est facile à transporter et à stocker dans une poche ou un sac.

    TRANSFERTS HAUT DÉBIT
Grâce à la technologie USB 3.0, ces disques durs portables sont beaucoup plus rapides que les appareils USB 2.0 avec lesquels ils restent compatibles. Lorsque vous organisez vos fichiers, les transferts sont très rapides.

    FONCTIONNEMENT PLUG-AND-PLAY SIMPLE
Fonctionnement plug-and-play simple. Prêts à être utilisés avec Microsoft Windows, sans aucune installation de logiciel. Glisser-déposer intuitif des fichiers depuis et vers votre ordinateur de bureau ou votre ordinateur portable.

    VOS DONNÉES EN LIEU SÛR
Avec plus de 50 ans d expérience dans la technologie des disques durs et des normes de qualité sans égales, les disques durs portables de Toshiba offrent un emplacement fiable et sécurisé pour vos fichiers, où que vous mènent vos déplacements.',
                'original_price' => '78000',
                'selling_price' => '70000',
                'image' => 'Canvio_Basics_4_To_Noir.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'Disque_dur',
                'meta_keyword' => 'Disque_dur',
                'meta_description' => 'Disque Dur Externe 4 To',
            ],
            [
                'cate_id' => '8',
                'name' => 'Canvio Basics 2 To',
                'slug' => 'Canvio_Basics_2_To',
                'small_description' => 'Disque Dur Externe 4 To',
                'description' => 'Transférez vos fichiers rapidement avec le port USB 3.0
grande vitesse et stockez jusqu’à 3 To de données sur les
disques durs externes Canvio Basics. Ces appareils sont
prêts à être utilisés avec Microsoft Windows, sans aucune
installation de logiciel. Le stockage de tous vos fichiers
favoris n’a jamais été aussi facile. Que vous soyez à votre
bureau ou en déplacement, sa conception intemporelle avec
finition mate est toujours élégante. Le disque dur vous
permet également de vous connecter à des anciens
matériels grâce à sa compatibilité USB 2.0.



Interface USB 3.0 (compatible USB 2.0)
Vitesse de transfert max. ~ 5 Gbits/s
Système de fichiers NTFS (Microsoft Windows)
Nécessite un reformatage
pour Mac OS
Alimentation Bus USB (max. 900 mA)
Configuration système
requise
Système de fichiers NTFS
formaté pour Microsoft
Windows 10, Windows 8.1,
Windows 7
Un port disponible USB 3.0 ou
USB 2.0
Garantie 2 ans
Boîtier Mat
Dimensions 500 Go, 1 To, 2 To : 78 x 109
x 14 mm
3 To (conception différente) :
119 × 70 × 20,5 mm
Poids 500 GB: 140 g
1 TB, 2 TB: 149 g
Contenu du coffret Canvio Basics
Câble USB 3.0 (Type-A-Micro-
B)',
                'original_price' => '47000',
                'selling_price' => '41000',
                'image' => 'Canvio_Basics_2_To.png',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'Disque_dur',
                'meta_keyword' => 'Disque_dur',
                'meta_description' => 'Disque Dur Externe 2 To',
            ],
            [
                'cate_id' => '8',
                'name' => 'WD ELEMENTS 4 To',
                'slug' => 'WD_ELEMENTS_4_To',
                'small_description' => 'Disque Dur Externe 4 To',
                'description' => 'Le Western Digital Elements Portable 4 To USB 3.0 est un disque dur portable, simple et de grande qualité qui est léger et facile à porter. Il suffit de le brancher à un port USB pour commencer à enregistrer vos photos, vos musiques, vos vidéos et vos fichiers.
                ',
                'original_price' => '47000',
                'selling_price' => '41000',
                'image' => 'WD_ELEMENTS_4_To.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'Disque_dur',
                'meta_keyword' => 'Disque_dur',
                'meta_description' => 'Disque Dur Externe 4 To',
            ],

        ]);
    }
}
