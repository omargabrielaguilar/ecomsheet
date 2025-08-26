<?php

namespace database\factories;

use illuminate\database\eloquent\factories\factory;

/**
 * @extends \illuminate\database\eloquent\factories\factory<\app\models\product>
 */
class productfactory extends factory
{
    /**
     * define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomelement(['abc', 'dfg', 'blanket', 'sweater']),
            'description' => $this->faker->paragraph(2),
            'price' => $this->faker->numberbetween(5_00, 45_00),
        ];
    }
}
