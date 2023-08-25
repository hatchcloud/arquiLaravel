<?php


namespace Database\Factories;
use App\Models\appointment;
use App\Models\product_package;
use App\Models\business_hour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\appointment>
 */
class appointmentFactory extends Factory
{
    protected $model = appointment::class;
    public function definition(): array
    {
        return [
            'product_package_id' => product_package::all()->random()->id,
            'business_hours_id' => business_hour::all()->random()->id,
            'date' => $this->faker->date(),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'message' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['A', 'B', 'C']),
        ];
    }
}
