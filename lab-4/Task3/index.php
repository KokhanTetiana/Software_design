<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <style>
        #message {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid darkgray;
            display: none;
        }
    </style>
    <script>
        function handleClick() {
            displayMessage('Element clicked!');
        }

        function handleMouseOver() {
            displayMessage('Mouse over the element!');
        }

        function displayMessage(message) {
            const messageDiv = document.getElementById('message');
            messageDiv.innerText = message;
            messageDiv.style.display = 'block';
        }
    </script>
</head>
<body>
<?php
require_once 'LightNode.php';
require_once 'EventManager.php';

$childText = new LightTextNode('Click me!');
$element = new LightElementNode('button', 'block', 'double', ['btn', 'btn-primary'], [$childText]);

$element->addEventListener('click', function() {
    echo "<script>handleClick();</script>";
});

$element->addEventListener('mouseover', function() {
    echo "<script>handleMouseOver();</script>";
});

echo $element->getOuterHTML();
?>
<div id="message"></div>
<div id="message"></div>
</body>
</html>
