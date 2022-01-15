<?php

namespace Database\Factories;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function Symfony\Component\Translation\t;

class ProjetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Projet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nom = $this->faker->company;
        return [
            'etat_id' => 2,
            'client' => $nom,
            'logo' => 'storage/img/projets/logos/logo-mtom.png',
            'slug' => Str::slug($nom),
            'meta_titre' => $this->faker->text(60),
            'meta_description' => $this->faker->text(160),
            'image' => 'storage/img/projets/img/image-projet-test.png',
            'demande' => $this->faker->paragraphs(3, true),
            'reponse' => $this->faker->paragraphs(4, true),
            'image_reponse' => 'storage/img/projets/img/image-reponse-test.png',
            'date_publication' => 'Projet mis en ligne le 10 dec 2021',
            'date_publication_order' => $this->faker->date,
            'lien_site' => 'https://aurapaiements.com/'
        ];
    }
}
