<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Test;

use Illuminate\Support\Str;


class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => 'sample question one',
                'question_id' => Str::uuid()->toString(),
                'option_count' => 4,
            ],
            [
                'question' => 'sample question two',
                'question_id' => Str::uuid()->toString(),
                'option_count' => 3,
            ],
            [
                'question' => 'sample question three',
                'question_id' => Str::uuid()->toString(),
                'option_count' => 5,
            ],
            [
                'question' => 'sample question four',
                'question_id' => Str::uuid()->toString(),
                'option_count' => 4,
            ],
            [
                'question' => 'sample question five',
                'question_id' => Str::uuid()->toString(),
                'option_count' => 4,
            ],
            // [
            //     'question' => 'sample question six',
            //     'question_id' => Str::uuid()->toString(),
            //     'option_count' => 6,
            // ],
            // [
            //     'question' => 'sample question seven',
            //     'question_id' => Str::uuid()->toString(),
            //     'option_count' => 4,
            // ],
            // [
            //     'question' => 'sample question eight',
            //     'question_id' => Str::uuid()->toString(),
            //     'option_count' => 3,
            // ],
            // [
            //     'question' => 'sample question nine',
            //     'question_id' => Str::uuid()->toString(),
            //     'option_count' => 5,
            // ],
            // [
            //     'question' => 'sample question ten',
            //     'question_id' => Str::uuid()->toString(),
            //     'option_count' => 4,
            // ],
            // [
            //     'question' => 'sample question eleven',
            //     'question_id' => Str::uuid()->toString(),
            //     'option_count' => 4,
            // ],
            // [
            //     'question' => 'sample question twelve',
            //     'question_id' => Str::uuid()->toString(),
            //     'option_count' => 6,
            // ],
        ];

        foreach ($questions as $question) {
            $temp = Test::firstOrCreate($question);
        }
    }
}
