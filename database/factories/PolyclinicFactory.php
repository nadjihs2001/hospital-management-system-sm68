<?php

namespace Database\Factories;

use App\Models\Polyclinic;
use Illuminate\Database\Eloquent\Factories\Factory;

class PolyclinicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Polyclinic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->unique()->randomElement(['قسم المخ والاعصاب','قسم الجراحة','قسم الاطفال','قسم النساء والتوليد','قسم العيون','قسم الباطنة']),
            'description'=>$this->faker->paragraph
        ];
    }
}
