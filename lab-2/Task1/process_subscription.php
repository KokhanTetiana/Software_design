<?php

require_once 'autoload.php';

use classes\creators\WebSite;
use classes\creators\MobileApp;
use classes\creators\ManagerCall;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subscriptionType = $_POST['subscriptionType'];
    $purchaseMethod = $_POST['purchaseMethod'];

    $creator = null;
    switch ($purchaseMethod) {
        case 'website':
            $creator = new WebSite();
            break;
        case 'mobileApp':
            $creator = new MobileApp();
            break;
        case 'managerCall':
            $creator = new ManagerCall();
            break;
        default:
            throw new Exception("Невідомий метод створення");
    }

    $subscription = $creator->createSubscription($subscriptionType);

    session_start();
    $_SESSION['subscription'] = serialize($subscription);
    $_SESSION['subscriptionType'] = $subscriptionType;
    $_SESSION['purchaseMethod'] = $purchaseMethod;

    header('Location: confirm_subscription.php');
    exit;
}
