<?php

namespace classes\subscriptions;

require_once 'ISubscription.php';
class EducationalSubscription implements ISubscription {
    public function getMonthlyFee() {
        return 5;
    }

    public function getMinimumPeriod() {
        return 12;
    }

    public function getChannels() {
        return ['Наукові', 'Історичні', 'Документальні'];
    }
}