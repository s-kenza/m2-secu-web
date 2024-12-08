# TP Sécurité web

Par `Kenza SCHULER M2 IW`

## Installation

`https://github.com/s-kenza/m2-secu-web.git`

Cloner ce projet et déplacer-vous dedans une fois que c'est fait.

Vous retrouverez un dossier `./secure` et `./vulnerable`.

Les deux applications peuvent être lancées en même temps, car elles n'utilisent pas les mêmes ports.

## Initialisation du projet
Dans chaque dossier `secure/app` et `vulnerable/app`, créer un fichier .env dans lequel renseigné :
```bash
# In all environments, the following files are loaded if they exist,
# the latter taking precedence over the former:
#
#  * .env                contains default values for the environment variables needed by the app
#  * .env.local          uncommitted file with local overrides
#  * .env.$APP_ENV       committed environment-specific defaults
#  * .env.$APP_ENV.local uncommitted environment-specific overrides
#
# Real environment variables win over .env files.
#
# DO NOT DEFINE PRODUCTION SECRETS IN THIS FILE NOR IN ANY OTHER COMMITTED FILES.
# https://symfony.com/doc/current/configuration/secrets.html
#
# Run "composer dump-env prod" to compile .env files for production use (requires symfony/flex >=1.2).
# https://symfony.com/doc/current/best_practices.html#use-environment-variables-for-infrastructure-configuration

###> symfony/framework-bundle ###
APP_ENV=dev
APP_SECRET=7b36bd1f44325f41f6700ee1eb91bedb
###< symfony/framework-bundle ###

###> doctrine/doctrine-bundle ###
# Format described at https://www.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html#connecting-using-a-url
# IMPORTANT: You MUST configure your server version, either here or in config/packages/doctrine.yaml
#
# DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
# DATABASE_URL="mysql://app:!ChangeMe!@127.0.0.1:3306/app?serverVersion=8.0.32&charset=utf8mb4"
DATABASE_URL="mysql://root:root@mariadb:3306/app?serverVersion=10.11.2-MariaDB&charset=utf8mb4"
# DATABASE_URL="postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=15&charset=utf8"
###< doctrine/doctrine-bundle ###

###> symfony/messenger ###
# Choose one of the transports below
# MESSENGER_TRANSPORT_DSN=amqp://guest:guest@localhost:5672/%2f/messages
# MESSENGER_TRANSPORT_DSN=redis://localhost:6379/messages
MESSENGER_TRANSPORT_DSN=doctrine://default?auto_setup=0
###< symfony/messenger ###
###> symfony/mailer ###
MAILER_DSN=smtp://153f8f1afcb6ef:7dc5f8cc2f0ed8@sandbox.smtp.mailtrap.io:2525
###< symfony/mailer ###
```

Lancer ensuite :
```bash
docker compose build
docker compose up -d
```

Il faut après remplir la base de données, pour cela, entrer dans l’image `vulnerable-symfony-php` en lançant :
```bash
docker compose exec -it vulnerable-symfony-php bash
```

Une fois dans l’image, copier le paragraphe complet des commandes suivantes qui vont se lancer en une fois :
```bash
composer require --dev doctrine/doctrine-fixtures-bundle &&
composer install &&
php bin/console d:d:c && 
php bin/console d:s:u --force &&
php bin/console d:f:l &&
npm i && 
npm run dev
```
*Écrire `yes` quand c’est demandé.*

Quitter le conteneur avec `exit`.

Faire la même chose pour l’image `secure-symfony-php` :
```bash
docker compose exec -it secure-symfony-php bash
```

Une fois dedans, lancer le paragraphe complet :
```bash
composer require --dev doctrine/doctrine-fixtures-bundle &&
composer install &&
npm i && 
npm run dev
```

**Pour reproduire les failles, il faut être connecté.**
1. Vous pouvez créer un compte sur chaque application :
    - http://localhost/
    - http://localhost:81/
2. Ou utiliser les comptes :
    - **Étudiant** : email = user@example.fr | mdp = password
    - **Admin** : email = admin@admin.fr | mdp = adminadmin

## Rapport

Le rapport est disponible à cette adresse : https://kenzaschuler.notion.site/Projet-S-curit-Web-1550fcd5059f80448913fef69ac839ac

Ou en PDF : [Kenza SCHULER - Rapport Sécurité Web.pdf](https://github.com/user-attachments/files/18051903/Kenza.SCHULER.-.Rapport.Securite.Web.pdf)


Les consignes peuvent être téléchargées : [Projet sécurité web - Énoncé](./Projet%20sécurité%20web%20-%20Énoncé.pdf)
