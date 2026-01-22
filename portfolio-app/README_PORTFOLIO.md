# Portfolio Laravel - Instructions de démarrage

## Installation

1. **Installer les dépendances PHP**
```bash
composer install
```

2. **Configurer l'environnement**
```bash
cp .env.example .env
php artisan key:generate
```

3. **Configurer la base de données**
Éditez `.env` et configurez votre base de données:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=
```

4. **Créer la base de données et migrer**
```bash
php artisan migrate
php artisan db:seed
```

5. **Installer les dépendances NPM et compiler les assets**
```bash
npm install
npm run dev
```

6. **Lancer le serveur de développement**
```bash
php artisan serve
```

Accédez à votre portfolio sur: http://localhost:8000

## Fonctionnalités

✨ **Design Moderne**
- Interface responsive (mobile, tablet, desktop)
- Mode sombre/clair
- Animations fluides et effets visuels
- Particules animées en arrière-plan

🎨 **Sections**
- Hero avec effet de typing
- À propos avec statistiques
- Compétences avec barres de progression animées
- Projets avec filtres
- Expérience et formation
- Formulaire de contact fonctionnel

⚡ **Technologies**
- Laravel 8
- Tailwind CSS
- JavaScript (Vanilla)
- Particles.js
- Font Awesome

🛠️ **Personnalisation**

Pour personnaliser les données:
1. Modifiez `database/seeders/DatabaseSeeder.php`
2. Exécutez: `php artisan migrate:fresh --seed`

Pour changer les couleurs:
- Éditez `tailwind.config.js`
- Recompilez: `npm run dev`

## Production

Pour déployer en production:
```bash
npm run production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Support

Pour toute question ou problème, n'hésitez pas à ouvrir une issue sur GitHub.

---

Créé avec ❤️ par [Votre Nom]
