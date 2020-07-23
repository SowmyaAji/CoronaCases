<?php

use Illuminate\Database\Seeder;

class CoronaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('coronas')->insert(array(
            array(

        'country_name' => "USA",
        'symptoms' => "New York, Florida, Texas and New Jersey have the highest number of cases.",
        'cases' => 4040000,
        'fatalities' => 145000,

            ),
        array(
        'country_name' => "Brazil",
        'symptoms' => "Sao Paolo, Ceara, Rio de Janeiro, Para, Bahia have the highest cases.",
        'cases' => 2230000,
        'fatalities' => 82890,
        ),
        array(
        'country_name' => "India",
        'symptoms' => "Maharashtra, Tamil Nadu, Delhi, Mumbai, Chennai have the highest number of cases.",
        'cases' => 1190000,
        'fatalities' => 28732,
        ),    
    ));

    }
}
