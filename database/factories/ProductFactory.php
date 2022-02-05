<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->firstname(),
            'description'=> $this->faker->sentence(5),
            'price'=> rand(1,100),
            //nes sukuri tik tris kategorijas, category_id negali buti didesnis uz 3
            'category_id'=> rand (1,3),
            'image_url' => $this->faker->imageUrl()

        ];
    }
}
