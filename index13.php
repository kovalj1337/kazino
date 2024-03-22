<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="form" action="index13.php" method="POST">
        <input type="radio" name="game" value="1" id="orel">
        <label for="orel">Орел</label>
        <input type="radio" name="game" value="2" id="reshka">
        <label for="reshka">Reshka</label>
        <button type="submit">lol</button>
    </form>
    <?php
    if ($_POST) {
        $game = ($_POST["game"]);
        $random = rand(1,2);
        if ($game == $random) {
            switch ($game) {
                case "1": {
                    echo "Вам випав орел ви виграли";
                    break;
                }
                case "2": {
                    echo "Вам випала решка ви виграли";
                    break;
                }
            }
        }else{
            echo 'Ви програли';
        }
    }
    ?>
</body>

</html>