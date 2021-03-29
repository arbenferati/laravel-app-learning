# MyApps - PRE-TPI 2021

Arben Ferati | arben.ferati@cpnv.ch

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

Une fois terminer, copier le fichier *.env.example* et créer *.env* avec le même contenu

    cp .env.example .env

Connectez vous à votre base de données et créez une nouvelle base de données nommée myapps

    CREATE DATABSE myapps;

Ensuite retournez dans le dossier root de l'application puis générer une clé unique à l'application (qui sera présente que sur cette machine)

    php artisan key:generate

Vous pouvez à présent migrer la base de données avec *artisan*

    php artisan migrate

Vous pouvez remplire la base de données avec les données que j'ai préparés.

    php artisan db:seed

Vous pouvez maintenant profitez de l'application avec l'utilisateur **user@exemple.com** et le mot de passe **password**.

## A propos de MyApps

Ce projet est un sorte "launcher" web avec plusieurs applications à disposition.
Je fais ce porjet dans le cadre du PRE-TPI au CPNV. 

## Fichiers annexes

Vous pouvez trouvez plusieurs fichier ci-dessous concernant différente documentations-
