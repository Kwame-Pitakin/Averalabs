<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test_Sample>
 */
class Test_SampleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sample_name'=>$this->faker->unique()->randomElement([
                'blood',
                'Saliva',
                'urine',
                'body tissue',
                'feaces',
                'sweat',
                'swap'
            ])
        ];
    }
}
