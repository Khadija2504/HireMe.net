<?php

namespace Database\Seeders;

use App\Models\competences;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $competences = [
            ['nom_competence' => 'Programming'],
            ['nom_competence' => 'Database Management'],
            ['nom_competence' => 'Web Development'],
            ['nom_competence' => 'Mobile App Development'],
            ['nom_competence' => 'UI/UX Design'],
            ['nom_competence' => 'Project Management'],
            ['nom_competence' => 'Data Analysis'],
            ['nom_competence' => 'Machine Learning'],
            ['nom_competence' => 'Data Science'],
            ['nom_competence' => 'Cybersecurity'],
            ['nom_competence' => 'Network Administration'],
            ['nom_competence' => 'Cloud Computing'],
            ['nom_competence' => 'DevOps'],
            ['nom_competence' => 'Quality Assurance'],
            ['nom_competence' => 'Agile Methodologies'],
            ['nom_competence' => 'Scrum'],
            ['nom_competence' => 'Kanban'],
            ['nom_competence' => 'Software Testing'],
            ['nom_competence' => 'Artificial Intelligence'],
            ['nom_competence' => 'Natural Language Processing'],
            ['nom_competence' => 'Computer Vision'],
            ['nom_competence' => 'Robotics'],
            ['nom_competence' => 'Embedded Systems'],
            ['nom_competence' => 'Blockchain'],
            ['nom_competence' => 'Cryptocurrency'],
            ['nom_competence' => 'Digital Marketing'],
            ['nom_competence' => 'Content Writing'],
            ['nom_competence' => 'SEO'],
            ['nom_competence' => 'Social Media Management'],
        ];

        competences::insert($competences);
    }
}
