<?php

namespace Database\Factories;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ShopFactory extends Factory
{
    protected $model = Shop::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'name' => $this->faker->name(),
            'item' => $this->faker->text(100),
            'stock' => $this->faker->text,
            'testing' => $this->faker->text,
      

        ];
    }
}
