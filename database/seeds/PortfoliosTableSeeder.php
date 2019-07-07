<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolios')->delete();
        
        \DB::table('portfolios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '4cf38863ad03bb0f42f49edc928949b5.jpg',
                'created_at' => '2019-07-07 16:36:01',
                'updated_at' => '2019-07-07 16:36:01',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '0a1668e20a97d801ac22f26a425ed0c2.jpg',
                'created_at' => '2019-07-07 16:36:12',
                'updated_at' => '2019-07-07 16:36:12',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'e62cdd3e3fa7c4e5a7403eaaa7b7f9c7.jpg',
                'created_at' => '2019-07-07 16:36:17',
                'updated_at' => '2019-07-07 16:36:17',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => '7165205c951ff0553756ba8a41dcbf87.jpg',
                'created_at' => '2019-07-07 16:36:22',
                'updated_at' => '2019-07-07 16:36:22',
            ),
            4 => 
            array (
                'id' => 5,
                'image' => '208b8b3c7f2ff2ded7a8eccdc7c57181.jpg',
                'created_at' => '2019-07-07 16:36:31',
                'updated_at' => '2019-07-07 16:36:31',
            ),
            5 => 
            array (
                'id' => 6,
                'image' => 'd042ce209b041d06446c9715b5daf05d.jpg',
                'created_at' => '2019-07-07 16:36:35',
                'updated_at' => '2019-07-07 16:36:35',
            ),
            6 => 
            array (
                'id' => 7,
                'image' => 'c563e8ee40cf81c03361c5f93cf24d64.jpg',
                'created_at' => '2019-07-07 16:36:39',
                'updated_at' => '2019-07-07 16:36:39',
            ),
            7 => 
            array (
                'id' => 8,
                'image' => '81b0b1594b9ccc8194ebb6cc794e55bf.jpg',
                'created_at' => '2019-07-07 16:36:45',
                'updated_at' => '2019-07-07 16:36:45',
            ),
            8 => 
            array (
                'id' => 9,
                'image' => '6acf39e80f7ae522df1288c57b857bd8.jpg',
                'created_at' => '2019-07-07 16:36:51',
                'updated_at' => '2019-07-07 16:36:51',
            ),
            9 => 
            array (
                'id' => 10,
                'image' => '29aacd1390ccad561fe574b824b427cf.jpg',
                'created_at' => '2019-07-07 16:36:56',
                'updated_at' => '2019-07-07 16:36:56',
            ),
            10 => 
            array (
                'id' => 11,
                'image' => '9466829322d7e3bb745c827f182d20e7.jpg',
                'created_at' => '2019-07-07 16:37:00',
                'updated_at' => '2019-07-07 16:37:00',
            ),
            11 => 
            array (
                'id' => 12,
                'image' => '4cf7da79436f571ccbcade84602c54c3.jpg',
                'created_at' => '2019-07-07 16:37:04',
                'updated_at' => '2019-07-07 16:37:04',
            ),
            12 => 
            array (
                'id' => 13,
                'image' => 'aeb975fd2aa05dd66cf3c221cf0f0378.jpg',
                'created_at' => '2019-07-07 16:37:10',
                'updated_at' => '2019-07-07 16:37:10',
            ),
            13 => 
            array (
                'id' => 14,
                'image' => '1f53f211d92ec108fe16a0c11cc4f973.jpg',
                'created_at' => '2019-07-07 16:37:15',
                'updated_at' => '2019-07-07 16:37:15',
            ),
            14 => 
            array (
                'id' => 15,
                'image' => '1ef926acbf2cb287bde7faaa25b58e96.jpg',
                'created_at' => '2019-07-07 16:37:21',
                'updated_at' => '2019-07-07 16:37:21',
            ),
            15 => 
            array (
                'id' => 16,
                'image' => '2ae398153eea0456538456af00c488d6.jpg',
                'created_at' => '2019-07-07 16:37:27',
                'updated_at' => '2019-07-07 16:37:27',
            ),
            16 => 
            array (
                'id' => 17,
                'image' => 'd50420275030b911f28033f566b8d70e.jpg',
                'created_at' => '2019-07-07 16:37:32',
                'updated_at' => '2019-07-07 16:37:32',
            ),
            17 => 
            array (
                'id' => 18,
                'image' => '14b0d388715f6d9d43992fce14592959.jpg',
                'created_at' => '2019-07-07 16:37:38',
                'updated_at' => '2019-07-07 16:37:38',
            ),
            18 => 
            array (
                'id' => 19,
                'image' => 'a0552103b742d50c476e734125cceaa1.jpg',
                'created_at' => '2019-07-07 16:37:45',
                'updated_at' => '2019-07-07 16:37:45',
            ),
            19 => 
            array (
                'id' => 20,
                'image' => '0dab1dc50b8347989012b4a7b2fbe532.jpg',
                'created_at' => '2019-07-07 16:37:51',
                'updated_at' => '2019-07-07 16:37:51',
            ),
            20 => 
            array (
                'id' => 21,
                'image' => '54b9ebfe45d7d8966729db1db9aa365b.jpg',
                'created_at' => '2019-07-07 16:37:58',
                'updated_at' => '2019-07-07 16:37:58',
            ),
            21 => 
            array (
                'id' => 22,
                'image' => 'a16002ff779ec52d9cd7caddc6cda020.jpg',
                'created_at' => '2019-07-07 16:38:07',
                'updated_at' => '2019-07-07 16:38:07',
            ),
            22 => 
            array (
                'id' => 23,
                'image' => '83ebeb62e05be27d14b1c7c6e4ac45e1.jpg',
                'created_at' => '2019-07-07 16:38:13',
                'updated_at' => '2019-07-07 16:38:13',
            ),
            23 => 
            array (
                'id' => 24,
                'image' => '56ecf4c2979af7f3cb31828fe38ceee8.jpg',
                'created_at' => '2019-07-07 16:38:19',
                'updated_at' => '2019-07-07 16:38:19',
            ),
            24 => 
            array (
                'id' => 25,
                'image' => 'c5e8dd68707e27f6dc2e1507c8315f50.jpg',
                'created_at' => '2019-07-07 16:38:25',
                'updated_at' => '2019-07-07 16:38:25',
            ),
        ));
        
        
    }
}