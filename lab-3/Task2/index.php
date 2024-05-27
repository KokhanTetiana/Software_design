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
<h1>Create Your RPG Hero</h1>
<form method="post" action="create_hero.php">
    <label for="hero">Choose your hero:</label>
    <select name="hero" id="hero">
        <option value="Warrior">Warrior</option>
        <option value="Mage">Mage</option>
        <option value="Paladin">Paladin</option>
    </select>
    <br><br>
    <label>Choose your inventory:</label><br>
    <input type="checkbox" id="weapon" name="inventory[]" value="Weapon">
    <label for="weapon">Weapon</label>
    <input type="checkbox" id="armor" name="inventory[]" value="Armor">
    <label for="armor">Armor</label>
    <input type="checkbox" id="artifact" name="inventory[]" value="Artifact">
    <label for="artifact">Artifact</label>
    <br><br>
    <input type="submit" value="Create Hero">
</form>
</body>
</html>

