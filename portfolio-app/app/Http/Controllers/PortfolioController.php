<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PortfolioController extends Controller
{
    public function index()
    {
        // Projets de Titouan Galles
        $projects = collect([
            (object)[
                'id' => 1,
                'title' => 'Interface de Suivi Data Cloud',
                'description' => 'Développement d\'une interface complète de suivi de data sur le cloud pour Leclerc/SIPLEC. Gestion dynamique de formulaires et monitoring en temps réel.',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800',
                'technologies' => ['Angular', 'Spring Boot', 'BigQuery', 'Google Cloud', 'PostgreSQL'],
                'github_url' => 'https://github.com/titouangalles',
                'demo_url' => null,
                'featured' => true
            ],
            (object)[
                'id' => 2,
                'title' => 'Application de Gestion Formulaires',
                'description' => 'Application web permettant la gestion dynamique de formulaires avec authentification Keycloak et stockage cloud.',
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800',
                'technologies' => ['Angular', 'Spring Boot', 'Keycloak', 'PostgreSQL'],
                'github_url' => 'https://github.com/titouangalles',
                'demo_url' => null,
                'featured' => true
            ],
            (object)[
                'id' => 3,
                'title' => 'Projets IUT - Jeux & Applications',
                'description' => 'Réalisation de plusieurs projets durant ma formation : création de jeux vidéo, applications web et sites internet avec diverses technologies.',
                'image' => 'https://images.unsplash.com/photo-1511512578047-dfb367046420?w=800',
                'technologies' => ['Java', 'JavaScript', 'HTML', 'CSS', 'PHP'],
                'github_url' => 'https://github.com/titouangalles',
                'demo_url' => null,
                'featured' => true
            ],
            (object)[
                'id' => 4,
                'title' => 'Portfolio Personnel',
                'description' => 'Site portfolio moderne et responsive développé avec Laravel et Tailwind CSS, incluant mode sombre et animations.',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800',
                'technologies' => ['Laravel', 'Tailwind CSS', 'JavaScript', 'PHP'],
                'github_url' => 'https://github.com/titouangalles',
                'demo_url' => null,
                'featured' => true
            ],
        ]);

        $skills = collect([
            'Frontend' => collect([
                (object)['name' => 'HTML', 'level' => 90, 'icon' => 'fab fa-html5'],
                (object)['name' => 'CSS', 'level' => 88, 'icon' => 'fab fa-css3-alt'],
                (object)['name' => 'JavaScript', 'level' => 85, 'icon' => 'fab fa-js'],
                (object)['name' => 'Angular', 'level' => 82, 'icon' => 'fab fa-angular'],
            ]),
            'Backend' => collect([
                (object)['name' => 'PHP', 'level' => 85, 'icon' => 'fab fa-php'],
                (object)['name' => 'Java', 'level' => 88, 'icon' => 'fab fa-java'],
                (object)['name' => 'Python', 'level' => 75, 'icon' => 'fab fa-python'],
                (object)['name' => 'C++', 'level' => 70, 'icon' => 'fas fa-code'],
                (object)['name' => 'Laravel', 'level' => 80, 'icon' => 'fab fa-laravel'],
                (object)['name' => 'Spring Boot', 'level' => 85, 'icon' => 'fas fa-leaf'],
            ]),
            'Database & Cloud' => collect([
                (object)['name' => 'SQL', 'level' => 85, 'icon' => 'fas fa-database'],
                (object)['name' => 'PostgreSQL', 'level' => 82, 'icon' => 'fas fa-database'],
                (object)['name' => 'BigQuery', 'level' => 80, 'icon' => 'fas fa-cloud'],
                (object)['name' => 'Google Cloud', 'level' => 78, 'icon' => 'fab fa-google'],
            ]),
            'Tools' => collect([
                (object)['name' => 'Docker', 'level' => 80, 'icon' => 'fab fa-docker'],
                (object)['name' => 'Git', 'level' => 85, 'icon' => 'fab fa-git-alt'],
                (object)['name' => 'Keycloak', 'level' => 75, 'icon' => 'fas fa-lock'],
            ]),
        ]);

        $experiences = collect([
            (object)[
                'company' => 'Leclerc (SIPLEC)',
                'position' => 'Stage Développeur',
                'description' => 'Stage au sein de l\'équipe data. Développement d\'une interface de suivi de data sur le cloud et d\'une application de gestion dynamique de formulaires. Technologies : Angular, Spring Boot, Keycloak, BigQuery, Google Cloud, PostgreSQL.',
                'location' => 'Paris, France',
                'start_date' => Carbon::parse('2025-04-01'),
                'end_date' => Carbon::parse('2025-06-30'),
                'current' => false
            ],
            (object)[
                'company' => 'Haitza',
                'position' => 'Serveur',
                'description' => 'Service en salle dans le restaurant Haitza.',
                'location' => 'La Teste, France',
                'start_date' => Carbon::parse('2024-12-01'),
                'end_date' => Carbon::parse('2025-01-31'),
                'current' => false
            ],
            (object)[
                'company' => 'Le BIKINI',
                'position' => 'Serveur',
                'description' => 'Service en salle dans le restaurant Le Bikini.',
                'location' => 'Arcachon, France',
                'start_date' => Carbon::parse('2024-07-01'),
                'end_date' => Carbon::parse('2024-08-31'),
                'current' => false
            ],
        ]);

        $educations = collect([
            (object)[
                'school' => 'IUT de Bayonne et du Pays Basque',
                'degree' => 'BUT Informatique',
                'field' => '3ᵉ année',
                'description' => 'Formation complète en développement web et logiciel. Réalisation de plusieurs projets : création de jeux, applications et sites internet. Compétences en conception, modélisation et manipulation de bases de données.',
                'start_date' => Carbon::parse('2022-09-01'),
                'end_date' => Carbon::parse('2026-06-30'),
                'current' => true
            ],
            (object)[
                'school' => 'Lycée Grand Air',
                'degree' => 'Baccalauréat Général',
                'field' => 'Spécialités MATH/NSI',
                'description' => 'Baccalauréat général avec spécialités Mathématiques et Numérique et Sciences Informatiques.',
                'start_date' => Carbon::parse('2020-09-01'),
                'end_date' => Carbon::parse('2023-06-30'),
                'current' => false
            ],
        ]);

        return view('portfolio.index', compact('projects', 'skills', 'experiences', 'educations'));
    }

    public function projects()
    {
        $projects = collect([
            (object)[
                'id' => 1,
                'title' => 'E-Commerce Platform',
                'description' => 'Une plateforme e-commerce complète avec panier, paiement en ligne et gestion des stocks.',
                'image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?w=800',
                'technologies' => ['Laravel', 'Vue.js', 'Tailwind CSS', 'Stripe'],
                'github_url' => 'https://github.com',
                'demo_url' => 'https://demo.com',
            ],
            (object)[
                'id' => 2,
                'title' => 'Task Management App',
                'description' => 'Application de gestion de tâches collaborative avec notifications en temps réel.',
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800',
                'technologies' => ['React', 'Node.js', 'MongoDB', 'Socket.io'],
                'github_url' => 'https://github.com',
                'demo_url' => 'https://demo.com',
            ],
        ]);

        return view('portfolio.projects', compact('projects'));
    }

    public function projectDetail($id)
    {
        $project = (object)[
            'id' => $id,
            'title' => 'E-Commerce Platform',
            'description' => 'Une plateforme e-commerce complète avec panier, paiement en ligne et gestion des stocks.',
            'image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?w=800',
            'technologies' => ['Laravel', 'Vue.js', 'Tailwind CSS', 'Stripe'],
            'github_url' => 'https://github.com',
            'demo_url' => 'https://demo.com',
        ];

        $relatedProjects = collect([]);

        return view('portfolio.project-detail', compact('project', 'relatedProjects'));
    }
}
