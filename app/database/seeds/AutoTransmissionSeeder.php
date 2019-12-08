<?php

use Illuminate\Database\Seeder;

class AutoTransmissionSeeder extends Seeder
{
    public function run()
    {
        $autoTransmissions = [
            '1' => 'Автомат',
            '2' => 'Механика',
        ];

        foreach ($autoTransmissions as $autoTransmissionId => $autoTransmissionName) {
            DB::table('auto_transmissions')->insert([
                'id' => $autoTransmissionId,
                'name' => $autoTransmissionName,
            ]);
        }
    }
}
