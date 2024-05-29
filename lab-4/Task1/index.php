<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body>
<h1>Система підтримки користувачів</h1>
<h2>Вітаємо, чим можемо допомогти?</h2>
<?php
require_once 'SupportSystem.php';

session_start();

if (!isset($_SESSION['support_system'])) {
    $_SESSION['support_system'] = new SupportSystem();
    $_SESSION['current_level'] = 'start';
}

$supportSystem = $_SESSION['support_system'];
$currentLevel = $_SESSION['current_level'];
$response = '';
$showPhoneForm = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['choice'])) {
        $choice = $_POST['choice'];
        $nextQuestion = $supportSystem->getNextQuestion($choice);

        if ($nextQuestion !== null) {
            $_SESSION['current_level'] = $choice;
            $currentLevel = $choice;
        } else {
            $response = $supportSystem->getResponse($choice);
            $_SESSION['current_level'] = 'start';
            $showPhoneForm = true;
        }
    } elseif (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
        echo "<p>Дякуємо! Ми зателефонуємо вам на номер $phone.</p>";
        $_SESSION['current_level'] = 'start';
    }
}

$question = $supportSystem->getNextQuestion($currentLevel);
?>

<?php if ($response && $showPhoneForm) : ?>
    <p><?php echo $response; ?></p>
    <form method="post">
        <p>Будь ласка, залиште свій номер телефону для зворотного дзвінка:</p>
        <input type="tel" name="phone" required>
        <button type="submit">Відправити</button>
    </form>
<?php elseif ($question) : ?>
    <form method="post">
        <p><?php echo $question['question']; ?></p>
        <?php foreach ($question['options'] as $key => $value) : ?>
            <div>
                <input type="radio" id="choice<?php echo $key; ?>" name="choice" value="<?php echo $key; ?>" required>
                <label for="choice<?php echo $key; ?>"><?php echo $value; ?></label>
            </div>
        <?php endforeach; ?>
        <button type="submit">Відправити</button>
    </form>
<?php endif; ?>
</body>
</html>