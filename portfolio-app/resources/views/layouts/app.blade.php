<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Titouan Galles - Portfolio Développeur')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
    @stack('styles')
</head>
<body class="font-sans antialiased">
    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    <span class="text-3xl">TG</span> Portfolio
                </a>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-purple-400 transition-colors">
                        Accueil
                    </a>
                    <a href="#about" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-purple-400 transition-colors">
                        À propos
                    </a>
                    <a href="#skills" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-purple-400 transition-colors">
                        Compétences
                    </a>
                    <a href="#projects" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-purple-400 transition-colors">
                        Projets
                    </a>
                    <a href="#experience" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-purple-400 transition-colors">
                        Expérience
                    </a>
                    <a href="#contact" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-purple-400 transition-colors">
                        Contact
                    </a>
                    
                    <!-- Dark Mode Toggle -->
                    <button id="darkModeToggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
                        <i class="fas fa-moon dark:hidden"></i>
                        <i class="fas fa-sun hidden dark:inline"></i>
                    </button>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobileMenuToggle" class="md:hidden p-2 rounded-lg bg-gray-200 dark:bg-gray-700">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 py-4 space-y-4">
                <a href="#home" class="block text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-purple-400">Accueil</a>
                <a href="#about" class="block text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-purple-400">À propos</a>
                <a href="#skills" class="block text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-purple-400">Compétences</a>
                <a href="#projects" class="block text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-purple-400">Projets</a>
                <a href="#experience" class="block text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-purple-400">Expérience</a>
                <a href="#contact" class="block text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-purple-400">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                        Titouan Galles
                    </h3>
                    <p class="text-gray-400">
                        Étudiant en BUT Informatique à l'IUT de Bayonne. Passionné par le développement web et les technologies cloud.
                    </p>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Liens Rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">À propos</a></li>
                        <li><a href="#projects" class="text-gray-400 hover:text-white transition-colors">Projets</a></li>
                        <li><a href="#experience" class="text-gray-400 hover:text-white transition-colors">Expérience</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Suivez-moi</h4>
                    <div class="flex space-x-4">
                        <a href="https://github.com/titouangalles" target="_blank" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://linkedin.com/in/titouan-galles" target="_blank" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="mailto:titouangalles@gmail.com" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Titouan Galles - Étudiant BUT Informatique. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    
    <script>
        // Mobile menu toggle
        document.getElementById('mobileMenuToggle')?.addEventListener('click', () => {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });
    </script>
    
    @stack('scripts')
</body>
</html>
