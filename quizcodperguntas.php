<?php 

$pergunta[0]['questoes']="1- Quantos continentes existem na Terra?";
$pergunta[0][0]=array(" Oito",false);
$pergunta[0][1]=array(" Cinco",false);
$pergunta[0][2]=array(" Sete",false);
$pergunta[0][3]=array(" Seis",true);

$pergunta[1]['questoes']="2- Qual o menor e o maior país do mundo?";
$pergunta[1][0]=array(" Vaticano e Rússia",true);
$pergunta[1][1]=array(" Nauru e China",false);
$pergunta[1][2]=array(" Mônaco e Canadá",false);
$pergunta[1][3]=array(" Nauru e Rússia",false);



$certa=1;

if (isset($_POST['responder'])) {
    # code...
    $responder=$_POST['responder'];
    if (isset($_POST["perg1"])) {
        # code...
        $perg1=($_POST['perg1']);
        if($perg1==1){
            echo "acertou";
        } else{
            echo "errou";

        }
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
</head>
<body>
    <form method="POST" action="quizcodperguntas.php">
        <h1>Quiz Conhecimentos Gerais</h1>
        <article>
            <p>
                <label><?php echo $pergunta[0]['questoes']?> </label><br/>
                <input type="radio" name="perg1" value="0"/> Oito <br/>
                <input type="radio" name="perg1" value="0"/> Seis <br/>
                <input type="radio" name="perg1" value="1"/> Sete <br/>
                <input type="radio" name="perg1" value="0"/> Cinco <br/>
            </p>

            <p>
                <label><?php echo $pergunta[1]['questoes']?> </label><br/>
                <input type="radio" name="perg2" value="1"/> Vaticano e Rússia <br/>
                <input type="radio" name="perg2" value="0"/> Nauru e China <br/>
                <input type="radio" name="perg2" value="0"/> Mônaco e Canadá <br/>
                <input type="radio" name="perg2" value="0"/> Nauru e Rússia <br/>
            </p>
    
            <input type="submit" name="responder">
        </article>
    </form>
</body>
</html>