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
        'comlabs_pos_test_results' => null,
        'persons_under_investigation' => null,
        'persons_being_monitored' => null,
        'past_puis_with_neg_results' => null,
        'adh_neg_test_results' => null,
        'comlabs_neg_test_results' => null
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
            if (strpos($node->text(), 'Status Update as of') !== false) {
                $this->data['last_updated'] = str_replace('Status Update as of ','',$node->text() );
            }
        });

        $this->data['total_confirmed_cases'] = $crawler->filterXPath('//td/strong[text() = "Confirmed Cases of COVID-19 in Arkansas"]')->closest('td')->nextAll('td')->text();

        $this->data['adh_pos_test_results'] = $crawler->filterXPath('//td[text() = "Arkansas Department of Health Lab positive test results"]')->closest('td')->nextAll('td')->text();

        $this->data['comlabs_pos_test_results'] = $crawler->filterXPath('//td[text() = "Commercial lab positive test results"]')->closest('td')->nextAll('td')->text();

        $this->data['persons_under_investigation'] = $crawler->filterXPath('//td/strong[text() = "Persons Under Investigation (PUI)"]')->closest('td')->nextAll('td')->text();

        $this->data['persons_being_monitored'] = $crawler->filterXPath('//td/strong[text() = "Persons being monitored by ADH with daily check-in and guidance because of an identified risk"]')->closest('td')->nextAll('td')->text();

        $this->data['past_puis_with_neg_results'] = $crawler->filterXPath('//td/strong[text() = "Past PUIs with negative test results"]')->closest('td')->nextAll('td')->text();

        $this->data['adh_neg_test_results'] = $crawler->filterXPath('//td[text() = "Arkansas Department of Health Lab negative test results"]')->closest('td')->nextAll('td')->text();
        $this->data['comlabs_neg_test_results'] = $crawler->filterXPath('//td[text() = "Commercial Lab negative test results"]')->closest('td')->nextAll('td')->text();
        
        return response()->json($this->data);
    }
}
