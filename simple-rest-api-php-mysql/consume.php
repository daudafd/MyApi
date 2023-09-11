<?php


$rest_api_url = 'http://test.osynelection.com.ng/create-simple-rest-api-php-mysql/items/read';


// Reads the JSON file.
$json_data = file_get_contents($rest_api_url);


// Decodes the JSON data into a PHP array.
$response_data = json_decode($json_data);


// All the users data exists in 'data' object
$user_data = $response_data->items;


// It cuts the long data into small & select only the first 5 records.
$user_data = array_slice($user_data, 0, 5);


// Print data if need to debug


// It traverses the array and display user data
foreach ($user_data as $user) {
  echo "Item name: ".$user->name;
  echo "<br />";
  echo "Description: ".$user->description;
  echo "<br /> <br />";
  echo "Price: ".$user->price;
  echo "<br />";
}


?>
