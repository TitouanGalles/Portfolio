# 🎨 Guide de personnalisation du Portfolio

## Fichier principal à modifier

### 📝 Informations personnelles et contenu

**Fichier** : `app/Http/Controllers/PortfolioController.php`

C'est LE fichier le plus important pour personnaliser votre portfolio. Toutes vos données y sont centralisées.

#### Modifier vos projets

```php
$projects = collect([
    (object)[
        'id' => 1,
        'title' => 'Votre projet',
        'description' => 'Description du projet',
        'image' => 'URL_IMAGE',
        'technologies' => ['Tech1', 'Tech2'],
        'github_url' => 'https://github.com/vous/projet',
        'demo_url' => 'https://demo.com',
        'featured' => true
    ],
    // Ajoutez d'autres projets...
]);
```

#### Modifier vos compétences

```php
$skills = collect([
    'Catégorie' => collect([
        (object)['name' => 'Compétence', 'level' => 85, 'icon' => 'fab fa-html5'],
        // Ajoutez d'autres compétences...
    ]),
]);
```

Niveaux recommandés :
- 90-100 : Expert
- 75-89 : Avancé
- 60-74 : Intermédiaire
- 40-59 : Basique

#### Modifier vos expériences

```php
$experiences = collect([
    (object)[
        'company' => 'Nom entreprise',
        'position' => 'Poste',
        'description' => 'Description du poste',
        'location' => 'Ville, Pays',
        'start_date' => Carbon::parse('2025-01-01'),
        'end_date' => Carbon::parse('2025-06-30'),
        'current' => false
    ],
]);
```

#### Modifier votre formation

```php
$educations = collect([
    (object)[
        'school' => 'Nom école',
        'degree' => 'Diplôme',
        'field' => 'Spécialité',
        'description' => 'Description',
        'start_date' => Carbon::parse('2022-09-01'),
        'end_date' => Carbon::parse('2025-06-30'),
        'current' => true
    ],
]);
```

## 🎨 Personnalisation visuelle

### Couleurs

**Fichier** : `tailwind.config.js`

```javascript
colors: {
    primary: {
        500: '#0ea5e9',  // Couleur principale
        600: '#0284c7',  // Variation plus foncée
    },
}
```

### Textes de présentation

**Fichier** : `resources/views/portfolio/index.blade.php`

Cherchez et modifiez :
- Le titre Hero (ligne ~38) : `<h1>Bonjour, je suis...`
- La description (ligne ~49) : `<p>Étudiant en...`
- Section À propos (ligne ~85) : Description personnelle

### Effet de typing

**Fichier** : `resources/js/app.js`

```javascript
const texts = ['Texte 1', 'Texte 2', 'Texte 3'];
```

## 📞 Informations de contact

**Fichier** : `resources/views/portfolio/index.blade.php`

Section Contact (ligne ~600) :
- Email
- Téléphone
- Localisation

**Fichier** : `resources/views/layouts/app.blade.php`

Footer (ligne ~90) :
- Liens GitHub, LinkedIn, Email

## 🔤 Icônes Font Awesome

Utilisez les classes Font Awesome 6 :
- `fab fa-github` - GitHub
- `fab fa-linkedin-in` - LinkedIn
- `fab fa-twitter` - Twitter
- `fas fa-envelope` - Email
- `fab fa-html5` - HTML5
- `fab fa-js` - JavaScript
- `fab fa-react` - React
- `fab fa-vuejs` - Vue.js
- `fab fa-angular` - Angular
- `fab fa-laravel` - Laravel
- `fab fa-php` - PHP
- `fab fa-java` - Java
- `fab fa-python` - Python
- `fab fa-docker` - Docker
- `fas fa-database` - Base de données
- `fas fa-cloud` - Cloud
- `fas fa-code` - Code générique

Liste complète : [fontawesome.com/icons](https://fontawesome.com/icons)

## 🖼️ Images

### Images de projets

Utilisez des URLs d'images Unsplash ou vos propres images :

```
https://images.unsplash.com/photo-XXXXXXXX?w=800
```

Ou placez vos images dans `public/images/` et utilisez :

```php
'image' => asset('images/mon-projet.jpg')
```

### Avatar

**Fichier** : `resources/views/portfolio/index.blade.php`

```html
<img src="https://ui-avatars.com/api/?name=Votre+Nom&size=200&background=667eea&color=fff&bold=true&font-size=0.4" 
     alt="Votre Nom">
```

Ou utilisez votre propre photo :

```html
<img src="{{ asset('images/avatar.jpg') }}" alt="Votre Nom">
```

## 🚀 Après modifications

### 1. Recompiler les assets

```bash
npm run dev
```

### 2. Vider le cache (si nécessaire)

```bash
php artisan cache:clear
php artisan view:clear
```

### 3. Rafraîchir le navigateur

Appuyez sur `Ctrl + F5` pour forcer le rechargement

## 📱 Mode responsive

Le portfolio est automatiquement responsive. Les classes Tailwind utilisées :
- `md:` - Medium screens (tablettes)
- `lg:` - Large screens (desktop)
- `xl:` - Extra large screens

## 🌙 Mode sombre

Géré automatiquement avec la classe `dark:` de Tailwind.

Pour personnaliser les couleurs en mode sombre, cherchez les classes :
- `dark:bg-gray-800`
- `dark:text-white`
- `dark:border-gray-600`

## ✨ Animations

**Fichier** : `resources/css/app.css`

Animations disponibles :
- `animate-fade-in`
- `animate-fade-in-up`
- `animate-slide-in-right`
- `animate-float`

Pour ajouter une animation à un élément :

```html
<div class="animate-fade-in-up">Contenu</div>
```

## 🆘 Problèmes fréquents

### Les modifications ne s'affichent pas ?

```bash
npm run dev
php artisan view:clear
```

Puis `Ctrl + F5` dans le navigateur.

### Erreur de compilation CSS ?

```bash
npm install
npm run dev
```

### Le serveur ne démarre pas ?

```bash
php artisan serve
```

---

**Bon courage pour la personnalisation !** 🎉

Si vous avez des questions, consultez la documentation Laravel ou Tailwind CSS.
