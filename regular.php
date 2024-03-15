<?php
    if($_POST){
        $regular = $_POST["regular"];
        if($regular == "1" || $regular == "2" || $regular == "3"){
            echo("Їхати заборонено");
        }else if($regular == "4"){
            echo("Поворот праворуч");
        }else if($regular == "5"){
            echo("Вперед і праворуч");
        }
        else if($regular == "6"){
            echo("У всі сторони");
        }else if($regular == "7"){
            echo("Стоп");
        }else{
            echo("Нема такого");
    }
 }
?>