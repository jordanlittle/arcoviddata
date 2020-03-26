<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

class CovidData extends Controller
{

    private $data = array(
        'last_updated' => null,
        'total_confirmed_cases' => null,
        'adh_pos_test_results' => null,
        'comlabs_pos_test_results' => null
    );

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function getCovidNumbers()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.healthy.arkansas.gov/programs-services/topics/novel-coronavirus');

        $crawler->filter('th')->each(function($node){
            if (strpos($node->text(), 'Updated as of') !== false) {
                $this->data['last_updated'] = str_replace('Updated as of ','',$node->text() );
            }
        });

        $this->data['total_confirmed_cases'] = $crawler->filterXPath('//td/strong[text() = "Confirmed Cases of COVID-19 in Arkansas"]')->closest('td')->nextAll('td')->text();

        $this->data['adh_pos_test_results'] = $crawler->filterXPath('//td[text() = "Arkansas Department of Health Lab positive test results"]')->closest('td')->nextAll('td')->text();

        $this->data['comlabs_pos_test_results'] = $crawler->filterXPath('//td[text() = "Commercial Lab positive test results"]')->nextAll('td')->text();

        return response()->json($this->data);
    }
}
