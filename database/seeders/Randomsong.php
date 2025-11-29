<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class Randomsong extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Song::create([
            'name' => 'فيروز',
            'name_song' => 'صرنا غرب',
            'body' => ' شو يا حلو زعلان منا كيف ومنعرفو قلبك وفي ونظيف ',
        ]);
        Song::create([
            'name' => 'عبد المجيد ',
            'name_song' => ' يابعدهم كلهم ',
            'body' => 'ياخدو لي يبونه كل هالعالم وكونه الا قلبك يتركونه ما تمسه ايدهم ',
        ]);
        Song::create([
            'name' => 'عاصي حلاني ',
            'name_song' => ' جن جنوني',
            'body' => '  قالوا جن جنوني يا حياتي لمى تعرفت عليك قالوا بين رموش عيوني شافو النظرة لي بعينيك  ',
        ]);
    }
}
