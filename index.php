<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>КАЗІНО САНІ БОЧАРОВСКО ФЕМІЛІ МОНТЕНЕГРО</h1>
    <form action="index.php" method="post">
        <input type="hidden" name="attempts" value="<?php echo ($attempts); ?>">
        <input type="radio" name="game" value="1" id="orel">
        <label for="orel">Орел</label>
        <input type="radio" name="game" value="2" id="reshka">
        <label for="reshka">Reshka</label>
        <button type="submit">lol</button>
    </form>
</body>
</html>
<?php
    if($_POST){
        $game = $_POST["game"];
        $lol = rand(1,2);
        $attempts = $_POST['attempts'];
        if($attempts < 9){
            if($game == $lol){
                echo ("Ви виграли");
                $attempts++;
                if($lol == 1){
                    echo ("Вам випав орел");
                    $attempts++;
                    echo ($attemps);
                }else{
                    echo ("Вам випала решка");
                    $attempts++;
                    echo ($attemps);
                }
            }else{
                echo ("Ви програли");
                $attempts++;
                echo ($attemps);
            }
        }else{
            echo ("Ваші спроби закінчились");
        }
    }
?>