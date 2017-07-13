<?php

use Illuminate\Database\Seeder;

class SubjectCrosswalkTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subject_crosswalk')->delete();
        
        \DB::table('subject_crosswalk')->insert(array (
            0 => 
            array (
                'id' => 1,
                'proquest_subject' => 'Fashion',
                'proquest_code' => '0200',
                'digital_commons_discipline' => 'Fashion Design',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'proquest_subject' => 'Creative writing',
                'proquest_code' => '0203',
                'digital_commons_discipline' => 'Creative Writing',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'proquest_subject' => 'Art education',
                'proquest_code' => '0273',
                'digital_commons_discipline' => 'Art Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'proquest_subject' => 'Community college education',
                'proquest_code' => '0275',
                'digital_commons_discipline' => 'Higher Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'proquest_subject' => 'Education finance',
                'proquest_code' => '0277',
                'digital_commons_discipline' => 'Education Economics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'proquest_subject' => 'Home economics education',
                'proquest_code' => '0278',
                'digital_commons_discipline' => 'Home Economics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'proquest_subject' => 'Language arts',
                'proquest_code' => '0279',
                'digital_commons_discipline' => 'Language and Literacy Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'proquest_subject' => 'Mathematics education',
                'proquest_code' => '0280',
                'digital_commons_discipline' => 'Science and Mathematics Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'proquest_subject' => 'Urban forestry',
                'proquest_code' => '0281',
                'digital_commons_discipline' => 'Other Forestry and Forest Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'proquest_subject' => 'Bilingual education',
                'proquest_code' => '0282',
                'digital_commons_discipline' => 'Bilingual, Multilingual, and Multicultural Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'proquest_subject' => 'Wildlife conservation',
                'proquest_code' => '0284',
                'digital_commons_discipline' => 'Natural Resources and Conservation',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'proquest_subject' => 'Agronomy',
                'proquest_code' => '0285',
                'digital_commons_discipline' => 'Agronomy and Crop Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'proquest_subject' => 'Wildlife management',
                'proquest_code' => '0286',
                'digital_commons_discipline' => 'Natural Resources Management and Policy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'proquest_subject' => 'Morphology',
                'proquest_code' => '0287',
                'digital_commons_discipline' => 'Morphology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'proquest_subject' => 'Educational tests & measurements',
                'proquest_code' => '0288',
                'digital_commons_discipline' => 'Educational Assessment, Evaluation, and Research',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'proquest_subject' => 'Ancient languages',
                'proquest_code' => '0289',
                'digital_commons_discipline' => 'Language and Literature',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'proquest_subject' => 'Linguistics',
                'proquest_code' => '0290',
                'digital_commons_discipline' => 'Linguistics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'proquest_subject' => 'Modern language',
                'proquest_code' => '0291',
                'digital_commons_discipline' => 'Modern Languages',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'proquest_subject' => 'African studies',
                'proquest_code' => '0293',
                'digital_commons_discipline' => 'African Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'proquest_subject' => 'Classical literature',
                'proquest_code' => '0294',
                'digital_commons_discipline' => 'Classical Literature and Philology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'proquest_subject' => 'Comparative literature',
                'proquest_code' => '0295',
                'digital_commons_discipline' => 'Comparative Literature',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'proquest_subject' => 'African American studies',
                'proquest_code' => '0296',
                'digital_commons_discipline' => 'African American Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'proquest_subject' => 'Medieval literature',
                'proquest_code' => '0297',
                'digital_commons_discipline' => 'Medieval Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'proquest_subject' => 'Modern literature',
                'proquest_code' => '0298',
                'digital_commons_discipline' => 'Modern Literature',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'proquest_subject' => 'Audiology',
                'proquest_code' => '0300',
                'digital_commons_discipline' => 'Speech Pathology and Audiology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'proquest_subject' => 'Biographies',
                'proquest_code' => '0304',
                'digital_commons_discipline' => 'History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'proquest_subject' => 'Asian literature',
                'proquest_code' => '0305',
                'digital_commons_discipline' => 'Asian Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'proquest_subject' => 'Biology',
                'proquest_code' => '0306',
                'digital_commons_discipline' => 'Biology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'proquest_subject' => 'Molecular biology',
                'proquest_code' => '0307',
                'digital_commons_discipline' => 'Molecular Biology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'proquest_subject' => 'Biostatistics',
                'proquest_code' => '0308',
                'digital_commons_discipline' => 'Biostatistics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'proquest_subject' => 'Botany',
                'proquest_code' => '0309',
                'digital_commons_discipline' => 'Botany',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'proquest_subject' => 'Business administration',
                'proquest_code' => '0310',
                'digital_commons_discipline' => 'Business Administration, Management, and Operations',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'proquest_subject' => 'German literature',
                'proquest_code' => '0311',
                'digital_commons_discipline' => 'German Literature',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'proquest_subject' => 'Latin American literature',
                'proquest_code' => '0312',
                'digital_commons_discipline' => 'Latin American Literature',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'proquest_subject' => 'Romance literature',
                'proquest_code' => '0313',
                'digital_commons_discipline' => 'Language and Literature',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'proquest_subject' => 'Slavic literature',
                'proquest_code' => '0314',
                'digital_commons_discipline' => 'Eastern European Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'proquest_subject' => 'Middle Eastern literature',
                'proquest_code' => '0315',
                'digital_commons_discipline' => 'Near and Middle Eastern Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'proquest_subject' => 'African literature',
                'proquest_code' => '0316',
                'digital_commons_discipline' => 'African Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'proquest_subject' => 'Neurosciences',
                'proquest_code' => '0317',
                'digital_commons_discipline' => 'Neurosciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'proquest_subject' => 'Religion',
                'proquest_code' => '0318',
                'digital_commons_discipline' => 'Religion',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'proquest_subject' => 'Clergy',
                'proquest_code' => '0319',
                'digital_commons_discipline' => 'Other Religion',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'proquest_subject' => 'Religious history',
                'proquest_code' => '0320',
                'digital_commons_discipline' => 'History of Religion',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'proquest_subject' => 'Biblical studies',
                'proquest_code' => '0321',
                'digital_commons_discipline' => 'Biblical Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'proquest_subject' => 'Philosophy of religion',
                'proquest_code' => '0322',
                'digital_commons_discipline' => 'Religious Thought, Theology and Philosophy of Religion',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'proquest_subject' => 'American studies',
                'proquest_code' => '0323',
                'digital_commons_discipline' => 'American Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'proquest_subject' => 'Archaeology                                           ',
                'proquest_code' => '0324',
                'digital_commons_discipline' => 'History of Art, Architecture, and Archaeology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'proquest_subject' => 'Black studies',
                'proquest_code' => '0325',
                'digital_commons_discipline' => 'African American Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'proquest_subject' => 'Physical anthropology',
                'proquest_code' => '0327',
                'digital_commons_discipline' => 'Biological and Physical Anthropology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'proquest_subject' => 'Black history',
                'proquest_code' => '0328',
                'digital_commons_discipline' => 'African History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'proquest_subject' => 'Ecology',
                'proquest_code' => '0329',
                'digital_commons_discipline' => 'Ecology and Evolutionary Biology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'proquest_subject' => 'African history',
                'proquest_code' => '0331',
                'digital_commons_discipline' => 'African History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'proquest_subject' => 'Asian history',
                'proquest_code' => '0332',
                'digital_commons_discipline' => 'Asian History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'proquest_subject' => 'Middle Eastern history',
                'proquest_code' => '0333',
                'digital_commons_discipline' => 'Islamic World and Near East History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'proquest_subject' => 'Canadian history',
                'proquest_code' => '0334',
                'digital_commons_discipline' => 'Canadian History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'proquest_subject' => 'European history',
                'proquest_code' => '0335',
                'digital_commons_discipline' => 'European History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'proquest_subject' => 'Latin American history',
                'proquest_code' => '0336',
                'digital_commons_discipline' => 'Latin American History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'proquest_subject' => 'American history',
                'proquest_code' => '0337',
                'digital_commons_discipline' => 'United States History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'proquest_subject' => 'Marketing',
                'proquest_code' => '0338',
                'digital_commons_discipline' => 'Marketing',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'proquest_subject' => 'Forensic anthropology',
                'proquest_code' => '0339',
                'digital_commons_discipline' => 'Biological and Physical Anthropology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'proquest_subject' => 'Educational sociology',
                'proquest_code' => '0340',
                'digital_commons_discipline' => 'Educational Sociology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'proquest_subject' => 'Area planning and development        ',
                'proquest_code' => '0341',
                'digital_commons_discipline' => 'Urban Studies and Planning',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'proquest_subject' => 'Asian studies',
                'proquest_code' => '0342',
                'digital_commons_discipline' => 'Asian Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'proquest_subject' => 'Asian American studies',
                'proquest_code' => '0343',
                'digital_commons_discipline' => 'Asian American Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'proquest_subject' => 'Social research',
                'proquest_code' => '0344',
                'digital_commons_discipline' => 'Social and Behavioral Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'proquest_subject' => 'Mechanics',
                'proquest_code' => '0346',
                'digital_commons_discipline' => 'Applied Mechanics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'proquest_subject' => 'Mental health',
                'proquest_code' => '0347',
                'digital_commons_discipline' => 'Psychiatric and Mental Health',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'proquest_subject' => 'Psychobiology',
                'proquest_code' => '0349',
                'digital_commons_discipline' => 'Biological Psychology; Behavioral Neurobiology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'proquest_subject' => 'Gerontology',
                'proquest_code' => '0351',
                'digital_commons_discipline' => 'Gerontology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'proquest_subject' => 'Canadian literature',
                'proquest_code' => '0352',
                'digital_commons_discipline' => 'Language and Literature',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'proquest_subject' => 'Entomology',
                'proquest_code' => '0353',
                'digital_commons_discipline' => 'Entomology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'proquest_subject' => 'Occupational safety',
                'proquest_code' => '0354',
                'digital_commons_discipline' => 'Occupational Health and Industrial Hygiene',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'proquest_subject' => 'French Canadian literature',
                'proquest_code' => '0355',
                'digital_commons_discipline' => 'Language and Literature',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'proquest_subject' => 'Australian literature',
                'proquest_code' => '0356',
                'digital_commons_discipline' => 'Australian Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'proquest_subject' => 'Fine arts',
                'proquest_code' => '0357',
                'digital_commons_discipline' => 'Fine Arts',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'proquest_subject' => 'Folklore',
                'proquest_code' => '0358',
                'digital_commons_discipline' => 'Folklore',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'proquest_subject' => 'Food science',
                'proquest_code' => '0359',
                'digital_commons_discipline' => 'Food Science',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'proquest_subject' => 'Caribbean literature',
                'proquest_code' => '0360',
                'digital_commons_discipline' => 'Caribbean Languages and Societies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'proquest_subject' => 'Baltic studies',
                'proquest_code' => '0361',
                'digital_commons_discipline' => 'Eastern European Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'proquest_subject' => 'Icelandic & Scandinavian literature',
                'proquest_code' => '0362',
                'digital_commons_discipline' => 'Scandinavian Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'proquest_subject' => 'Alternative energy',
                'proquest_code' => '0363',
                'digital_commons_discipline' => 'Oil, Gas, and Energy; Environmental Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'proquest_subject' => 'Applied mathematics',
                'proquest_code' => '0364',
                'digital_commons_discipline' => 'Applied Mathematics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'proquest_subject' => 'Art criticism',
                'proquest_code' => '0365',
                'digital_commons_discipline' => 'Theory and Criticism',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'proquest_subject' => 'Geography',
                'proquest_code' => '0366',
                'digital_commons_discipline' => 'Geography',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'proquest_subject' => 'Aeronomy',
                'proquest_code' => '0367',
                'digital_commons_discipline' => 'Atmospheric Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'proquest_subject' => 'Physical geography',
                'proquest_code' => '0368',
                'digital_commons_discipline' => 'Physical and Environmental Geography',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'proquest_subject' => 'Genetics',
                'proquest_code' => '0369',
                'digital_commons_discipline' => 'Genetics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'proquest_subject' => 'Geographic information science and geodesy',
                'proquest_code' => '0370',
                'digital_commons_discipline' => 'Geographic Information Sciences; Earth Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'proquest_subject' => 'Atmospheric chemistry',
                'proquest_code' => '0371',
                'digital_commons_discipline' => 'Atmospheric Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'proquest_subject' => 'Geology',
                'proquest_code' => '0372',
                'digital_commons_discipline' => 'Geology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'proquest_subject' => 'Geophysics',
                'proquest_code' => '0373',
                'digital_commons_discipline' => 'Geophysics and Seismology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'proquest_subject' => 'Canon law',
                'proquest_code' => '0375',
                'digital_commons_discipline' => 'Religion Law',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'proquest_subject' => 'Divinity',
                'proquest_code' => '0376',
                'digital_commons_discipline' => 'Religion',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'proquest_subject' => 'Art history',
                'proquest_code' => '0377',
                'digital_commons_discipline' => 'History of Art, Architecture, and Archaeology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'proquest_subject' => 'Dance',
                'proquest_code' => '0378',
                'digital_commons_discipline' => 'Dance',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'proquest_subject' => 'Cellular biology',
                'proquest_code' => '0379',
                'digital_commons_discipline' => 'Cell Biology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'proquest_subject' => 'Obstetrics',
                'proquest_code' => '0380',
                'digital_commons_discipline' => 'Obstetrics and Gynecology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'proquest_subject' => 'Ophthalmology',
                'proquest_code' => '0381',
                'digital_commons_discipline' => 'Ophthalmology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'proquest_subject' => 'Physical therapy',
                'proquest_code' => '0382',
                'digital_commons_discipline' => 'Physical Therapy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'proquest_subject' => 'Toxicology',
                'proquest_code' => '0383',
                'digital_commons_discipline' => 'Toxicology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'proquest_subject' => 'Behavioral psychology',
                'proquest_code' => '0384',
                'digital_commons_discipline' => 'Behavior and Behavior Mechanisms; Psychology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'proquest_subject' => 'Canadian studies',
                'proquest_code' => '0385',
                'digital_commons_discipline' => 'Canadian History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'proquest_subject' => 'Home economics',
                'proquest_code' => '0386',
                'digital_commons_discipline' => 'Home Economics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'proquest_subject' => 'Hydrologic sciences',
                'proquest_code' => '0388',
                'digital_commons_discipline' => 'Hydrology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'proquest_subject' => 'Design',
                'proquest_code' => '0389',
                'digital_commons_discipline' => 'Art and Design',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'proquest_subject' => 'Landscape architecture',
                'proquest_code' => '0390',
                'digital_commons_discipline' => 'Landscape Architecture',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'proquest_subject' => 'Environmental philosophy',
                'proquest_code' => '0392',
                'digital_commons_discipline' => 'Natural Resources Management and Policy; Environmental Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'proquest_subject' => 'Epistemology',
                'proquest_code' => '0393',
                'digital_commons_discipline' => 'Epistemology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'proquest_subject' => 'Ethics',
                'proquest_code' => '0394',
                'digital_commons_discipline' => 'Ethics and Political Philosophy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'proquest_subject' => 'Logic',
                'proquest_code' => '0395',
                'digital_commons_discipline' => 'Logic and Foundations of Mathematics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'proquest_subject' => 'Metaphysics',
                'proquest_code' => '0396',
                'digital_commons_discipline' => 'Metaphysics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'proquest_subject' => 'Pastoral counseling',
                'proquest_code' => '0397',
                'digital_commons_discipline' => 'Other Religion',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'proquest_subject' => 'Law',
                'proquest_code' => '0398',
                'digital_commons_discipline' => 'Law',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'proquest_subject' => 'Literature',
                'proquest_code' => '0401',
                'digital_commons_discipline' => 'Language and Literature',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'proquest_subject' => 'Philosophy of science',
                'proquest_code' => '0402',
                'digital_commons_discipline' => 'Philosophy of Science',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'proquest_subject' => 'Chemical oceanography',
                'proquest_code' => '0403',
                'digital_commons_discipline' => 'Oceanography',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'proquest_subject' => 'Climate change',
                'proquest_code' => '0404',
                'digital_commons_discipline' => 'Environmental Sciences; Climate',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'proquest_subject' => 'Mathematics',
                'proquest_code' => '0405',
                'digital_commons_discipline' => 'Mathematics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'proquest_subject' => 'Continental dynamics',
                'proquest_code' => '0406',
                'digital_commons_discipline' => 'Tectonics and Structure',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'proquest_subject' => 'Environmental geology',
                'proquest_code' => '0407',
                'digital_commons_discipline' => 'Environmental Sciences; Physical and Environmental Geography',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'proquest_subject' => 'Conservation biology',
                'proquest_code' => '0408',
                'digital_commons_discipline' => 'Natural Resources and Conservation; Biodiversity',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'proquest_subject' => 'Endocrinology',
                'proquest_code' => '0409',
                'digital_commons_discipline' => 'Endocrinology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'proquest_subject' => 'Microbiology',
                'proquest_code' => '0410',
                'digital_commons_discipline' => 'Microbiology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'proquest_subject' => 'Mineralogy',
                'proquest_code' => '0411',
                'digital_commons_discipline' => 'Earth Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'proquest_subject' => 'Evolution & development',
                'proquest_code' => '0412',
                'digital_commons_discipline' => 'Developmental Biology; Evolution',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'proquest_subject' => 'Music',
                'proquest_code' => '0413',
                'digital_commons_discipline' => 'Music',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'proquest_subject' => 'Histology',
                'proquest_code' => '0414',
                'digital_commons_discipline' => 'Biology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'proquest_subject' => 'Physical oceanography',
                'proquest_code' => '0415',
                'digital_commons_discipline' => 'Oceanography',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'proquest_subject' => 'Biological oceanography',
                'proquest_code' => '0416',
                'digital_commons_discipline' => 'Marine Biology; Oceanography',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'proquest_subject' => 'Paleontology',
                'proquest_code' => '0418',
                'digital_commons_discipline' => 'Paleontology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'proquest_subject' => 'Pharmacology',
                'proquest_code' => '0419',
                'digital_commons_discipline' => 'Pharmacology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'proquest_subject' => 'Macroecology',
                'proquest_code' => '0420',
                'digital_commons_discipline' => 'Ecology and Evolutionary Biology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'proquest_subject' => 'Philosophy',
                'proquest_code' => '0422',
                'digital_commons_discipline' => 'Philosophy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'proquest_subject' => 'Systematic biology',
                'proquest_code' => '0423',
                'digital_commons_discipline' => 'Systems Biology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'proquest_subject' => 'Arts management',
                'proquest_code' => '0424',
                'digital_commons_discipline' => 'Arts Management',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'proquest_subject' => 'Biogeochemistry',
                'proquest_code' => '0425',
                'digital_commons_discipline' => 'Biogeochemistry',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'proquest_subject' => 'Paleoecology',
                'proquest_code' => '0426',
                'digital_commons_discipline' => 'Ecology and Evolutionary Biology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'proquest_subject' => 'Geotechnology',
                'proquest_code' => '0428',
                'digital_commons_discipline' => 'Civil and Environmental Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'proquest_subject' => 'Entrepreneurship',
                'proquest_code' => '0429',
                'digital_commons_discipline' => 'Entrepreneurial and Small Business Operations',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'proquest_subject' => 'Sports management',
                'proquest_code' => '0430',
                'digital_commons_discipline' => 'Sports Management',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'proquest_subject' => 'Molecular chemistry',
                'proquest_code' => '0431',
                'digital_commons_discipline' => 'Chemistry',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'proquest_subject' => 'Caribbean studies',
                'proquest_code' => '0432',
                'digital_commons_discipline' => 'Caribbean Languages and Societies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'proquest_subject' => 'Classical studies',
                'proquest_code' => '0434',
                'digital_commons_discipline' => 'Classics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'proquest_subject' => 'Cinematography',
                'proquest_code' => '0435',
                'digital_commons_discipline' => 'Film and Media Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'proquest_subject' => 'Cultural resources management',
                'proquest_code' => '0436',
                'digital_commons_discipline' => 'Cultural Resource Management and Policy Analysis',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'proquest_subject' => 'East European studies',
                'proquest_code' => '0437',
                'digital_commons_discipline' => 'Eastern European Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'proquest_subject' => 'Environmental economics',
                'proquest_code' => '0438',
                'digital_commons_discipline' => 'Natural Resource Economics; Environmental Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'proquest_subject' => 'Environmental law',
                'proquest_code' => '0439',
                'digital_commons_discipline' => 'Environmental Law',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'proquest_subject' => 'European studies',
                'proquest_code' => '0440',
                'digital_commons_discipline' => 'Eastern European Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'proquest_subject' => 'English as a second languages',
                'proquest_code' => '0441',
                'digital_commons_discipline' => 'Language and Literacy Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'proquest_subject' => 'Environmental education',
                'proquest_code' => '0442',
                'digital_commons_discipline' => 'Environmental Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'proquest_subject' => 'Educational evaluation',
                'proquest_code' => '0443',
                'digital_commons_discipline' => 'Educational Assessment, Evaluation, and Research',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'proquest_subject' => 'Foreign language education',
                'proquest_code' => '0444',
                'digital_commons_discipline' => 'Bilingual, Multilingual, and Multicultural Education; Language and Literacy Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'proquest_subject' => 'Gifted education',
                'proquest_code' => '0445',
                'digital_commons_discipline' => 'Gifted Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'proquest_subject' => 'Higher education administration',
                'proquest_code' => '0446',
                'digital_commons_discipline' => 'Higher Education Administration',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'proquest_subject' => 'Instructional design',
                'proquest_code' => '0447',
                'digital_commons_discipline' => 'Curriculum and Instruction; Educational Methods',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'proquest_subject' => 'Educational leadership',
                'proquest_code' => '0449',
                'digital_commons_discipline' => 'Educational Leadership',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'proquest_subject' => 'Middle school education',
                'proquest_code' => '0450',
                'digital_commons_discipline' => 'Junior High, Intermediate, Middle School
Education and Teaching',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'proquest_subject' => 'Social psychology    ',
                'proquest_code' => '0451',
                'digital_commons_discipline' => 'Social Psychology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'proquest_subject' => 'Social work',
                'proquest_code' => '0452',
                'digital_commons_discipline' => 'Social Work',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'proquest_subject' => 'Women\'s studies',
                'proquest_code' => '0453',
                'digital_commons_discipline' => 'Women\'s Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'proquest_subject' => 'Management',
                'proquest_code' => '0454',
                'digital_commons_discipline' => 'Business Administration, Management, and Operations',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'proquest_subject' => 'Multicultural education',
                'proquest_code' => '0455',
                'digital_commons_discipline' => 'Bilingual, Multilingual, and Multicultural Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'proquest_subject' => 'Pedagogy',
                'proquest_code' => '0456',
                'digital_commons_discipline' => 'Educational Methods',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'proquest_subject' => 'Performing arts education',
                'proquest_code' => '0457',
                'digital_commons_discipline' => 'Art Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'proquest_subject' => 'Education policy',
                'proquest_code' => '0458',
                'digital_commons_discipline' => 'Education Policy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'proquest_subject' => 'Speech therapy',
                'proquest_code' => '0460',
                'digital_commons_discipline' => 'Speech and Hearing Science',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'proquest_subject' => 'Architectural engineering',
                'proquest_code' => '0462',
                'digital_commons_discipline' => 'Architectural Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'proquest_subject' => 'Statistics',
                'proquest_code' => '0463',
                'digital_commons_discipline' => 'Statistics and Probability',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'proquest_subject' => 'Computer engineering',
                'proquest_code' => '0464',
                'digital_commons_discipline' => 'Computer Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'proquest_subject' => 'Theater',
                'proquest_code' => '0465',
                'digital_commons_discipline' => 'Theatre and Performance Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'proquest_subject' => 'Geological engineering',
                'proquest_code' => '0466',
                'digital_commons_discipline' => 'Geotechnical Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'proquest_subject' => 'Geophysical engineering',
                'proquest_code' => '0467',
                'digital_commons_discipline' => 'Geotechnical Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'proquest_subject' => 'Naval engineering',
                'proquest_code' => '0468',
                'digital_commons_discipline' => 'Other Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'proquest_subject' => 'Theology',
                'proquest_code' => '0469',
                'digital_commons_discipline' => 'Religious Thought, Theology and Philosophy of Religion',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'proquest_subject' => 'Environmental health',
                'proquest_code' => '0470',
                'digital_commons_discipline' => 'Environmental Health and Protection',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'proquest_subject' => 'Horticulture',
                'proquest_code' => '0471',
                'digital_commons_discipline' => 'Horticulture',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'proquest_subject' => 'Zoology',
                'proquest_code' => '0472',
                'digital_commons_discipline' => 'Zoology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'proquest_subject' => 'Agriculture',
                'proquest_code' => '0473',
                'digital_commons_discipline' => 'Agriculture',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'proquest_subject' => 'Environmental management',
                'proquest_code' => '0474',
                'digital_commons_discipline' => 'Natural Resources Management and Policy; Environmental Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'proquest_subject' => 'Animal sciences',
                'proquest_code' => '0475',
                'digital_commons_discipline' => 'Animal Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'proquest_subject' => 'Animal diseases',
                'proquest_code' => '0476',
                'digital_commons_discipline' => 'Animal Diseases',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'proquest_subject' => 'Environmental studies',
                'proquest_code' => '0477',
                'digital_commons_discipline' => 'Environmental Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'proquest_subject' => 'Forestry',
                'proquest_code' => '0478',
                'digital_commons_discipline' => 'Forest Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'proquest_subject' => 'Plant sciences',
                'proquest_code' => '0479',
                'digital_commons_discipline' => 'Plant Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'proquest_subject' => 'Plant pathology',
                'proquest_code' => '0480',
                'digital_commons_discipline' => 'Plant Pathology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'proquest_subject' => 'Soil sciences',
                'proquest_code' => '0481',
                'digital_commons_discipline' => 'Soil Science',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'proquest_subject' => 'French Canadian culture',
                'proquest_code' => '0482',
                'digital_commons_discipline' => 'Canadian History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'proquest_subject' => 'Geobiology',
                'proquest_code' => '0483',
                'digital_commons_discipline' => 'Biology; Geology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'proquest_subject' => 'Geomorphology',
                'proquest_code' => '0484',
                'digital_commons_discipline' => 'Geomorphology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'proquest_subject' => 'Chemistry',
                'proquest_code' => '0485',
                'digital_commons_discipline' => 'Chemistry',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'proquest_subject' => 'Analytical chemistry',
                'proquest_code' => '0486',
                'digital_commons_discipline' => 'Analytical Chemistry',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'proquest_subject' => 'Biochemistry',
                'proquest_code' => '0487',
                'digital_commons_discipline' => 'Biochemistry',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'proquest_subject' => 'Inorganic chemistry',
                'proquest_code' => '0488',
                'digital_commons_discipline' => 'Inorganic Chemistry',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'proquest_subject' => 'Information technology',
                'proquest_code' => '0489',
                'digital_commons_discipline' => 'Science and Technology Studies; Library and Information Science',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'proquest_subject' => 'Organic chemistry',
                'proquest_code' => '0490',
                'digital_commons_discipline' => 'Organic Chemistry',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'proquest_subject' => 'LGBTQ studies',
                'proquest_code' => '0492',
                'digital_commons_discipline' => 'Lesbian, Gay, Bisexual, and Transgender',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'proquest_subject' => 'Aging',
                'proquest_code' => '0493',
                'digital_commons_discipline' => 'Gerontology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'proquest_subject' => 'Physical chemistry',
                'proquest_code' => '0494',
                'digital_commons_discipline' => 'Physical Chemistry',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'proquest_subject' => 'Polymer chemistry',
                'proquest_code' => '0495',
                'digital_commons_discipline' => 'Polymer Chemistry',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'proquest_subject' => 'Alternative medicine',
                'proquest_code' => '0496',
                'digital_commons_discipline' => 'Alternative and Complementary Medicine',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'proquest_subject' => 'Medical ethics',
                'proquest_code' => '0497',
                'digital_commons_discipline' => 'Bioethics and Medical Ethics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'proquest_subject' => 'Occupational therapy',
                'proquest_code' => '0498',
                'digital_commons_discipline' => 'Occupational Therapy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'proquest_subject' => 'Osteopathic medicine',
                'proquest_code' => '0499',
                'digital_commons_discipline' => 'Osteopathic Medicine and Osteopath',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'proquest_subject' => 'Public health education',
                'proquest_code' => '0500',
                'digital_commons_discipline' => 'Public Health Education and Promotion',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'proquest_subject' => 'Economics',
                'proquest_code' => '0501',
                'digital_commons_discipline' => 'Economics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'proquest_subject' => 'Agriculture economics',
                'proquest_code' => '0503',
                'digital_commons_discipline' => 'Agricultural Economics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'proquest_subject' => 'History of Oceania',
                'proquest_code' => '0504',
                'digital_commons_discipline' => 'History of the Pacific Islands',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'proquest_subject' => 'Commerce-Business',
                'proquest_code' => '0505',
                'digital_commons_discipline' => 'Business',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'proquest_subject' => 'World history',
                'proquest_code' => '0506',
                'digital_commons_discipline' => 'History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'proquest_subject' => 'Holocaust studies',
                'proquest_code' => '0507',
                'digital_commons_discipline' => 'Jewish Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'proquest_subject' => 'Finance',
                'proquest_code' => '0508',
                'digital_commons_discipline' => 'Finance',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'proquest_subject' => 'Economic history',
                'proquest_code' => '0509',
                'digital_commons_discipline' => 'Economic History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'proquest_subject' => 'Labor economics',
                'proquest_code' => '0510',
                'digital_commons_discipline' => 'Labor Economics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'proquest_subject' => 'Economic theory',
                'proquest_code' => '0511',
                'digital_commons_discipline' => 'Economic Theory',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'proquest_subject' => 'Islamic studies',
                'proquest_code' => '0512',
                'digital_commons_discipline' => 'Islamic Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'proquest_subject' => 'Intellectual property',
                'proquest_code' => '0513',
                'digital_commons_discipline' => 'Intellectual Property Law',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'proquest_subject' => 'Education',
                'proquest_code' => '0515',
                'digital_commons_discipline' => 'Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'proquest_subject' => 'Agriculture education',
                'proquest_code' => '0517',
                'digital_commons_discipline' => 'Agricultural Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'proquest_subject' => 'Early childhood education',
                'proquest_code' => '0518',
                'digital_commons_discipline' => 'Early Childhood Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'proquest_subject' => 'School counseling',
                'proquest_code' => '0519',
                'digital_commons_discipline' => 'Student Counseling and Personnel Services',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'proquest_subject' => 'Industrial arts education',
                'proquest_code' => '0521',
                'digital_commons_discipline' => 'Other Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'proquest_subject' => 'Music education',
                'proquest_code' => '0522',
                'digital_commons_discipline' => 'Music Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'proquest_subject' => 'Physical education',
                'proquest_code' => '0523',
                'digital_commons_discipline' => 'Health and Physical Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'proquest_subject' => 'Elementary educations',
                'proquest_code' => '0524',
                'digital_commons_discipline' => 'Elementary Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'proquest_subject' => 'Educational psychology',
                'proquest_code' => '0525',
                'digital_commons_discipline' => 'Educational Psychology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'proquest_subject' => 'Religious education',
                'proquest_code' => '0527',
                'digital_commons_discipline' => 'Other Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'proquest_subject' => 'Natural resource management',
                'proquest_code' => '0528',
                'digital_commons_discipline' => 'Natural Resources Management and Policy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'proquest_subject' => 'Special education',
                'proquest_code' => '0529',
                'digital_commons_discipline' => 'Special Education and Teaching',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'proquest_subject' => 'Teacher education',
                'proquest_code' => '0530',
                'digital_commons_discipline' => 'Teacher Education and Professional Development',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'proquest_subject' => 'Secondary education',
                'proquest_code' => '0533',
                'digital_commons_discipline' => 'Secondary Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'proquest_subject' => 'Social sciences education',
                'proquest_code' => '0534',
                'digital_commons_discipline' => 'Other Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'proquest_subject' => 'Reading instruction',
                'proquest_code' => '0535',
                'digital_commons_discipline' => 'Language and Literacy Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'proquest_subject' => 'Land use planning',
                'proquest_code' => '0536',
                'digital_commons_discipline' => 'Natural Resources Management and Policy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'proquest_subject' => 'Engineering',
                'proquest_code' => '0537',
                'digital_commons_discipline' => 'Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'proquest_subject' => 'Aerospace engineering',
                'proquest_code' => '0538',
                'digital_commons_discipline' => 'Aerospace Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'proquest_subject' => 'Agriculture engineering',
                'proquest_code' => '0539',
                'digital_commons_discipline' => 'Agricultural Science',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'proquest_subject' => 'Automotive engineering',
                'proquest_code' => '0540',
                'digital_commons_discipline' => 'Automotive Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'proquest_subject' => 'Biomedical engineering',
                'proquest_code' => '0541',
                'digital_commons_discipline' => 'Biomedical Engineering and Bioengineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'proquest_subject' => 'Chemical engineering',
                'proquest_code' => '0542',
                'digital_commons_discipline' => 'Chemical Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'proquest_subject' => 'Civil engineering',
                'proquest_code' => '0543',
                'digital_commons_discipline' => 'Civil Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'proquest_subject' => 'Electrical engineering',
                'proquest_code' => '0544',
                'digital_commons_discipline' => 'Electrical and Computer Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'proquest_subject' => 'Industrial engineering',
                'proquest_code' => '0546',
                'digital_commons_discipline' => 'Industrial Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'proquest_subject' => 'Ocean engineering',
                'proquest_code' => '0547',
                'digital_commons_discipline' => 'Ocean Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'proquest_subject' => 'Mechanical engineering',
                'proquest_code' => '0548',
                'digital_commons_discipline' => 'Mechanical Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'proquest_subject' => 'Packaging',
                'proquest_code' => '0549',
                'digital_commons_discipline' => 'Manufacturing',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'proquest_subject' => 'Latin American studies',
                'proquest_code' => '0550',
                'digital_commons_discipline' => 'Latin American Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'proquest_subject' => 'Mining',
                'proquest_code' => '0551',
                'digital_commons_discipline' => 'Mining Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'proquest_subject' => 'Nuclear engineering',
                'proquest_code' => '0552',
                'digital_commons_discipline' => 'Nuclear Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'proquest_subject' => 'Middle Eastern studies',
                'proquest_code' => '0555',
                'digital_commons_discipline' => 'Near and Middle Eastern Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'proquest_subject' => 'Marine geology',
                'proquest_code' => '0556',
                'digital_commons_discipline' => 'Geology; Oceanography',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'proquest_subject' => 'Meteorology',
                'proquest_code' => '0557',
                'digital_commons_discipline' => 'Meteorology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'proquest_subject' => 'Multimedia communications',
                'proquest_code' => '0558',
                'digital_commons_discipline' => 'Communication',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'proquest_subject' => 'Near Eastern studies',
                'proquest_code' => '0559',
                'digital_commons_discipline' => 'Near and Middle Eastern Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'proquest_subject' => 'North African studies',
                'proquest_code' => '0560',
                'digital_commons_discipline' => 'African Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'proquest_subject' => 'Pacific Rim studies',
                'proquest_code' => '0561',
                'digital_commons_discipline' => 'Pacific Islands Languages and Societies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'proquest_subject' => 'Patent law',
                'proquest_code' => '0562',
                'digital_commons_discipline' => 'Law',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'proquest_subject' => 'Peace studies',
                'proquest_code' => '0563',
                'digital_commons_discipline' => 'Peace and Conflict Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'proquest_subject' => 'Medicine',
                'proquest_code' => '0564',
                'digital_commons_discipline' => 'Medicine and Health Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'proquest_subject' => 'Nanoscience',
                'proquest_code' => '0565',
                'digital_commons_discipline' => 'Nanoscience and Nanotechnology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'proquest_subject' => 'Health sciences',
                'proquest_code' => '0566',
                'digital_commons_discipline' => 'Medicine and Health Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'proquest_subject' => 'Dentistry',
                'proquest_code' => '0567',
                'digital_commons_discipline' => 'Dentistry',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'proquest_subject' => 'Nursing',
                'proquest_code' => '0569',
                'digital_commons_discipline' => 'Nursing',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'proquest_subject' => 'Nutrition',
                'proquest_code' => '0570',
                'digital_commons_discipline' => 'Nutrition',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'proquest_subject' => 'Pathology',
                'proquest_code' => '0571',
                'digital_commons_discipline' => 'Pathology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'proquest_subject' => 'Pharmaceutical sciences',
                'proquest_code' => '0572',
                'digital_commons_discipline' => 'Pharmacy and Pharmaceutical Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'proquest_subject' => 'Public health',
                'proquest_code' => '0573',
                'digital_commons_discipline' => 'Public Health',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'proquest_subject' => 'Medical imaging',
                'proquest_code' => '0574',
                'digital_commons_discipline' => 'Investigative Techniques',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'proquest_subject' => 'Kinesiology',
                'proquest_code' => '0575',
                'digital_commons_discipline' => 'Kinesiology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'proquest_subject' => 'Surgery',
                'proquest_code' => '0576',
                'digital_commons_discipline' => 'Surgery',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'proquest_subject' => 'History',
                'proquest_code' => '0578',
                'digital_commons_discipline' => 'History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'proquest_subject' => 'Ancient history',
                'proquest_code' => '0579',
                'digital_commons_discipline' => 'Ancient History, Greek and Roman through Late Antiquity',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'proquest_subject' => 'Medieval history',
                'proquest_code' => '0581',
                'digital_commons_discipline' => 'Medieval History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'proquest_subject' => 'Modern history',
                'proquest_code' => '0582',
                'digital_commons_discipline' => 'History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'proquest_subject' => 'Petroleum geology',
                'proquest_code' => '0583',
                'digital_commons_discipline' => 'Earth Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'proquest_subject' => 'Petrology',
                'proquest_code' => '0584',
                'digital_commons_discipline' => 'Earth Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'proquest_subject' => 'Science history',
                'proquest_code' => '0585',
                'digital_commons_discipline' => 'History of Science, Technology, and Medicine',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'proquest_subject' => 'Planetology',
                'proquest_code' => '0590',
                'digital_commons_discipline' => 'Astrophysics and Astronomy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'proquest_subject' => 'American literature',
                'proquest_code' => '0591',
                'digital_commons_discipline' => 'American Literature',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'proquest_subject' => 'Plate tectonics',
                'proquest_code' => '0592',
                'digital_commons_discipline' => 'Tectonics and Structure',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'proquest_subject' => 'English literature',
                'proquest_code' => '0593',
                'digital_commons_discipline' => 'English Language and Literature',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'proquest_subject' => 'Sedimentary geology',
                'proquest_code' => '0594',
                'digital_commons_discipline' => 'Sedimentology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'proquest_subject' => 'Water resources management',
                'proquest_code' => '0595',
                'digital_commons_discipline' => 'Water Resource Management',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'proquest_subject' => 'Astrophysics',
                'proquest_code' => '0596',
                'digital_commons_discipline' => 'Astrophysics and Astronomy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'proquest_subject' => 'High temperature physics',
                'proquest_code' => '0597',
                'digital_commons_discipline' => 'Physics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'proquest_subject' => 'Low temperature physics',
                'proquest_code' => '0598',
                'digital_commons_discipline' => 'Physics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'proquest_subject' => 'Quantum physics',
                'proquest_code' => '0599',
                'digital_commons_discipline' => 'Quantum Physics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'proquest_subject' => 'International relations',
                'proquest_code' => '0601',
                'digital_commons_discipline' => 'International Relations',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'proquest_subject' => 'Behavioral sciences',
                'proquest_code' => '0602',
                'digital_commons_discipline' => 'Social and Behavioral Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'proquest_subject' => 'Counseling psychology',
                'proquest_code' => '0603',
                'digital_commons_discipline' => 'Counseling Psychology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'proquest_subject' => 'Regional studies',
                'proquest_code' => '0604',
                'digital_commons_discipline' => 'International and Area Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'proquest_subject' => 'Physics',
                'proquest_code' => '0605',
                'digital_commons_discipline' => 'Physics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'proquest_subject' => 'Astronomy',
                'proquest_code' => '0606',
                'digital_commons_discipline' => 'Astrophysics and Astronomy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'proquest_subject' => 'Electromagnetics',
                'proquest_code' => '0607',
                'digital_commons_discipline' => 'Electromagnetics and Photonics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'proquest_subject' => 'Molecular physics',
                'proquest_code' => '0609',
                'digital_commons_discipline' => 'Atomic, Molecular and Optical Physics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'proquest_subject' => 'Condensed matter physics',
                'proquest_code' => '0611',
                'digital_commons_discipline' => 'Condensed Matter Physics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'proquest_subject' => 'Scandinavian studies',
                'proquest_code' => '0613',
                'digital_commons_discipline' => 'Scandinavian Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'proquest_subject' => 'Slavic studies',
                'proquest_code' => '0614',
                'digital_commons_discipline' => 'Eastern European Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'proquest_subject' => 'Political Science',
                'proquest_code' => '0615',
                'digital_commons_discipline' => 'Political Science',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'proquest_subject' => 'International law',
                'proquest_code' => '0616',
                'digital_commons_discipline' => 'International Law',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'proquest_subject' => 'Public administration',
                'proquest_code' => '0617',
                'digital_commons_discipline' => 'Public Administration',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'proquest_subject' => 'Comparative religion',
                'proquest_code' => '0618',
                'digital_commons_discipline' => 'Religion; Comparative Methodologies and Theories',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'proquest_subject' => 'Environmental justice',
                'proquest_code' => '0619',
                'digital_commons_discipline' => 'Environmental Sciences;  Environmental Policy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'proquest_subject' => 'Developmental psychology',
                'proquest_code' => '0620',
                'digital_commons_discipline' => 'Developmental Psychology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'proquest_subject' => 'Psychology',
                'proquest_code' => '0621',
                'digital_commons_discipline' => 'Psychology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'proquest_subject' => 'Clinical psychology',
                'proquest_code' => '0622',
                'digital_commons_discipline' => 'Clinical Psycholog',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'proquest_subject' => 'Experimental psychology',
                'proquest_code' => '0623',
                'digital_commons_discipline' => 'Experimental Analysis of Behavior',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'proquest_subject' => 'Occupational psychology',
                'proquest_code' => '0624',
                'digital_commons_discipline' => 'Industrial and Organizational Psychology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'proquest_subject' => 'Personality psychology',
                'proquest_code' => '0625',
                'digital_commons_discipline' => 'Personality and Social Contexts',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'proquest_subject' => 'Cultural anthropology',
                'proquest_code' => '0626',
                'digital_commons_discipline' => 'Social and Cultural Anthropology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'proquest_subject' => 'Sociology',
                'proquest_code' => '0626',
                'digital_commons_discipline' => 'Sociology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'proquest_subject' => 'Criminology',
                'proquest_code' => '0627',
                'digital_commons_discipline' => 'Criminology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'proquest_subject' => 'Individual & family studies',
                'proquest_code' => '0628',
                'digital_commons_discipline' => 'Family, Life Course, and Society',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'proquest_subject' => 'Labor relations',
                'proquest_code' => '0629',
                'digital_commons_discipline' => 'Labor Relations',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'proquest_subject' => 'Public policy',
                'proquest_code' => '0630',
                'digital_commons_discipline' => 'Public Policy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'proquest_subject' => 'Ethnic studies',
                'proquest_code' => '0631',
                'digital_commons_discipline' => 'Ethnic Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'proquest_subject' => 'Quantitative psychology  ',
                'proquest_code' => '0632',
                'digital_commons_discipline' => 'Quantitative Psychology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'proquest_subject' => 'Cognitive psychology',
                'proquest_code' => '0633',
                'digital_commons_discipline' => 'Cognitive Psychology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'proquest_subject' => 'Organization theory',
                'proquest_code' => '0635',
                'digital_commons_discipline' => 'Organizational Behavior and Theory',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'proquest_subject' => 'Sociolinguistics',
                'proquest_code' => '0636',
                'digital_commons_discipline' => 'Anthropological Linguistics and Sociolinguistics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'proquest_subject' => 'South Asian studies',
                'proquest_code' => '0638',
                'digital_commons_discipline' => 'South and Southeast Asian Languages and Societies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'proquest_subject' => 'Sub Saharan Africa studies',
                'proquest_code' => '0639',
                'digital_commons_discipline' => 'African Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'proquest_subject' => 'Sustainability',
                'proquest_code' => '0640',
                'digital_commons_discipline' => 'Sustainability',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'proquest_subject' => 'Performing arts',
                'proquest_code' => '0641',
                'digital_commons_discipline' => 'Theatre and Performance Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'proquest_subject' => 'Theoretical mathematics',
                'proquest_code' => '0642',
                'digital_commons_discipline' => 'Mathematics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'proquest_subject' => 'Theater history',
                'proquest_code' => '0644',
                'digital_commons_discipline' => 'Theatre History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'proquest_subject' => 'Spirituality',
                'proquest_code' => '0647',
                'digital_commons_discipline' => 'Philosophy; Other Religion',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'proquest_subject' => 'Biomechanics',
                'proquest_code' => '0648',
                'digital_commons_discipline' => 'Biomechanics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'proquest_subject' => 'Alternative dispute resolution',
                'proquest_code' => '0649',
                'digital_commons_discipline' => 'Dispute Resolution and Arbitration',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'proquest_subject' => 'Aesthetics',
                'proquest_code' => '0650',
                'digital_commons_discipline' => 'Esthetics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'proquest_subject' => 'Continuing education',
                'proquest_code' => '0651',
                'digital_commons_discipline' => 'Adult and Continuing Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'proquest_subject' => 'Nanotechnology',
                'proquest_code' => '0652',
                'digital_commons_discipline' => 'Nanoscience and Nanotechnology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'proquest_subject' => 'Paleoclimate science',
                'proquest_code' => '0653',
                'digital_commons_discipline' => 'Climate',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'proquest_subject' => 'South African studies',
                'proquest_code' => '0654',
                'digital_commons_discipline' => 'African Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'proquest_subject' => 'Language',
                'proquest_code' => '0679',
                'digital_commons_discipline' => 'Language and Literature',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'proquest_subject' => 'Health education',
                'proquest_code' => '0680',
                'digital_commons_discipline' => 'Health and Physical Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'proquest_subject' => 'Rhetoric',
                'proquest_code' => '0681',
                'digital_commons_discipline' => 'Rhetoric',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'proquest_subject' => 'Business education',
                'proquest_code' => '0688',
                'digital_commons_discipline' => 'Business Administration, Management, and Operations',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'proquest_subject' => 'Social structure',
                'proquest_code' => '0700',
                'digital_commons_discipline' => 'Social and Behavioral Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'proquest_subject' => 'Organizational behavior',
                'proquest_code' => '0703',
                'digital_commons_discipline' => 'Organizational Behavior and Theory',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'proquest_subject' => 'Transportation',
                'proquest_code' => '0709',
                'digital_commons_discipline' => 'Transportation',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'proquest_subject' => 'Educational technology',
                'proquest_code' => '0710',
                'digital_commons_discipline' => 'Instructional Media Design',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'proquest_subject' => 'Science education',
                'proquest_code' => '0714',
                'digital_commons_discipline' => 'Science and Mathematics Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'proquest_subject' => 'Bioinformatics',
                'proquest_code' => '0715',
                'digital_commons_discipline' => 'Bioinformatics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'proquest_subject' => 'Parasitology',
                'proquest_code' => '0718',
                'digital_commons_discipline' => 'Parasitology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'proquest_subject' => 'Physiology',
                'proquest_code' => '0719',
                'digital_commons_discipline' => 'Physiology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'proquest_subject' => 'Virology',
                'proquest_code' => '0720',
                'digital_commons_discipline' => 'Virology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'proquest_subject' => 'Military history',
                'proquest_code' => '0722',
                'digital_commons_discipline' => 'Military History',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'proquest_subject' => 'Russian history',
                'proquest_code' => '0724',
                'digital_commons_discipline' => 'Eastern European Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'proquest_subject' => 'Atmospheric sciences',
                'proquest_code' => '0725',
                'digital_commons_discipline' => 'Atmospheric Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'proquest_subject' => 'Curriculum development',
                'proquest_code' => '0727',
                'digital_commons_discipline' => 'Curriculum and Instruction',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'proquest_subject' => 'Architecture',
                'proquest_code' => '0729',
                'digital_commons_discipline' => 'Architecture',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'proquest_subject' => 'Museum studies',
                'proquest_code' => '0730',
                'digital_commons_discipline' => 'Museum Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'proquest_subject' => 'Gender studies',
                'proquest_code' => '0733',
                'digital_commons_discipline' => 'Feminist, Gender, and Sexuality Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'proquest_subject' => 'Hispanic American studies',
                'proquest_code' => '0737',
                'digital_commons_discipline' => 'Latin American Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'proquest_subject' => 'Nuclear chemistry',
                'proquest_code' => '0738',
                'digital_commons_discipline' => 'Nuclear; Chemistry',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'proquest_subject' => 'Native American studies',
                'proquest_code' => '0740',
                'digital_commons_discipline' => 'Indigenous Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'proquest_subject' => 'Higher education',
                'proquest_code' => '0745',
                'digital_commons_discipline' => 'Higher Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'proquest_subject' => 'Wood sciences',
                'proquest_code' => '0746',
                'digital_commons_discipline' => 'Wood Science and Pulp, Paper Technology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'proquest_subject' => 'Vocational education',
                'proquest_code' => '0747',
                'digital_commons_discipline' => 'Vocational Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'proquest_subject' => 'Atomic physics',
                'proquest_code' => '0748',
                'digital_commons_discipline' => 'Atomic, Molecular and Optical Physics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'proquest_subject' => 'Military studies',
                'proquest_code' => '0750',
                'digital_commons_discipline' => 'Military and Veterans Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'proquest_subject' => 'Judaic studies',
                'proquest_code' => '0751',
                'digital_commons_discipline' => 'Jewish Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'proquest_subject' => 'Optics',
                'proquest_code' => '0752',
                'digital_commons_discipline' => 'Optics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'proquest_subject' => 'Theoretical physics',
                'proquest_code' => '0753',
                'digital_commons_discipline' => 'Physics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'proquest_subject' => 'Nuclear physics and radiation',
                'proquest_code' => '0756',
                'digital_commons_discipline' => 'Nuclear',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'proquest_subject' => 'Developmental biology',
                'proquest_code' => '0758',
                'digital_commons_discipline' => 'Developmental Biology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'proquest_subject' => 'Plasma physics',
                'proquest_code' => '0759',
                'digital_commons_discipline' => 'Plasma and Beam Physics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'proquest_subject' => 'Petroleum engineering',
                'proquest_code' => '0765',
                'digital_commons_discipline' => 'Petroleum Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'proquest_subject' => 'Epidemiology',
                'proquest_code' => '0766',
                'digital_commons_discipline' => 'Epidemiology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'proquest_subject' => 'Environmental science',
                'proquest_code' => '0768',
                'digital_commons_discipline' => 'Environmental Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'proquest_subject' => 'Health care management',
                'proquest_code' => '0769',
                'digital_commons_discipline' => 'Medicine and Health Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'proquest_subject' => 'Banking',
                'proquest_code' => '0770',
                'digital_commons_discipline' => 'Finance and Financial Management',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'proquest_subject' => 'Robotics',
                'proquest_code' => '0771',
                'digital_commons_discipline' => 'Robotics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'proquest_subject' => 'Environmental engineering',
                'proquest_code' => '0775',
                'digital_commons_discipline' => 'Environmental Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'proquest_subject' => 'Range management',
                'proquest_code' => '0777',
                'digital_commons_discipline' => 'Natural Resources Management and Policy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'proquest_subject' => 'Veterinary medicine',
                'proquest_code' => '0778',
                'digital_commons_discipline' => 'Veterinary Medicine',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'proquest_subject' => 'Biophysics',
                'proquest_code' => '0786',
                'digital_commons_discipline' => 'Biophysics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'proquest_subject' => 'System science',
                'proquest_code' => '0790',
                'digital_commons_discipline' => 'Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'proquest_subject' => 'Energy',
                'proquest_code' => '0791',
                'digital_commons_discipline' => 'Power and Energy',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'proquest_subject' => 'Aquatic sciences',
                'proquest_code' => '0792',
                'digital_commons_discipline' => 'Fresh Water Studies; Oceanography',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'proquest_subject' => 'Limnology',
                'proquest_code' => '0793',
                'digital_commons_discipline' => 'Fresh Water Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'proquest_subject' => 'Materials science',
                'proquest_code' => '0794',
                'digital_commons_discipline' => 'Materials Science and Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'proquest_subject' => 'Plastics',
                'proquest_code' => '0795',
                'digital_commons_discipline' => 'Polymer Science',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'proquest_subject' => 'Operations research',
                'proquest_code' => '0796',
                'digital_commons_discipline' => 'Operational Research',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'proquest_subject' => 'High energy physics',
                'proquest_code' => '0798',
                'digital_commons_discipline' => 'Physics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'proquest_subject' => 'Remote sensing',
                'proquest_code' => '0799',
                'digital_commons_discipline' => 'Remote Sensing',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'proquest_subject' => 'Artificial intelligence',
                'proquest_code' => '0800',
                'digital_commons_discipline' => 'Artificial Intelligence and Robotics',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'proquest_subject' => 'Recreation',
                'proquest_code' => '0814',
                'digital_commons_discipline' => 'Social and Behavioral Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'proquest_subject' => 'Film studies',
                'proquest_code' => '0900',
                'digital_commons_discipline' => 'Film and Media Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'proquest_subject' => 'Demography',
                'proquest_code' => '0938',
                'digital_commons_discipline' => 'Demography, Population, and Ecology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'proquest_subject' => 'Musical performances',
                'proquest_code' => '0943',
                'digital_commons_discipline' => 'Music Performance',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'proquest_subject' => 'Immunology',
                'proquest_code' => '0982',
                'digital_commons_discipline' => 'Immunology and Infectious Disease',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'proquest_subject' => 'Computer science',
                'proquest_code' => '0984',
                'digital_commons_discipline' => 'Computer Sciences',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'proquest_subject' => 'Acoustics',
                'proquest_code' => '0986',
                'digital_commons_discipline' => 'Acoustics, Dynamics, and Controls',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'proquest_subject' => 'Physiological psychology',
                'proquest_code' => '0989',
                'digital_commons_discipline' => 'Biological Psychology; Behavioral Neurobiology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'proquest_subject' => 'Oncology',
                'proquest_code' => '0992',
                'digital_commons_discipline' => 'Oncology',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'proquest_subject' => 'Textile research',
                'proquest_code' => '0994',
                'digital_commons_discipline' => 'Materials Science and Engineering',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'proquest_subject' => 'Geochemistry',
                'proquest_code' => '0996',
                'digital_commons_discipline' => 'Geochemistry',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'proquest_subject' => 'Educational philosophy',
                'proquest_code' => '0998',
                'digital_commons_discipline' => 'Social and Philosophical Foundations of Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'proquest_subject' => 'Urban planning',
                'proquest_code' => '0999',
                'digital_commons_discipline' => 'Urban Studies and Planning; Urban, Community and Regional Planning',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'proquest_subject' => 'Accounting',
                'proquest_code' => '0272',
                'digital_commons_discipline' => 'Accounting',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'proquest_subject' => 'Journalism',
                'proquest_code' => '0391',
                'digital_commons_discipline' => 'Journalism Studies',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'proquest_subject' => 'Library science',
                'proquest_code' => '0399',
                'digital_commons_discipline' => 'Library and Information Science',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'proquest_subject' => 'Communication',
                'proquest_code' => '0459',
                'digital_commons_discipline' => 'Communication',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'proquest_subject' => 'Educational administration',
                'proquest_code' => '0514',
                'digital_commons_discipline' => 'Education Administration',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'proquest_subject' => 'Adult education',
                'proquest_code' => '0516',
                'digital_commons_discipline' => 'Adult and Continuing Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'proquest_subject' => 'Education history                                   ',
                'proquest_code' => '0520',
                'digital_commons_discipline' => 'Other Education',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'proquest_subject' => 'Technical communication',
                'proquest_code' => '0643',
                'digital_commons_discipline' => 'Communication Technology and New Media',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'proquest_subject' => 'Web studies',
                'proquest_code' => '0646',
                'digital_commons_discipline' => 'Communication Technology and New Media',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'proquest_subject' => 'Mass communication',
                'proquest_code' => '0708',
                'digital_commons_discipline' => 'Mass Communication',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'proquest_subject' => 'Information science',
                'proquest_code' => '0723',
                'digital_commons_discipline' => 'Library and Information Science',
                'lc_subject' => '',
                'created_at' => '2017-07-12 16:27:51',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
