<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanySeeder::class);
        $this->call(BudgetSeeder::class);
        $this->call(TypeDeviceSeeder::class);
        $this->call(QuestionnaireSeeder::class);
        $this->call(TypeMeasureSeeder::class);
        $this->call(InterventionSeeder::class);
        $this->call(ProbabilitySeeder::class);
        $this->call(RiskSeeder::class);
        $this->call(ImpactSeeder::class);
        $this->call(ReportSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DeviceSeeder::class);
        $this->call(EmblemSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ResourceFileSeeder::class);
        $this->call(ResourceURLSeeder::class);
        $this->call(ResourceTextSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(DeliverySeeder::class);
        $this->call(GradeSeeder::class);
       // $this->call(RatingSeeder::class);
        //$this->call(CourseUserSeeder::class);
        $this->call(QuestionnaireUserSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(QuestionQuestionnaireSeeder::class);
        $this->call(AnswerSeeder::class);
        $this->call(ResultSeeder::class);
        $this->call(TaskSeeder::class);
    }
}
