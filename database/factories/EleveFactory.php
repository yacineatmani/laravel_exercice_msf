<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Eleve;

class EleveFactory extends Factory
{
    protected $model = Eleve::class;

    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'age' => $this->faker->numberBetween(16, 50),
            'demandeur_emploi' => $this->faker->boolean,
        ];
    }
}