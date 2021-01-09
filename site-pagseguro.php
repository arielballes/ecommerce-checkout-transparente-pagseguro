<?php

use \Hcode\Page;
use \Hcode\Model\User;
use \GuzzleHttp\Client;
use \Hcode\PagSeguro\Config;

$app->get('/payment/pagseguro', function() {
	$client = new Client();
	$response = $client->request('POST', Config::getUrlSessions() . "?" . http_build_query(Config::getAuthencation()), [
			'verify'=>false 
	]);

	echo $response->getBody()->getContents();

	

});

?>