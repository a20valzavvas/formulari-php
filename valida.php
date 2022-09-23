<?php
session_start();

//phpinfo()
$arr_questions = null;

$strQuizz = file_get_contents("quizz.json");

//echo $strQuizz;

$quizz = json_decode($strQuizz);


$arr_lenght = count($quizz);


$id = $_GET["answer"];

if ($quizz[0]->correctIndex == $id) {
    echo "Es correcto! =>" . $id;
} else {

    echo "No es correcto ! =>" . $id;
}

?>