<?php
date_default_timezone_set('America/Chicago');
require __DIR__ . '/vendor/autoload.php';

$namespace = 'PropagoSoap';
$wsdl = 'http://test-api.mypropago.com/public/orderservice.asmx?WSDL';

$logger = new Monolog\Logger("log");
$logger->pushHandler(new Monolog\Handler\ErrorLogHandler(),Monolog\Logger::DEBUG);

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->setLogger($logger);
$generator->generate(
	new \Wsdl2PhpGenerator\Config(array(
		'inputFile' => $wsdl,
		'outputDir' => __DIR__ .'/../src/',
		'namespaceName' => $namespace,
		'soapClientOptions'=>array(
			'connection_timeout'=>'120',
			'cache_wsdl'=>WSDL_CACHE_MEMORY,
			'features'=>SOAP_SINGLE_ELEMENT_ARRAYS,
		)
	))
);