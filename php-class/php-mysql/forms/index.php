<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formalario con Get-Post</title>
</head>
<body>
    <div>
        <p>
        Esto es una pagina con un formulario
        </p>
    </div>
    <form action="recibir.php?edad=23" method="post">
        <label for="">Nombre:</label>
        <input type="text" name="formName" id="formName">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>