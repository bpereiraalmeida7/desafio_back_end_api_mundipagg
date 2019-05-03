<?php

namespace CreateCustomer;

use MundiAPILib;
use MundiAPILib\Controllers;

class Caso01{

    public $basicAuthUserName = 'basicAuthUserName'; 
    public $basicAuthPassword = 'basicAuthPassword'; 

    //public $client = new MundiAPILib\MundiAPIClient($basicAuthUserName, $basicAuthPassword);

    function createSubscription($body){
        $body = new CreateSubscriptionRequest();
        $body = file_get_contents("../json/Caso01.json");
        $result = $subscriptions->createSubscription($body);
        $result = Request::post($_queryUrl.'/customers', $_headers, $body);

    }
    

}