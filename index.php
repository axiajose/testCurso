<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Prueba de seguridad</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Escribe tu texto:</label>
            <input type="text" name="texto" id="texto" maxlength="10">
            <input type="submit" value="Enviar">
        <div class="alert alert-success" role="alert">
        Su mensaje ha sido: <?php 
        if (isset($_POST["texto"])) {
           echo $_POST["texto"];
           echo htmlspecialchars($_POST["texto"], ENT_QUOTES, 'UTF-8');
 
        }
        
        ?> 


        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        var mivariable = "El texto de mi variable";
    </script>
</body>
</html>

<?php


?>
