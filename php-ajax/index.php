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
    <title>Chat con ajax</title>
</head>
<body>
    <div id="container">
        <div id="chat_box">
            <div id="chat_data">
                <span style="color:green">Wali:</span>
                <span style="color:red">How are you?</span>
                <span style="color:blue; float:right">12:30PM</span>
            </div>
        </div>
        <form action="post" action="recibir.php">
            <input type="text" placeholder="Nombre" name="name">
            <textarea name="enter_message" placeholder="Enter message"></textarea>
            <input type="submit" value="Enviar">
        </form>
    </div>

</body>
</html>