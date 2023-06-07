

## Mon projet Laravel

Il s'agit de la creation d'un site de commerce en ligne


## Installation

1. Cloner le porjet

https://github.com/rayanghomsi10/Backend_stageX2/tree/feature/front

2. Installation des dependances

Vous devez taper les commandes suivante dans le terminal

- cd "la redirection du projet"
- composer install
- npm install
- npm run dev

3. Configurer la base de données dans le fichier .env

- DB_CONNECTION = mysql
- DB_HOST = 127.0.0.1
- DB_DATABASE = "le nom de la base de donnée que vous allez utilisé"
- DB_USERNAME = "nom de l'utilisateur dans votre base de donnée "
- BD_PASSWORD = "ne mettez rien s'il y'en a pas "

4. Lancer les migration

on les lance avec la commande :

- php artisan migrate

5. Remplisser la base de donnée avec les elelemts present dans le code

on les lance avec la commande :

- php artisan db:seed

## Configuration

Le projet utilise le fichier .env pour sa configuration. Assurez-vous de créer un fichier .env à partir du fichier .env.example et de configurer les variables d'environnement en conséquence.

## Utilisation

Pour lancer le projet, exécutez la commande suivante :

- php artisan serve

Vous pouvez ensuite accéder à l'application à l'adresse http://localhost:8000.

## Quelques informations

Les informations de l'administrateur par defaut sont :
- email : Ray.g@gmail.com
- password : 12345678

Les informations de l'utilisateur deja enregistré sont :
- email : claude.r@gmail.com
- password : 12345678
