@echo off
echo 🚀 Configuration du Portfolio Laravel...

REM Installation des dépendances Composer
echo 📦 Installation des dépendances PHP...
call composer install

REM Copie du fichier .env
if not exist .env (
    echo 📝 Création du fichier .env...
    copy .env.example .env
)

REM Génération de la clé d'application
echo 🔑 Génération de la clé d'application...
php artisan key:generate

REM Installation des dépendances NPM
echo 📦 Installation des dépendances NPM...
call npm install

REM Compilation des assets
echo 🎨 Compilation des assets...
call npm run dev

REM Migration et seed de la base de données
echo 💾 Configuration de la base de données...
set /p migrate="Voulez-vous migrer et seed la base de données? (y/n): "
if /i "%migrate%"=="y" (
    php artisan migrate --seed
)

echo.
echo ✅ Installation terminée!
echo.
echo Pour démarrer le serveur de développement:
echo php artisan serve
echo.
echo Puis visitez: http://localhost:8000
pause
