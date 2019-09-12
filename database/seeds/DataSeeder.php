<?php

use Illuminate\Database\Seeder;
use App\Data;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'date' => '2017-01-01 13:00:00',
                'value' => 65,
            ],
            [
                'date' => '2017-02-01 15:00:00',
                'value' => 59,
            ],
            [
                'date' => '2017-03-01 15:00:00',
                'value' => 80,
            ],
            [
                'date' => '2017-04-01 15:00:00',
                'value' => 81,
            ],
            [
                'date' => '2017-05-01 15:00:00',
                'value' => 56,
            ],
            [
                'date' => '2017-06-01 15:00:00',
                'value' => 55,
            ],
            [
                'date' => '2017-07-01 15:00:00',
                'value' => 40,
            ],
        ];

        foreach ($data as $item) {
            Data::create($item);
        }
    }
}