<?php

namespace Database\Factories;

use App\Models\Telefono;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class TelefonoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Telefono::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'persona_id'=>Persona::factory(),
            'numerotelefono' => '1235456',
        ];
    }
}
