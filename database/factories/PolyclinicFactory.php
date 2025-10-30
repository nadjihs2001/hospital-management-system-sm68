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
            'name' => $this->faker->unique()->randomElement(['عيادة المخ والاعصاب','عيادة الجراحة','عيادة الاطفال','عيادة النساء والتوليد','عيادة العيون','عيادة الباطنة']),
            'description'=>$this->faker->paragraph
        ];
    }
}

