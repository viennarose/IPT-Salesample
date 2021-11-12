<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
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
                'unit_type' => 'Kilograms',
                'description' => 'English Weight unit'
            ],
            [
                'unit_type' => 'pieces',
                'description' => 'Piece by piece items'
            ],
            [
                'unit_type' => 'bottles',
                'description' => 'unit for bottled beverages'
            ],
            [
                'unit_type' => 'dozens',
                'description' => 'units of group of 12'
            ],
        ];
        foreach($data as $d){
            \App\Unit::create($d);
        }
    }
}
