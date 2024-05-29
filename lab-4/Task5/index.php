<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editor</title>
</head>
<body>
<h1>Text Editor</h1>
<?php
use Task5\TextEditor;
require_once 'TextDocument.php';
require_once 'Memento.php';
require_once 'TextEditor.php';
require_once 'Caretaker.php';

session_start();

if (!isset($_SESSION['editor'])) {
    $_SESSION['editor'] = new TextEditor();
}

$editor = $_SESSION['editor'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        $editor->setText($_POST['text']);
    } elseif (isset($_POST['undo'])) {
        $editor->undo();
    }
}
?>

<form method="post">
    <textarea name="text" rows="10" cols="50"><?php echo htmlspecialchars($editor->getText()); ?></textarea><br>
    <button type="submit" name="save">Save</button>
    <button type="submit" name="undo">Delete</button>
</form>
</body>
</html>