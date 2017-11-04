<?php

use Illuminate\Database\Seeder;

class ClubesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clubes = [
            'Rejas Sur',
            'Provenir',
            'Exploradores',
            'K2',
            'Melipangui',
            'Niños De Israel',
            'Republica De Francia',
            'Zorros De Las Condes',
            'Alameda'
        ];

        foreach ($clubes as $club){
            DB::table('clubes')->insert([
                'name' => $club,
            ]);
        }
    }
}
