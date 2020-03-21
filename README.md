![Arkansas COVID-19 Data API](https://arcovid.xyz/share.png)

# Arkansas COVID-19 Data API

A JSON API for accessing COVID-19 data on the [Arkansas Department of Health's website](https://www.healthy.arkansas.gov/programs-services/topics/novel-coronavirus).

## Data URL (returns JSON):

[https://arcovid.xyz/data](https://arcovid.xyz/data)

## Working locally

This project is a glorified web scraper built with [Goutte](https://github.com/FriendsOfPHP/Goutte) and [Laravel Lumen](https://lumen.laravel.com/docs/6.x). To work on it locally, you'll need to:

1. Clone this repo into a fresh directory on a machine with PHP 7.3+.
2. Ensure you have [Composer](https://getcomposer.org/) installed.
3. Run `composer install` from within the directory.
4. Serve (on Mac at least) with `php -S localhost:8000` from within the directory.

## Example response
```
{  
  last_updated: "March 20, 2020, 5:21pm",  
  total_confirmed_cases: "100",  
  adh_pos_test_results: "62",  
  comlabs_pos_test_results: "38",  
  persons_under_investigation: "176",  
  persons_being_monitored: "494",  
  past_puis_with_neg_results: "441",  
  adh_neg_test_results: "295",  
  comlabs_neg_test_results: "146"  
}
```

## Explanation of keys

**last_updated**  
The last time the ADH website was updated.

**total_confirmed_cases**  
Confirmed Cases of COVID-19 in Arkansas

**adh_pos_test_results**  
Arkansas Department of Health Lab positive test results

**comlabs_pos_test_results**  
Commercial lab positive test results

**persons_under_investigation**  
Persons Under Investigation (PUI)

**persons_being_monitored**  
Persons being monitored by ADH with daily check-in and guidance because of an identified risk

**past_puis_with_neg_results**  
Past PUIs with negative test results

**adh_neg_test_results**  
Arkansas Department of Health Lab negative test results

**comlabs_neg_test_results**  
Commercial Lab negative test results

## Disclaimer

This is an API written by someone who's never written an API. I do not recommend using this for mission-critical purposes as it relies on the tenuous placement of HTML on the Arkansas Department of Health's website and it could in theory break at any moment if they updated their website. If you receive a null value for any key, consider it an error (I haven't built in much error checking).

## Credits

Built in quarantine by [Jordan Little](https://jordanlittle.com).