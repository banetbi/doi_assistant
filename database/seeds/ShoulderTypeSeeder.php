<?php

use Illuminate\Database\Seeder;

class ShoulderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\DoiAssistant\ShoulderType::truncate();
        $arrShoulderTypes = [
            'ARK',
            'DOI'
        ];
        foreach($arrShoulderTypes as $value) {
            $objShoulderType = new DoiAssistant\ShoulderType();
            $objShoulderType->name = $value;
            $objShoulderType->save();
        }
    }
}
