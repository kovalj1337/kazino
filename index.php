<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>КАЗІНО САНІ БОЧАРОВСКО ФЕМІЛІ МОНТЕНЕГРО</h1>
        <?php
        if($_POST){
            $game = $_POST["game"];
            $lol = rand(1,2);
            if(isset($_POST['attempts'])){
                $attempts = $_POST['attempts'];
                echo($attempts);
            }else{
                $attempts = 1;
                echo($attempts);
            }
            if($attempts <= 10){
                echo($attempts);
                if($game == $lol){
                    $_POST['attempts'] = ++$attempts;
                    echo ("Ви виграли");
                    if($lol == 1){
                        echo ("Вам випав орел");
                    }else{
                        echo ("Вам випала решка");
                    }
                }else{
                    $_POST['attempts'] = ++$attempts;
                    echo ("Ви програли");
                }
            }else{
                echo ("Ваші спроби закінчились");
            }
        }
        ?>
        <form action="index.php" method="post">
            <input type="radio" name="game" value="1" id="orel">
            <label for="orel">Орел</label>
            <input type="radio" name="game" value="2" id="reshka">
            <label for="reshka">Reshka</label>
            <input type="hidden" name="attempts" value="<?php echo (isset($_POST['attempts']));?>">
            <button type="submit">sabmit</button>
        </form>
</body>
</html>