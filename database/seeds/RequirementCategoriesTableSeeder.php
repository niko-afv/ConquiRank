<?php

use Illuminate\Database\Seeder;

class RequirementCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Secretaría',
            'Comunión',
            'Misión',
            'Relacionamiento',
            'Discipulado'
        ];
        foreach ($categories as $category){
            DB::table('requirement_categories')->insert([
                'name' => $category,
            ]);
        }
    }
}
