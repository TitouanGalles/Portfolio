<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Skills
        $skills = [
            // Frontend
            ['name' => 'HTML5', 'category' => 'Frontend', 'level' => 95, 'icon' => 'fab fa-html5', 'order' => 1],
            ['name' => 'CSS3', 'category' => 'Frontend', 'level' => 90, 'icon' => 'fab fa-css3-alt', 'order' => 2],
            ['name' => 'JavaScript', 'category' => 'Frontend', 'level' => 88, 'icon' => 'fab fa-js', 'order' => 3],
            ['name' => 'React', 'category' => 'Frontend', 'level' => 85, 'icon' => 'fab fa-react', 'order' => 4],
            ['name' => 'Vue.js', 'category' => 'Frontend', 'level' => 82, 'icon' => 'fab fa-vuejs', 'order' => 5],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend', 'level' => 90, 'icon' => 'fas fa-palette', 'order' => 6],
            
            // Backend
            ['name' => 'PHP', 'category' => 'Backend', 'level' => 92, 'icon' => 'fab fa-php', 'order' => 7],
            ['name' => 'Laravel', 'category' => 'Backend', 'level' => 90, 'icon' => 'fab fa-laravel', 'order' => 8],
            ['name' => 'Node.js', 'category' => 'Backend', 'level' => 85, 'icon' => 'fab fa-node-js', 'order' => 9],
            ['name' => 'Python', 'category' => 'Backend', 'level' => 80, 'icon' => 'fab fa-python', 'order' => 10],
            ['name' => 'MySQL', 'category' => 'Backend', 'level' => 88, 'icon' => 'fas fa-database', 'order' => 11],
            ['name' => 'MongoDB', 'category' => 'Backend', 'level' => 75, 'icon' => 'fas fa-database', 'order' => 12],
            
            // Tools
            ['name' => 'Git', 'category' => 'Tools', 'level' => 90, 'icon' => 'fab fa-git-alt', 'order' => 13],
            ['name' => 'Docker', 'category' => 'Tools', 'level' => 80, 'icon' => 'fab fa-docker', 'order' => 14],
            ['name' => 'Linux', 'category' => 'Tools', 'level' => 85, 'icon' => 'fab fa-linux', 'order' => 15],
            ['name' => 'AWS', 'category' => 'Tools', 'level' => 75, 'icon' => 'fab fa-aws', 'order' => 16],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // Projects
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'description' => 'Une plateforme e-commerce complète avec panier, paiement en ligne et gestion des stocks. Interface moderne et responsive.',
                'image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?w=800',
                'technologies' => ['Laravel', 'Vue.js', 'Tailwind CSS', 'Stripe'],
                'github_url' => 'https://github.com',
                'demo_url' => 'https://demo.com',
                'order' => 1,
                'featured' => true
            ],
            [
                'title' => 'Task Management App',
                'description' => 'Application de gestion de tâches collaborative avec système de notifications en temps réel et drag & drop.',
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800',
                'technologies' => ['React', 'Node.js', 'MongoDB', 'Socket.io'],
                'github_url' => 'https://github.com',
                'demo_url' => 'https://demo.com',
                'order' => 2,
                'featured' => true
            ],
            [
                'title' => 'Blog CMS',
                'description' => 'Système de gestion de contenu pour blog avec éditeur WYSIWYG, gestion des médias et SEO optimisé.',
                'image' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=800',
                'technologies' => ['Laravel', 'MySQL', 'TinyMCE', 'Bootstrap'],
                'github_url' => 'https://github.com',
                'demo_url' => null,
                'order' => 3,
                'featured' => true
            ],
            [
                'title' => 'Social Network',
                'description' => 'Réseau social avec profils utilisateurs, publications, commentaires, likes et messagerie instantanée.',
                'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=800',
                'technologies' => ['Vue.js', 'Laravel', 'Redis', 'WebSockets'],
                'github_url' => 'https://github.com',
                'demo_url' => 'https://demo.com',
                'order' => 4,
                'featured' => true
            ],
            [
                'title' => 'Weather Dashboard',
                'description' => 'Dashboard météo interactif avec prévisions sur 7 jours, graphiques et alertes personnalisées.',
                'image' => 'https://images.unsplash.com/photo-1592210454359-9043f067919b?w=800',
                'technologies' => ['React', 'Chart.js', 'OpenWeather API'],
                'github_url' => 'https://github.com',
                'demo_url' => 'https://demo.com',
                'order' => 5,
                'featured' => false
            ],
            [
                'title' => 'Portfolio Generator',
                'description' => 'Générateur de portfolio automatique avec templates personnalisables et export en PDF.',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800',
                'technologies' => ['Laravel', 'Livewire', 'DomPDF'],
                'github_url' => 'https://github.com',
                'demo_url' => null,
                'order' => 6,
                'featured' => false
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        // Experiences
        $experiences = [
            [
                'company' => 'Tech Solutions Inc.',
                'position' => 'Développeur Full-Stack Senior',
                'description' => 'Développement d\'applications web complexes, mentorat d\'équipe junior, architecture technique.',
                'location' => 'Paris, France',
                'start_date' => '2022-03-01',
                'end_date' => null,
                'current' => true,
                'order' => 1
            ],
            [
                'company' => 'Digital Agency',
                'position' => 'Développeur Web',
                'description' => 'Création de sites web et applications pour divers clients, maintenance et optimisation.',
                'location' => 'Lyon, France',
                'start_date' => '2020-06-01',
                'end_date' => '2022-02-28',
                'current' => false,
                'order' => 2
            ],
            [
                'company' => 'StartUp Innovation',
                'position' => 'Développeur Junior',
                'description' => 'Participation au développement de MVP, apprentissage des meilleures pratiques.',
                'location' => 'Remote',
                'start_date' => '2019-01-15',
                'end_date' => '2020-05-30',
                'current' => false,
                'order' => 3
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }

        // Education
        $educations = [
            [
                'school' => 'Université de Technologie',
                'degree' => 'Master',
                'field' => 'Informatique et Systèmes d\'Information',
                'description' => 'Spécialisation en développement web et mobile, intelligence artificielle.',
                'start_date' => '2017-09-01',
                'end_date' => '2019-06-30',
                'current' => false,
                'order' => 1
            ],
            [
                'school' => 'IUT Informatique',
                'degree' => 'DUT',
                'field' => 'Informatique',
                'description' => 'Formation en programmation, bases de données, réseaux.',
                'start_date' => '2015-09-01',
                'end_date' => '2017-06-30',
                'current' => false,
                'order' => 2
            ],
        ];

        foreach ($educations as $education) {
            Education::create($education);
        }
    }
}
