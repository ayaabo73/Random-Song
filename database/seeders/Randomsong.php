<?php

namespace Database\Seeders;

use App\Models\RandomSong as ModelsRandomSong;
use Illuminate\Database\Seeder;

class RandomSong extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsRandomSong::create([
            'name' => 'صرنا غرب',
            'singer_name' => 'فيروز',
            'quote' => ' شو يا حلو زعلان منا كيف ومنعرفو قلبك وفي ونظيف ',
        ]);
        ModelsRandomSong::create([
            'name' => ' يابعدهم كلهم ',
            'singer_name' => 'عبد المجيد ',
            'quote' => 'ياخدو لي يبونه كل هالعالم وكونه الا قلبك يتركونه ما تمسه ايدهم ',
        ]);
        ModelsRandomSong::create([
            'name' => ' جن جنوني',
            'singer_name' => 'عاصي حلاني ',
            'quote' => '  قالوا جن جنوني يا حياتي لمى تعرفت عليك قالوا بين رموش عيوني شافو النظرة لي بعينيك  ',
        ]);
    }
}
