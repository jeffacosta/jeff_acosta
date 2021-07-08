<?php

namespace Database\Factories;

use App\Models\Declaracion;
use App\Models\Validacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ValidacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Validacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_declaracion'=>Declaracion::factory(),
            'id_firma' => '1235456',
            'validacion' => 'aprobada',
            'departamento' => 'ciencias',
        ];
    }
}
