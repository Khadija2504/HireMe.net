<?php

namespace Database\Seeders;

use App\Models\cursus_educatifs;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CursusEducatifsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursus = [
            ['nom_cursus_educatifs' => 'Computer Science' , 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Business Administration', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Medicine', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Engineering', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Data Science', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Artificial Intelligence', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Environmental Science', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Languages and Linguistics', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Law and Legal Studies', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Psychology and Behavioral Sciences', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Finance and Accounting', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Economics', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Marketing and Advertising', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Communication Studies', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Education and Pedagogy', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'History and Archaeology', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Political Science and International Relations', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Mathematics and Statistics', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Public Health and Epidemiology', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Sociology and Social Work', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Philosophy and Ethics', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Fine Arts and Visual Arts', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Music and Performing Arts', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Film and Media Studies', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Hospitality and Tourism Management', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Biology and Life Sciences', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Chemistry and Chemical Engineering', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Physics and Astronomy', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Geology and Earth Sciences', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Agricultural Science and Agronomy', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Anthropology and Archaeology', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Architecture and Urban Planning', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Aviation and Aeronautics', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Automotive Engineering and Technology', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Biomedical Engineering and Biotechnology', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Aerospace Engineering', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Dentistry and Dental Hygiene', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Nursing and Midwifery', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Pharmacy and Pharmacology', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Veterinary Medicine', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Computer Engineering and Hardware', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Cybersecurity and Information Assurance', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Network and Systems Administration', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Software Development and Engineering', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Web Development and Design', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Mobile App Development', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Cloud Computing and Virtualization', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Blockchain and Cryptocurrency', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Game Design and Development', 'created_at' => now(), 'updated_at' => now()],
            ['nom_cursus_educatifs' => 'Augmented Reality and Virtual Reality', 'created_at' => now(), 'updated_at' => now()],
        ];

        cursus_educatifs::insert($cursus);
    }
}
