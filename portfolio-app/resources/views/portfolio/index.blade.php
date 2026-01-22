@extends('layouts.app')

@section('title', 'Portfolio - Développeur Full-Stack')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 dark:from-gray-900 dark:via-purple-900 dark:to-gray-900">
    <div id="particles-js" class="absolute inset-0"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center animate-fade-in-up">
            <div class="mb-6">
                <img src="https://ui-avatars.com/api/?name=Titouan+Galles&size=200&background=667eea&color=fff&bold=true&font-size=0.4" 
                     alt="Titouan Galles" 
                     class="w-32 h-32 md:w-40 md:h-40 rounded-full mx-auto shadow-2xl border-4 border-white dark:border-gray-700 animate-float">
            </div>
            
            <h1 class="text-5xl md:text-7xl font-black mb-4">
                Bonjour, je suis <br>
                <span class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                    Titouan Galles
                </span>
            </h1>
            
            <div class="text-2xl md:text-3xl text-gray-600 dark:text-gray-300 mb-8 h-12">
                <span id="typingText"></span>
                <span class="animate-pulse">|</span>
            </div>
            
            <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 max-w-2xl mx-auto">
                Étudiant en 3ᵉ année de BUT Informatique à l'IUT de Bayonne, je recherche un stage développeur du 02/03/26 au 19/06/26. 
                Passionné par le développement front-end et back-end avec des technologies modernes.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#projects" class="btn-primary">
                    <i class="fas fa-rocket mr-2"></i> Voir mes projets
                </a>
                <a href="#contact" class="btn-secondary">
                    <i class="fas fa-envelope mr-2"></i> Me contacter
                </a>
            </div>
            
            <div class="mt-12 flex justify-center space-x-6">
                <a href="https://github.com/titouangalles" target="_blank" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-purple-400 transform hover:scale-110 transition-all">
                    <i class="fab fa-github text-3xl"></i>
                </a>
                <a href="https://linkedin.com/in/titouan-galles" target="_blank" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-purple-400 transform hover:scale-110 transition-all">
                    <i class="fab fa-linkedin-in text-3xl"></i>
                </a>
                <a href="mailto:titouangalles@gmail.com" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-purple-400 transform hover:scale-110 transition-all">
                    <i class="fas fa-envelope text-3xl"></i>
                </a>
            </div>
        </div>
    </div>
    
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#about" class="text-gray-600 dark:text-gray-400">
            <i class="fas fa-chevron-down text-3xl"></i>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-title">À Propos de Moi</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Découvrez mon parcours et ma passion pour le développement
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
            <div class="animate-on-scroll">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl transform rotate-3"></div>
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800" 
                         alt="Coding" 
                         class="relative rounded-xl shadow-2xl">
                </div>
            </div>
            
            <div class="animate-on-scroll space-y-6">
                <h3 class="text-3xl font-bold text-gray-900 dark:text-white">
                    Étudiant BUT Informatique - Recherche Stage
                </h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Je suis actuellement en 3ᵉ année de BUT Informatique à l'IUT de Bayonne et du Pays Basque. 
                    J'ai travaillé sur divers projets mêlant développement front-end et back-end, en utilisant des 
                    langages comme Java, JavaScript, HTML/CSS ainsi que des frameworks modernes (Angular, Laravel, Spring Boot).
                </p>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    J'ai acquis de solides compétences en conception, modélisation et manipulation de bases de données, 
                    avec la mise en œuvre de requêtes SQL complexes. Mon stage chez Leclerc m'a permis de travailler 
                    sur des technologies cloud (Google Cloud, BigQuery) et des architectures modernes.
                </p>
                
                <div class="grid grid-cols-2 gap-6 pt-6">
                    <div class="text-center p-4 bg-blue-50 dark:bg-gray-700 rounded-lg">
                        <div class="text-4xl font-bold text-blue-600 dark:text-purple-400 mb-2">3ᵉ</div>
                        <div class="text-gray-600 dark:text-gray-300">Année BUT Info</div>
                    </div>
                    <div class="text-center p-4 bg-purple-50 dark:bg-gray-700 rounded-lg">
                        <div class="text-4xl font-bold text-purple-600 dark:text-blue-400 mb-2">10+</div>
                        <div class="text-gray-600 dark:text-gray-300">Projets réalisés</div>
                    </div>
                    <div class="text-center p-4 bg-pink-50 dark:bg-gray-700 rounded-lg">
                        <div class="text-4xl font-bold text-pink-600 dark:text-purple-400 mb-2">3</div>
                        <div class="text-gray-600 dark:text-gray-300">Mois de stage</div>
                    </div>
                    <div class="text-center p-4 bg-indigo-50 dark:bg-gray-700 rounded-lg">
                        <div class="text-4xl font-bold text-indigo-600 dark:text-blue-400 mb-2">100%</div>
                        <div class="text-gray-600 dark:text-gray-300">Motivation</div>
                    </div>
                </div>
                
                <div class="pt-6">
                    <a href="#" class="btn-primary inline-block">
                        <i class="fas fa-download mr-2"></i> Télécharger mon CV
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-title">Mes Compétences</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Technologies et outils que je maîtrise
            </p>
        </div>
        
        <div class="max-w-6xl mx-auto">
            @foreach($skills as $category => $categorySkills)
            <div class="mb-12 animate-on-scroll">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center">
                    <span class="w-2 h-8 bg-gradient-to-b from-blue-600 to-purple-600 rounded-full mr-3"></span>
                    {{ $category }}
                </h3>
                
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach($categorySkills as $skill)
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-center space-x-3">
                            <i class="{{ $skill->icon }} text-2xl text-blue-600 dark:text-purple-400"></i>
                            <span class="font-semibold text-gray-900 dark:text-white">{{ $skill->name }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-title">Mes Projets</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Découvrez une sélection de mes réalisations récentes
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            @foreach($projects as $project)
            <div class="card group animate-on-scroll">
                <div class="relative overflow-hidden rounded-lg mb-4">
                    <img src="{{ $project->image }}" 
                         alt="{{ $project->title }}" 
                         class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                        <div class="flex space-x-2">
                            @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors">
                                <i class="fab fa-github"></i>
                            </a>
                            @endif
                            @if($project->demo_url)
                            <a href="{{ $project->demo_url }}" target="_blank" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-purple-600 hover:text-white transition-colors">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ $project->title }}</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $project->description }}</p>
                
                <div class="flex flex-wrap gap-2">
                    @foreach($project->technologies as $tech)
                    <span class="px-3 py-1 bg-blue-100 dark:bg-gray-700 text-blue-600 dark:text-purple-400 text-sm rounded-full">
                        {{ $tech }}
                    </span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12 animate-on-scroll">
            <a href="{{ route('projects') }}" class="btn-primary">
                <i class="fas fa-th mr-2"></i> Voir tous les projets
            </a>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-title">Expérience & Formation</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Mon parcours professionnel et académique
            </p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <!-- Experiences -->
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 flex items-center">
                    <i class="fas fa-briefcase mr-3 text-blue-600 dark:text-purple-400"></i>
                    Expérience Professionnelle
                </h3>
                
                <div class="space-y-6">
                    @foreach($experiences as $exp)
                    <div class="card animate-on-scroll">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white">{{ $exp->position }}</h4>
                                <p class="text-blue-600 dark:text-purple-400 font-semibold">{{ $exp->company }}</p>
                            </div>
                            <div class="mt-2 md:mt-0 text-gray-600 dark:text-gray-400">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                {{ $exp->start_date->format('M Y') }} - 
                                {{ $exp->current ? 'Présent' : $exp->end_date->format('M Y') }}
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-2">
                            <i class="fas fa-map-marker-alt mr-2 text-blue-600 dark:text-purple-400"></i>
                            {{ $exp->location }}
                        </p>
                        <p class="text-gray-700 dark:text-gray-300">{{ $exp->description }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Education -->
            <div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 flex items-center">
                    <i class="fas fa-graduation-cap mr-3 text-blue-600 dark:text-purple-400"></i>
                    Formation
                </h3>
                
                <div class="space-y-6">
                    @foreach($educations as $edu)
                    <div class="card animate-on-scroll">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white">{{ $edu->degree }} {{ $edu->field }}</h4>
                                <p class="text-blue-600 dark:text-purple-400 font-semibold">{{ $edu->school }}</p>
                            </div>
                            <div class="mt-2 md:mt-0 text-gray-600 dark:text-gray-400">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                {{ $edu->start_date->format('Y') }} - {{ $edu->end_date->format('Y') }}
                            </div>
                        </div>
                        @if($edu->description)
                        <p class="text-gray-700 dark:text-gray-300">{{ $edu->description }}</p>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-title">Contactez-moi</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Une question ? Un projet ? N'hésitez pas à me contacter
            </p>
        </div>
        
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12">
            <div class="animate-on-scroll space-y-8">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Restons en contact</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-8">
                        Je recherche un stage développeur du 02/03/26 au 19/06/26 pour ma 3ᵉ année de BUT Informatique. 
                        N'hésitez pas à me contacter pour discuter d'opportunités ou de projets !
                    </p>
                </div>
                
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-blue-100 dark:bg-gray-700 rounded-full flex items-center justify-center">
                            <i class="fas fa-envelope text-blue-600 dark:text-purple-400 text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Email</p>
                            <a href="mailto:titouangalles@gmail.com" class="text-gray-900 dark:text-white font-semibold hover:text-blue-600 dark:hover:text-purple-400">
                                titouangalles@gmail.com
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-purple-100 dark:bg-gray-700 rounded-full flex items-center justify-center">
                            <i class="fas fa-phone text-purple-600 dark:text-blue-400 text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Téléphone</p>
                            <a href="tel:+33782807665" class="text-gray-900 dark:text-white font-semibold hover:text-blue-600 dark:hover:text-purple-400">
                                07 82 80 76 65
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-pink-100 dark:bg-gray-700 rounded-full flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-pink-600 dark:text-purple-400 text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Localisation</p>
                            <p class="text-gray-900 dark:text-white font-semibold">Pyla-sur-Mer <i class="fas fa-car ml-2 text-sm" title="Permis B"></i></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="animate-on-scroll">
                <form id="contactForm" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Nom</label>
                        <input type="text" id="name" name="name" required
                               class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:border-blue-500 dark:focus:border-purple-500 focus:outline-none bg-white dark:bg-gray-700 text-gray-900 dark:text-white transition-colors">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                               class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:border-blue-500 dark:focus:border-purple-500 focus:outline-none bg-white dark:bg-gray-700 text-gray-900 dark:text-white transition-colors">
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Sujet</label>
                        <input type="text" id="subject" name="subject"
                               class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:border-blue-500 dark:focus:border-purple-500 focus:outline-none bg-white dark:bg-gray-700 text-gray-900 dark:text-white transition-colors">
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required
                                  class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:border-blue-500 dark:focus:border-purple-500 focus:outline-none bg-white dark:bg-gray-700 text-gray-900 dark:text-white transition-colors resize-none"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full btn-primary">
                        <i class="fas fa-paper-plane mr-2"></i> Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
