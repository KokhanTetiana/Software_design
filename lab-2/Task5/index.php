<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <script>
        function showActions() {
            var characterType = document.getElementById("type").value;
            var actionsSelect = document.getElementById("actions");

            actionsSelect.innerHTML = '';

            if (characterType === "hero") {
                var goodActions = ["Захищати світ від поганців", "Допомагати іншим", "Турбуватися про природу"];
                for (var i = 0; i < goodActions.length; i++) {
                    var option = document.createElement("option");
                    option.text = goodActions[i];
                    actionsSelect.add(option);
                }
            } else if (characterType === "enemy") {
                var evilActions = ["Знищувати будинки", "Створювати конфлікти", "Шкодити довкіллю"];
                for (var i = 0; i < evilActions.length; i++) {
                    var option = document.createElement("option");
                    option.text = evilActions[i];
                    actionsSelect.add(option);
                }
            }
        }
    </script>
</head>
<body>
<h2>Створіть свого персонажа</h2>
<form action="create_character.php" method="post">
    <label for="type">Яким персонажем ви хочете бути?</label>
    <select name="type" id="type" onchange="showActions()">
        <option value="hero">Добрим</option>
        <option value="enemy">Злим</option>
    </select>
    <br><br>
    <label for="actions">Оберіть силу персонажа:</label>
    <select name="actions" id="actions">
    </select>
    <br><br>
    <label for="height">Зріст:</label>
    <input type="text" id="height" name="height">
    <br><br>
    <label for="build">Статура:</label>
    <input type="text" id="build" name="build">
    <br><br>
    <label for="hair_color">Колір волосся:</label>
    <input type="text" id="hair_color" name="hair_color">
    <br><br>
    <label for="eye_color">Колір очей:</label>
    <input type="text" id="eye_color" name="eye_color">
    <br><br>
    <label for="clothing">Одяг, який любить носити:</label>
    <input type="text" id="clothing" name="clothing">
    <br><br>
    <label for="inventory">Знаряддя, яке використовує:</label>
    <input type="text" id="inventory" name="inventory">
    <br><br>
    <input type="submit" value="Створити">
</form>
</body>
</html>
