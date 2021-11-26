<?php


$APIkey = "4a6030c307930e4f9353251f9bca7b33581d39486c6303357b64351cd4e21df0";
$from = '2019-03-13';
$to = '2019-03-13';

$curl_options = array(
    CURLOPT_URL => "https://allsportsapi.com/api/cricket/?met=Fixtures&APIkey=$APIkey&from=$from&to=$to",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => false,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CONNECTTIMEOUT => 5
);

$curl = curl_init();
curl_setopt_array($curl, $curl_options);
$results = curl_exec($curl);

//phpinfo()
$parsedResult = json_decode($results)->result[3];
// var_dump($results);

echo "<h1 style='color:red'>{$parsedResult->country_name}</h1>";

echo "<h1 style='color:blue'>{$parsedResult->league_season}</h1>";



echo "<h1 style='color:orange'>{$parsedResult->event_status_info}</h1>";






//$results = json_decode($results[0], true);


/*

$respObject = new stdClass();
$respObject->status = "true";
$respObject->response = $results;

*/


//var_dump($respObject);

// echo '<pre>';
// echo '<code>';
// print_r($results);
// echo '</code>';
// echo '</pre>';
/*

foreach ($results['result'] as $result) {
    // echo ($result['league_name'] ?? '') . '<br>';
    echo ($result['event_home_team'] ?? '') . '<br><br>';
    echo ($result['event_away_team'] ?? '') . '<br><br>';


    echo ($result['event_home_final_result'] ?? '') . '<br><br>';
    echo ($result['event_away_final_result'] ?? '') . '<br><br>';
    echo ($result['    country_name'] ?? '') . '<br><br>';
    echo ($result['    league_key'] ?? '') . '<br><br>';
}

*/

// $APIkey = "4a6030c307930e4f9353251f9bca7b33581d39486c6303357b64351cd4e21df0";

// $curl_options = array(
//     CURLOPT_URL => "https://allsportsapi.com/api/cricket/?met=Livescore&APIkey=$APIkey",
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_HEADER => false,
//     CURLOPT_TIMEOUT => 30,
//     CURLOPT_CONNECTTIMEOUT => 5
// );

// $curl = curl_init();
// curl_setopt_array($curl, $curl_options);
// $result = curl_exec($curl);

// $results = json_decode($results, true);


// echo '<pre>';
// echo '<code>';
// print_r($results);
// echo '</code>';
// echo '</pre>';