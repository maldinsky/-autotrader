<?php

use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{

    public function run()
    {
        $autoConditions = [
            '1' => 'С пробегом',
            '2' => 'С повреждениями',
            '3' => 'На запчасти',
        ];

        foreach ($autoConditions as $autoConditionId => $autoConditionName) {
            DB::table('auto_conditions')->insert([
                'id' => $autoConditionId,
                'name' => $autoConditionName,
            ]);
        }
    }
}
