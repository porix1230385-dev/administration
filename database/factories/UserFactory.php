<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $password = Hash::make('tina2023'); // Default user password
        // $etat_user = [false,true];
        $gender = ['Masculin', 'Féminin'];
        return [
            'name' => $this->faker->name,
            'lastname' => $this->faker->lastName,
            // 'email' => $this->faker->safeEmail,
            'email' => 'admin01@gmail.com',
            'code' => strtoupper(Str::random(10)),
            'username'=>'ada',
            // 'gender' => $gender[array_rand($gender)],
            'gender' => 'Masculin',
            'phone' => $this->faker->phoneNumber,
            'address' =>$this->faker->address,
            'role_id'=>2,
            'is_active'=>false,
            'email_verified_at' => now(),
            'password' => $password, // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
