<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function Symfony\Component\Translation\t;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $titre = $this->faker->text(50);
        return [
            'etat_id' => rand(1, 2),
            'titre' => $titre,
            'slug' => Str::slug($titre),
            'image' => 'storage/img/articles/image-article-test.png',
            'meta_titre' => $this->faker->text(50),
            'meta_description' => $this->faker->text(150),
            'description' => $this->faker->text(500),
            'date_publication' => '10 décembre 2021',
            'date_publication_order' => $this->faker->date,
            'contenu' => $this->faker->text(3000),
            'temps_lecture' => $this->faker->numberBetween(2, 20)
        ];
    }
}
