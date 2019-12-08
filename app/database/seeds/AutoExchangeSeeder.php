<?php

use Illuminate\Database\Seeder;

class AutoExchangeSeeder extends Seeder
{
    public function run()
    {
        $autoExchanges = [
            '1' => 'Не интересует',
            '2' => 'Любые варианты',
            '3' => 'С вашей доплатой',
            '4' => 'С моей доплатой',
        ];

        foreach ($autoExchanges as $autoExchangeId => $autoExchangeName) {
            DB::table('auto_exchanges')->insert([
                'id' => $autoExchangeId,
                'name' => $autoExchangeName,
            ]);
        }
    }
}
