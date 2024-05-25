<?php

namespace classes\subscriptions;

require_once 'ISubscription.php';
class DomesticSubscription implements ISubscription
{
    public function getMonthlyFee()
    {
        return 10;
    }

    public function getMinimumPeriod()
    {
        return 6;
    }

    public function getChannels()
    {
        return ['Новини', 'Спорт', 'Розваги'];
    }
}