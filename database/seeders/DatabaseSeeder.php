<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Batiment;
use App\Models\Formation;
use App\Models\TypeFormation;
use App\Models\Eleve;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1 bâtiment
        Batiment::create([
            'nom' => 'Bâtiment Principal',
            'description' => 'Le bâtiment principal du campus.',
        ]);

        // 6 formations
        Formation::create([
            'nom' => 'Développement Web',
            'description' => 'Formation intensive en développement web.',
        ]);
        Formation::create([
            'nom' => 'Marketing Digital',
            'description' => 'Apprendre les bases du marketing en ligne.',
        ]);
        Formation::create([
            'nom' => 'Design Graphique',
            'description' => 'Création de visuels professionnels.',
        ]);
        Formation::create([
            'nom' => 'Cybersécurité',
            'description' => 'Protéger les systèmes informatiques.',
        ]);
        Formation::create([
            'nom' => 'Intelligence Artificielle',
            'description' => 'Introduction à l’IA.',
        ]);
        Formation::create([
            'nom' => 'Gestion de Projet',
            'description' => 'Méthodologies agiles et Scrum.',
        ]);

        // 10 types de formations
        TypeFormation::create(['nom' => 'Coding School 1']);
        TypeFormation::create(['nom' => 'Coding School 2']);
        TypeFormation::create(['nom' => 'Marketing Lab 1']);
        TypeFormation::create(['nom' => 'Marketing Lab 2']);
        TypeFormation::create(['nom' => 'Design Academy 1']);
        TypeFormation::create(['nom' => 'Design Academy 2']);
        TypeFormation::create(['nom' => 'Cyber Training 1']);
        TypeFormation::create(['nom' => 'Cyber Training 2']);
        TypeFormation::create(['nom' => 'AI Workshop 1']);
        TypeFormation::create(['nom' => 'AI Workshop 2']);

        // 50 élèves via factory
        Eleve::factory()->count(50)->create();
    }
}