<?php
require_once('Perso.php')

$p1 = new Mage('Franck');
$p = new Warrior('Jason');

echo $p2->
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Php Bagarre game</h1>
    <h2>choose your character</h2>
    <section>
        <h3>PLayer 1 :<h3>
        <form method="GET" class="form 1">
            <select name="player1" id="1" placeholder="Choose your character">
                <option value="random">Random</option>
                <option value="mage">Mage</option>
                <option value="warrior">Warrior</option>
            </select>

            <input type="submit" value="ok">
        </form>

        <h3>PLayer 2 :<h3>
        <form method="GET" class="form 2">
            <select name="player2" id="2" placeholder="Choose your character">
                <option value="random">Random</option>
                <option value="mage">Mage</option>
                <option value="warrior">Warrior</option>
            </select>

            <input type="submit" value="ok">
        </form>
</body>
</html>