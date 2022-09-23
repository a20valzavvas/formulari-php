<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    
    <h1><a href="index.php"> Quizz Game </a></h1>
    <div>
        <?php
    
            $data = file_get_contents("quizz.json");
            $quizz = json_decode($data);
    
            // session_start();
    
            $index = 0;
            $preguntas = $quizz;
            $success = 0;
    
    
            $_SESSION["index"] = $index;
            $_SESSION["preguntas"] = $preguntas;
            $_SESSION["success"] = $success;
    
        ?>
        <p>Clica al botó per començar</p>
        <form action="questions.php" method="get" style="padding:10px">
            <input type="submit" class="btn_index" name="btn_start" value="Jugar">
        </form>
    </div>

</body>    
</html>


