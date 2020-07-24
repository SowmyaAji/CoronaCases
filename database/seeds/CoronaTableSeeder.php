<?php
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Corona;
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
        $client = new Client();
    	$response = $client->request('GET', 'https://api.covid19api.com/summary');
        $coronacases = json_decode($response->getBody()->getContents(), true);
        // $coronas = get_object_vars($coronacases->Countries[0]);
        foreach ($coronacases['Countries'] as $corona) {
        DB::table('coronas')->insert(array(
            array(

        'country_name' => $corona['Country'],
        'cases' => $corona['TotalConfirmed'],
        'fatalities' =>$corona['TotalDeaths'])));
    }}};

