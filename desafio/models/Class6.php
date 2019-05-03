<?php

namespace CreateCustomer;

use MundiAPILib;
use MundiAPILib\Controllers;

class Caso06{
    function deleteSubscriptionItem($subscriptionId, $subscriptionItemId){
        $file = file_get_contents("../json/Caso06.json");
        $file = json_decode("../json/Caso06.json");
        $subscriptionId = $file->subscription_id;
        $subscriptionItemId = $file->subscription_item_id;

        $result = $subscriptions->deleteSubscriptionItem($subscriptionId, $subscriptionItemId);
        $result = Request::delete($_queryUrl.'/plans', $_headers, $file);

    }
}