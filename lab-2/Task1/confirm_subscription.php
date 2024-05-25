<?php
require_once 'autoload.php';

session_start();

if (!isset($_SESSION['subscription']) || !isset($_SESSION['subscriptionType']) || !isset($_SESSION['purchaseMethod'])) {
    header('Location: index.html');
    exit;
}

$subscription = unserialize($_SESSION['subscription']);
$subscriptionType = $_SESSION['subscriptionType'];
$purchaseMethod = $_SESSION['purchaseMethod'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm'])) {
        $message = "Ви успішно створили підписку на " . ucfirst($subscriptionType) . " .Метод створення:  " . ucfirst($purchaseMethod) . ".";
        echo "<script type='text/javascript'>alert('$message'); window.location.href = 'index.html';</script>";
        session_destroy();
    } elseif (isset($_POST['back'])) {
        header('Location: index.html');
        exit;
    }
} else {
    echo "<div style='max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid darkgray; border-radius: 5px; background-color: beige;'>";
    echo "<h2 style='text-align: center;'>Опис даної підписки:</h2>";
    echo "<p><strong>Щомісячна оплата:</strong> $" . $subscription->getMonthlyFee() . "</p>";
    echo "<p><strong>Мінімальний період:</strong> " . $subscription->getMinimumPeriod() . " місяців</p>";
    echo "<p><strong>Доступні канали:</strong> " . implode(', ', $subscription->getChannels()) . "</p>";

    echo '<div style="text-align: center; margin-top: 20px;">';
    echo '<form method="post" action="confirm_subscription.php">';
    echo '<input type="submit" name="confirm" value="Оформити підписку" style="background-color: green; color: white; border: none; border-radius: 3px;  padding: 10px; margin-right: 10px;">';
    echo '<input type="submit" name="back" value="Назад" style="background-color: grey; color: black; border: none; border-radius: 3px;padding: 10px;">';
    echo '</form>';
    echo '</div>';
    echo "</div>";

}
