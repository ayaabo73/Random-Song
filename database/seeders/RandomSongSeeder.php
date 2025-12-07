<?php

namespace Database\Seeders;

use App\Models\Singer;
use Illuminate\Database\Seeder;

class RandomSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =
        [

            [
                'name' => 'فيروز ',
                'songs' => 
                [
                    ['name' => 'صرنا غرب',
                        'quotes' =>
                      [
                        [
                            'body' => ' شو يا حلو زعلان منا كيف ومنعرفو قلبك وفي ونظيف ',
                        ],

                        [
                            'body' => ' على القليلة مروق ودعنا ',
                        ],
                      ],
                    ],
                ],
            ],

            [
                'name' => 'عاصي حلاني  ',
                'songs' =>
                 [
                    ['name' => ' جن جنوني ',
                        'quotes' =>
                     [   [
                            'body' => '  قالوا جن جنوني يا حياتي لمى تعرفت عليك قالوا بين رموش عيوني شافو النظرة لي بعيني',
                        ],
                    ],
                    ],
                ],
            ],

        ];

        foreach ($data as $element)
         {
            $singer = Singer::create([
                'name' => $element['name'],
            ]);

            foreach ($element['songs'] as $songdata) 
            {
                $song = $singer->song()->create([

                    'name' => $songdata['name'],
                ]);
                foreach ($songdata['quotes'] as $quote)
                 {
                    $song->quote()->create([

                        'body' => $quote['body'],
                    ]);
                }
            }

        }
    }
}
