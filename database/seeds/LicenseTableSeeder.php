<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DoiAssistant\License::truncate();
        $arrLicenseOptions = [
            'CC BY' => 'http://creativecommons.org/licenses/by/4.0/',
            'CC BY-SA' => 'http://creativecommons.org/licenses/by-sa/4.0/',
            'CC BY-ND' => 'http://creativecommons.org/licenses/by-nd/4.0/',
            'CC BY-NC' => 'http://creativecommons.org/licenses/by-nc/4.0/',
            'CC BY-NC-SA' => 'http://creativecommons.org/licenses/by-nc-sa/4.0/',
            'CC BY-3' => 'http://creativecommons.org/licenses/by/3.0/',
            'CC BY-NC-3' => 'http://creativecommons.org/licenses/by-nc/3.0/',
            'CC BY-NC-ND-3' => 'http://creativecommons.org/licenses/by-nc-nd/3.0/',
            'CC BY-NC-SA-3' => 'http://creativecommons.org/licenses/by-nc-sa/3.0/',
            'CC BY-ND-3' => 'http://creativecommons.org/licenses/by-nd/3.0/',
            'CC BY-SA-3' => 'http://creativecommons.org/licenses/by-sa/3.0/',
            'CC0' => 'http://creativecommons.org/publicdomain/zero/1.0/'
        ];
        foreach($arrLicenseOptions as $abbreviation => $value) {
            $objLicense = new DoiAssistant\License();
            $objLicense->abbreviation = $abbreviation;
            $objLicense->url = $value;
            $objLicense->save();
        }
    }
}
