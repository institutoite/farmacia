<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'laboratorio'=>Str::random(3)."FAR",
            'direccion'=> Str::random(3)."Esquina Che Guevara",
        ];
    }
}
