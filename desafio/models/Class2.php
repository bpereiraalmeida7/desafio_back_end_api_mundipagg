<?php

namespace CreateCustomer;

use MundiAPILib;
use MundiAPILib\Controllers;

class Caso02{
    function createPlan($body){
        $body = new CreatePlanRequest();
        $body = file_get_contents("../json/Caso02.json");
        $body = json_decode("../json/Caso02.json");
        $result = $plans->createPlan($body);
        $result = Request::post($_queryUrl.'/plans', $_headers, $body);

    }

}
