<?php
include "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" media="all">
    <script>
        function ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if(req.readyState == 4 && req.status == 200){
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }
            req.open('GET','chat.php',true);
            req.send();
        }
    </script>
    <title>Chat con ajax</title>
</head>
<body onload="ajax();">
    <div id="container">
        <div id="chat_box">
            <div id="chat">
            </div>
        </div>
        <form method="POST" action="index.php">
            <input type="text" placeholder="Nombre" name="name">
            <textarea name="msg" placeholder="Enter message"></textarea>
            <input type="submit" name="submit" value="Enviar">
        </form>
        <?php 
        if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $msg = $_POST['msg'];


        $query = "insert into chat (name,message) values ('$name','$msg')";
        $run = $objCon->conexion->query($query);
        if($run){
            echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true' />";   
        }
        }else{
            echo "Llene los campos";
        }
        ?>
    </div>

</body>
</html>