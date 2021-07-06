<?php

namespace Database\Factories;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'nombre' => $this-> faker ->name(),
            'primerApellido' => 'Perez',
            'segundoApellido'=> 'Obando',
            'unidadAcademica'=> 'Docente',
        ];
    }
}
