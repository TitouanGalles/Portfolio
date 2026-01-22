#!/bin/bash

echo "🚀 Configuration du Portfolio Laravel..."

# Installation des dépendances Composer
echo "📦 Installation des dépendances PHP..."
composer install

# Copie du fichier .env
if [ ! -f .env ]; then
    echo "📝 Création du fichier .env..."
    cp .env.example .env
fi

# Génération de la clé d'application
echo "🔑 Génération de la clé d'application..."
php artisan key:generate

# Installation des dépendances NPM
echo "📦 Installation des dépendances NPM..."
npm install

# Compilation des assets
echo "🎨 Compilation des assets..."
npm run dev

# Migration et seed de la base de données
echo "💾 Configuration de la base de données..."
read -p "Voulez-vous migrer et seed la base de données? (y/n) " -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]
then
    php artisan migrate --seed
fi

echo ""
echo "✅ Installation terminée!"
echo ""
echo "Pour démarrer le serveur de développement:"
echo "php artisan serve"
echo ""
echo "Puis visitez: http://localhost:8000"
