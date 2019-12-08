<?php

use Illuminate\Database\Seeder;

class AutoDrivingSeeder extends Seeder
{
    public function run()
    {
        $autoDrivings = [
            '1' => 'Передний',
            '2' => 'Задний',
            '3' => 'Подключаемый полный',
            '4' => 'Постоянный полный',
        ];

        foreach ($autoDrivings as $autoDrivingId => $autoDrivingName) {
            DB::table('auto_drivings')->insert([
                'id' => $autoDrivingId,
                'name' => $autoDrivingName,
            ]);
        }
    }
}
