<?php

namespace Database\Factories;

use App\Models\DonViHanhChinhHuyen;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonViHanhChinhXaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $huyens = DonViHanhChinhHuyen::pluck('id')->toArray();
        return [
            //
            'ma' => fake()->unique()->name(),
            'ten' => fake()->name(),
            'don_vi_hanh_chinh_huyen_id' => fake()->randomElement($huyens),
        ];
    }
}
