<?php

namespace classes\creators;

use classes\subscriptions\DomesticSubscription;
use classes\subscriptions\EducationalSubscription;
use classes\subscriptions\PremiumSubscription;

require_once 'ICreator.php';
class WebSite implements ICreator {
    public function createSubscription($type) {
        switch ($type) {
            case 'domestic':
                return new DomesticSubscription();
            case 'educational':
                return new EducationalSubscription();
            case 'premium':
                return new PremiumSubscription();
            default:
                throw new \Exception("Unknown subscription type");
        }
    }
}