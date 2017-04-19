<?php

use Illuminate\Database\Seeder;

class ShoulderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DoiAssistant\Shoulder::truncate();
        $arrShoulders = [
            'ark:/81220/w2' => ['name' => 'College of William & Mary Libraries ARK', 'shoulder_type' => 1],
            'doi:10.21220/M2' => ['name' => 'College of William & Mary Libraries DOI', 'shoulder_type' => 2],
            'doi:10.21220/S2' => ['name' => 'William & Mary Library - Arts & Sciences DOI', 'shoulder_type' => 2],
            'doi:10.21220/B3' => ['name' => 'William & Mary Library - Mason School of Business DOI', 'shoulder_type' => 2],
            'doi:10.21220/W4' => ['name' => 'William & Mary Library - School of Education DOI', 'shoulder_type' => 2],
            'doi:10.21220/V5' => ['name' => 'William & Mary Library - VIMS DOI', 'shoulder_type' => 2]
        ];
        foreach($arrShoulders as $id => $arrDetails) {
            $objShoulder = new DoiAssistant\Shoulder();
            $objShoulder->shoulder_id = $id;
            $objShoulder->name = $arrDetails['name'];
            $objShoulder->shoulder_type_id = $arrDetails['shoulder_type'];
            $objShoulder->save();
        }
    }
}
