<?php

use Illuminate\Database\Seeder;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assessments')->insert([
            'assessment' => "Péssimo",
        ]);

        DB::table('assessments')->insert([
            'assessment' => "Muito ruim",
        ]);

        DB::table('assessments')->insert([
            'assessment' => "Ruim",
        ]);

        DB::table('assessments')->insert([
            'assessment' => "Boa",
        ]);

        DB::table('assessments')->insert([
            'assessment' => "Muito boa",
        ]);

        DB::table('assessments')->insert([
            'assessment' => "Excelente",
        ]);
    }
}
