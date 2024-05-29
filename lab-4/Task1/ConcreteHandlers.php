<?php

require_once 'Handler.php';

class GeneralInquiryHandler extends Handler
{
    protected function process($request)
    {
        if ($request === '1') {
            return "Загальні питання: Ваша проблема була вирішена.";
        }
        return null;
    }
}

class BillingHandler extends Handler
{
    protected function process($request)
    {
        if ($request === '2') {
            return "Питання щодо рахунків: Ваша проблема була вирішена.";
        }
        return null;
    }
}

class TechnicalSupportHandler extends Handler
{
    protected function process($request)
    {
        if ($request === '3') {
            return "Технічна підтримка: Ваша проблема була вирішена.";
        }
        return null;
    }
}

class OtherInquiriesHandler extends Handler
{
    protected function process($request)
    {
        if ($request === '4') {
            return "Інші питання: Ваша проблема була вирішена.";
        }
        return null;
    }
}


