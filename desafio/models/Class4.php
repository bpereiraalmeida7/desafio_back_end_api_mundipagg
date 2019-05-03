<?php

namespace CreateCustomer;

use MundiAPILib;
use MundiAPILib\Controllers;

class Caso04{
    function updateCard($customerId, $cardId, $request){
        $file = file_get_contents("../json/Caso04.json");
        $file = json_decode("../json/Caso04.json");
        $customerId = $file->customer_id;
        $cardId = $file->card_id;
        $request = new UpdateCardRequest();
        $request = $file;

        $result = $customers->updateCard($customerId, $cardId, $request);
        $result = Request::patch($_queryUrl.'/charges/charge_id/card', $_headers, $body);
    }
}