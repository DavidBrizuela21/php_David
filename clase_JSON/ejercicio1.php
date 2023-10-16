<?php
class Client{
	var $name;
	var $age;
	var $city;
	public function __construct(){}
}

//objeto a json
$client = new Client();
$client->name = "David";
$client->age = 20;
$client->city= "Nemby";

$code_json = json_encode($client);

echo $code_json;
?>