@extends('layouts.app')

@section('title', 'Tous mes projets')

@section('content')
<div class="pt-24 pb-20 bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 dark:from-gray-900 dark:via-purple-900 dark:to-gray-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-fade-in-up">
            <h1 class="section-title">Tous mes Projets</h1>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Explorez l'ensemble de mes réalisations et projets
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            @foreach($projects as $project)
            <div class="card group animate-fade-in-up">
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
                
                <div class="flex flex-wrap gap-2 mb-4">
                    @foreach($project->technologies as $tech)
                    <span class="px-3 py-1 bg-blue-100 dark:bg-gray-700 text-blue-600 dark:text-purple-400 text-sm rounded-full">
                        {{ $tech }}
                    </span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
