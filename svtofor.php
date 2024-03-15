<?php
    if($_POST){
        $light = $_POST["light"];
        if($light == 1){
            echo("He mozhe jixatu");
        }else if($light == 2){
            echo("Gotovitjsya");
        }else if($light ==  3){
            echo("Mozhe jixatu");
        }else{
            echo("Nevirne znachenya");
        }
    }
?>