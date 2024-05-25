<?php

namespace classes\subscriptions;
interface ISubscription
{
    public function getMonthlyFee();

    public function getMinimumPeriod();

    public function getChannels();
}
