<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'building' => $this->faker->word,
            'category' => $this->faker->randomElement([
                '商品のお届けについて',
                '商品の交換について',
                '商品トラブル',
                'ショップへのお問い合わせ',
                'その他',
            ]),
            'content' => $this->faker->sentence(10),
        ];
    }
}
