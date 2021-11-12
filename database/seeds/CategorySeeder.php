<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'category' => 'Medicines',
                'description' => 'All Medical related'
            ],
            [
                'category' => 'Foods',
                'description' => 'All food items'
            ],
            [
                'category' => 'School Supplies',
                'description' => 'All school supplies'
            ],
            [
                'category' => 'Condiments',
                'description' => 'All condiment items'
            ],
        ];
        foreach($data as $d){
            \App\Category::create($d);
        }
    }
}
