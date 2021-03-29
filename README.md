# MyApps - PRE-TPI 2021

Arben Ferati | arben.ferati@cpnv.ch

----

## A propos de MyApps

Ce projet est un sorte "launcher" web avec plusieurs applications à disposition.
Je fais ce porjet dans le cadre du PRE-TPI au CPNV.
Pour l'instant seulement la fonctionnalité d'affichage de films et l'authentification sur le site sont disponibles. L'application devrait evoluer dans le future.

----


## Mise en service

### Pré-requis
Afin de pouvoir executé le code dans votre machine vous avez quelque pré-requis.

- [Laravel 8 - Guide d'installation](https://laravel.com/docs/8.x/installation)
  - [PHP >= 7.3](https://www.php.net/downloads)
  - BCMath PHP Extension
  - Ctype PHP Extension
  - Fileinfo PHP Extension
  - JSON PHP Extension
  - Mbstring PHP Extension
  - OpenSSL PHP Extension
  - PDO PHP Extension
  - Tokenizer PHP Extension
  - XML PHP Extension
- MySql
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/en/)

### Mise en fonction

Afin de pouvoir tester l'application, il vous faut la cloner depuis mon répertoire [github](https://github.com/arbenferati/laravel-app-learning.git).

    git clone https://github.com/arbenferati/laravel-app-learning.git

Une fois le dépôt cloner, vous vous rendez dedans puis vous lancer composer afin d'installer les dépendances.

    composer install

Ensuite, vous lancez *npm* pour compiler les fichiers .js et .css en mode développement

    npm install && npm run dev

Une fois terminer, copier le fichier *.env.example* et créer *.env* ...
    
    cp .env.example .env

...et modifier le nouveau fichier en mettant les données de connexion sur votre DB

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=myapps
    DB_USERNAME=root
    DB_PASSWORD=password

Connectez vous à votre base de données en utilisant un outil comme HeidiSQL où en ligne de commande et créez une nouvelle base de données nommée ***myapps***

    CREATE DATABSE myapps;

Ensuite retournez dans le dossier root de l'application puis générer une clé unique à l'application avec artisan (qui sera présente que sur cette machine)

    php artisan key:generate

Vous pouvez à présent migrer la base de données avec *artisan*

    php artisan migrate

Vous pouvez remplire la base de données avec les données que j'ai préparés.

    php artisan db:seed

Vous pouvez maintenant profitez de l'application avec l'utilisateur **user@exemple.com** et le mot de passe **password**. Et il y a aussi, dans la table *applications*, une entrée 'movies' qui est inscrite avec la bonne route, ainsi vous pouvez avoir accès à l'application depuis la page home.
 

## Fichiers annexes

Vous pouvez trouvez plusieurs fichier ci-dessous concernant différente documentations

