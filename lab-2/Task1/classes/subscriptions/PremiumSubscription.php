<?php

namespace classes\subscriptions;

require_once 'ISubscription.php';
class PremiumSubscription implements ISubscription {
    public function getMonthlyFee() {
        return 20;
    }

    public function getMinimumPeriod() {
        return 1;
    }

    public function getChannels() {
        return ['Фільми', 'Premium Sports', 'Ексклюзивні серіали'];
    }
}