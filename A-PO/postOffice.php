<?php

require_once 'autoload.php';

$company = Company::getInstance();
//var_dump($company);

var_dump($company->getOffices());