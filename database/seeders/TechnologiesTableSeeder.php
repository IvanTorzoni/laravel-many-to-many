<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tecnologies = [
            [
                'name' => 'PHP',
                'color' => 'blue',
            ],
            [
                'name' => 'Laravel',
                'color' => 'red',
            ],
            [
                'name' => 'Vue',
                'color' => 'green',
            ],
            [
                'name' => 'Angulare',
                'color' => 'yellow',
            ],
        ];

        foreach ($tecnologies as $tecnology) {
            $newTech = new Technology();
            $newTech->name = $tecnology['name'];
            $newTech->color = $tecnology['color'];
            $newTech->save();
        }
    }
}
