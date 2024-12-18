<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\ElementInstance;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $elementInstance1 = ElementInstance::create([
            "element_id" => 1,
            "location_id" => 3,
            "description" => "Puerta A1",
        ]);

        $elementInstance2 = ElementInstance::create([
            "element_id" => 2,
            "location_id" => 4,
            "description" => "Rampa B1",
        ]);

        $assessments = [
            [
                "user_id" => 2,
                "element_instance_id" => $elementInstance1->id,
            ],
            [
                "user_id" => 2,
                "element_instance_id" => $elementInstance2->id,
            ],
        ];

        foreach ($assessments as $assessmentData) {
            Assessment::create($assessmentData);
        }
    }
}
