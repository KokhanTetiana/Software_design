<?php
class Authenticator {
    private static $instance = null;
    private function __construct() {}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function authenticate($username, $password) {
        return ($username === 'admin' && $password === 'admin');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $authenticator = Authenticator::getInstance();
    $isAuthenticated = $authenticator->authenticate($username, $password);

    if ($isAuthenticated) {
        echo "Успішно автентифіковано!";
    } else {
        echo "Невірний логін або пароль.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
</head>
<body>
<h2>Форма автентифікації</h2>
<form method="post" action="">
    <label for="username">Логін:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Увійти">
</form>
</body>
</html>