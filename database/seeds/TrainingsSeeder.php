<?php

use Illuminate\Database\Seeder;
use App\Training;

class TrainingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Training::create([
            'title' => 'Peitoral',
            'subtitle' => 'Barras e Halteres',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac placerat mi. Praesent vel orci enim. Curabitur quis rutrum arcu, in interdum nisi.',
            'banner' => 'b1.jpg'
        ]);

        Training::create([
            'title' => 'Costas',
            'subtitle' => '4 Exercícios | Bi-Sets & Tri-Sets',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac placerat mi. Praesent vel orci enim. Curabitur quis rutrum arcu, in interdum nisi.',
            'banner' => 'b2.jpg'
        ]);
        
        Training::create([
            'title' => 'Membros Inferiores',
            'subtitle' => '3 Exercícios | Extensora & Flexora',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac placerat mi. Praesent vel orci enim. Curabitur quis rutrum arcu, in interdum nisi.',
            'banner' => 'b3.jpg'
        ]);
    }
}
