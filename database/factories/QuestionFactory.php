<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        0 =>  [
            'questionId' => '1',
            'name' => 'Choose your favorite color:',
            'text' => 'Black/Green/Red',
        ],
            1 =>  [
                'questionId' => '2',
                'name' => 'What is your favorite subject?',
                'text' => 'Math/Informatic/Geography',
            ],
                2 =>  [
                    'questionId' => '3',
                    'name' => 'Do you like math?',
                    'text' => 'Yes/No',
                    ]
        ];
    }
}
