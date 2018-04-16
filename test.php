<?php
require 'classes/IRequest.php';
require 'classes/AbstractRequest.php';
require 'classes/Real.php';
require 'classes/Mock.php';
require 'classes/MultiplyMock.php';
require 'classes/MultiplyReal.php';
require 'classes/Factory.php';
$sUrl = 'https://gist.githubusercontent.com/appelsin/d9cc31889a8af9cd36528f81420642af/raw/35f7f827c3db47a801822b824957e676ff5b710c/gistfile1.txt';

if (count($argv) !== 3){
    throw new \ArgumentCountError('Adasd');
}
$sSource = $argv[1];
$sType = $argv[2];
$sMethodName = strtolower($sType).ucfirst(strtolower($sSource));
$oRequest = Factory::$sMethodName($sUrl);
echo 'Result '.$oRequest->process();
