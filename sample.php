<?php
/*
 * Example Usage of this class
 */
if(php_sapi_name() != 'cli'){
	die("this can only be run through the command line");
}
date_default_timezone_set('UTC');
include 'vendor/autoload.php';
/*
 * All requests must have a credentials.
 * Contact support@propago.com for access.
 */
$credentials = new \PropagoSoap\Credentials();
$credentials->setApiKey("test");
$credentials->setCustomerName("test");
/*
 * This request also needs an OrderSearch
 */
$searchFilter = new \PropagoSoap\OrderSearch(0,50);
$searchFilter->setOrderSubmittedStartDate(new \DateTime('2018-01-01 00:00:00'));
$searchFilter->setStatus('All');
/*
 * Configure the request with these options
 */
$request = new \PropagoSoap\SearchOrders($credentials,$searchFilter);

/*
 * Options may be passed directly to the php soap client.
 */
$options = [
	//'proxy_host'=>'127.0.0.1',
	//'proxy_port'=>'8888',
];
/*
 * Note that if you do not explicitly provide the wsdl address,
 * the service will default to propago Live Environment.
 */
$wsdl = 'http://test-api.mypropago.com/public/orderservice.asmx?WSDL';
$service = new \PropagoSoap\OrderService($options,$wsdl);

/**
 * Execute the soap request and have a soap response
 */
$response = $service->SearchOrders($request);

print_r($response);