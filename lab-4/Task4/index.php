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
<?php
require_once 'LightNode.php';
require_once 'ImageLoadingStrategy.php';

$fileStrategy = new FileImageLoadingStrategy();
$networkStrategy = new NetworkImageLoadingStrategy();

$fileImage = new LightImageNode('example.jpg', $fileStrategy, 'Local Image');

$networkImage = new LightImageNode('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGrNZsK5Gdy5sDxadEg-K-xL7sOmIsEHI9eA&s', $networkStrategy, 'Network Image');

echo $fileImage->getOuterHTML();
echo '<br>';
echo $networkImage->getOuterHTML();
?>
</body>
</html>