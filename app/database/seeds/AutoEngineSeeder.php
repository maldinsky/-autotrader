<?php

use Illuminate\Database\Seeder;

class AutoEngineSeeder extends Seeder
{
    public function run()
    {
        $autoEngines = [
            '1' => 'Бензин',
            '2' => 'Дизель',
            '3' => 'Электро',
        ];

        foreach ($autoEngines as $autoEngineId => $autoEngineName) {
            DB::table('auto_engine_types')->insert([
                'id' => $autoEngineId,
                'name' => $autoEngineName,
            ]);
        }
    }
}
