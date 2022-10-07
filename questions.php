
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
    <h1><a href="index.php"> Quizz Game </a></h1>  <hr>
    <div class="div_questions">
        <?php
            $data = file_get_contents("quizz.json");
            $quizz = json_decode($data);
            session_start();
            $array=$_SESSION["array"];
            $k++;
            echo ($i+1).'. '. $quizz[$array[$k]]->question. '<br>';
                    
            echo  $quizz[$array[$k]]->answers[$j]. '<br>';
            
            echo '<br>';



        ?>
    
        <h3>
             <!-- $_SESSION["preguntas"];  -->
            
        </h3>
        <hr>

        <?php    
            // foreach ($preguntas->answers as $answer){
            // $i++;
        ?>
                <!-- <form action="valida.php" method="get">                -->
                <!-- <input type="text" name="id_question" value=""> -->
                <!-- ?php             
                    $i = 0;
                    foreach ($dataRand->answers as $key => $answer) {
                    $i++;  ?>-->
                <!-- <input type="hidden" name="id_answer" value=" $i - 1; ?>"></input> -->
                <!-- $answer; ?> -->
                <!-- <input name="answer" type='radio' value='key> '><br><br></input> -->
                <!-- <label for="html">  </label> <br><br> -->
            <!-- < } ?>  -->
                <!-- <input type="submit" value="Enviar"></input> -->
            <!-- </form> -->
    <!-- </div> -->
        <hr>
</body>
</html>