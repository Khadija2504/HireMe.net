<?php

namespace Database\Seeders;

use App\Models\langues_maitrisees as ModelsLangues_maitrisees;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class langues_maitrisees extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            'English',
            'French',
            'Spanish',
            'German',
            'Mandarin',
            'Arabic',
            'Russian',
            'Portuguese',
            'Japanese',
            'Italian',
            'Hindi',
            'Bengali',
            'Korean',
            'Dutch',
            'Turkish',
            'Polish',
            'Thai',
            'Swedish',
            'Indonesian',
            'Greek',
            'Vietnamese',
            'Romanian',
            'Czech',
            'Hungarian',
            'Danish',
            'Finnish',
            'Norwegian',
            'Hebrew',
            'Catalan',
            'Malay',
            'Tagalog',
            'Slovak',
            'Ukrainian',
            'Lithuanian',
            'Bulgarian',
            'Croatian',
            'Serbian',
            'Slovenian',
            'Latvian',
            'Estonian',
            'Icelandic',
            'Farsi',
            'Urdu',
            'Gujarati',
            'Punjabi',
            'Telugu',
            'Tamil',
            'Marathi',
        ];

        foreach ($languages as $language) {
            ModelsLangues_maitrisees::create(['nom_langues_maitrisees' => $language]);
        }
    }
}
