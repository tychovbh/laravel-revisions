<?php

namespace Tychovbh\LaravelRevisions\TestsApp\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tychovbh\LaravelRevisions\TestsApp\App\Models\Page;

class PageFactory extends Factory
{
    /**
     * @var string
     */
    protected string $model = Page::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => fake()->title,
            'url' => fake()->url,
        ];
    }
}
