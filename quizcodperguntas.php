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

$pergunta[2]['questoes']="3- Qual o livro mais vendido no mundo a seguir à Bíblia?";
$pergunta[2][0]=array("O Senhor dos Anéis",false);
$pergunta[2][1]=array(" Dom Quixote",true);
$pergunta[2][2]=array(" O Pequeno Príncipe",false);
$pergunta[2][3]=array(" Ela, a Feiticeira",false);

$pergunta[3]['questoes']="4- Atualmente, quantos elementos químicos a tabela periódica possui?";
$pergunta[3][0]=array("113",false);
$pergunta[3][1]=array(" 109",false);
$pergunta[3][2]=array(" 108",false);
$pergunta[3][3]=array(" 118",true);

$pergunta[4]['questoes']="5- Qual a nacionalidade de Che Guevara?";
$pergunta[4][0]=array("Cubana",false);
$pergunta[4][1]=array(" Peruana",false);
$pergunta[4][2]=array(" Argentina",true);
$pergunta[4][3]=array(" Boliviana",false);

$pergunta[5]['questoes']="6- Qual a altura da rede de vôlei nos jogos masculino e feminino?";
$pergunta[5][0]=array("2,45 m e 2,15 m",false);
$pergunta[5][1]=array(" 1,8 m e 1,5 m",false);
$pergunta[5][2]=array(" 2,43 m e 2,24 m",true);
$pergunta[5][3]=array(" 2,4 para ambos",false);

$pergunta[6]['questoes']="7- Em que ordem surgiram os modelos atômicos?";
$pergunta[6][0]=array(" Rutherford-Bohr, Rutherford, Thomson, Dalton",false);
$pergunta[6][1]=array(" Dalton, Thomson, Rutherford, Rutherford-Bohr",true);
$pergunta[6][2]=array(" Dalton, Rutherford-Bohr, Thomson, Rutherford",false);
$pergunta[6][3]=array(" Thomson, Dalton, Rutherford, Rutherford-Bohr",false);

$pergunta[7]['questoes']="8- Em que período da pré-história o fogo foi descoberto?";
$pergunta[7][0]=array(" Paleolítico",true);
$pergunta[7][1]=array(" Idade dos Metais",false);
$pergunta[7][2]=array(" Período da Pedra Polida",false);
$pergunta[7][3]=array(" Idade Média",false);

$pergunta[8]['questoes']="9- Qual a montanha mais alta do Brasil?";
$pergunta[8][0]=array(" Pico Paraná",false);
$pergunta[8][1]=array(" Monte Roraima",false);
$pergunta[8][2]=array(" Pico Maior de Friburgo",false);
$pergunta[8][3]=array(" Pico da Neblina",true);

$pergunta[9]['questoes']="10- Qual o número mínimo de jogadores em cada time numa partida de futebol?";
$pergunta[9][0]=array(" 8",false);
$pergunta[9][1]=array(" 7",true);
$pergunta[9][2]=array(" 11",false);
$pergunta[9][3]=array(" 9",false);





$certa=1;

if (isset($_POST['responder'])) {

    # code...
    $responder=$_POST['responder'];
    if (isset($_POST["perg"])) {
        # code...
        $perg=($_POST['perg']);
        if($perg==1){
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
                <input type="radio" name="perg" value="0"/> Oito <br/>
                <input type="radio" name="perg" value="1"/> Seis <br/>
                <input type="radio" name="perg" value="0"/> Sete <br/>
                <input type="radio" name="perg" value="0"/> Cinco <br/>
            </p>

            <p>
                <label><?php echo $pergunta[1]['questoes']?> </label><br/>
                <input type="radio" name="perg" value="1"/> Vaticano e Rússia <br/>
                <input type="radio" name="perg" value="0"/> Nauru e China <br/>
                <input type="radio" name="perg" value="0"/> Mônaco e Canadá <br/>
                <input type="radio" name="perg" value="0"/> Nauru e Rússia <br/>
            </p>
            <p>
                <label><?php echo $pergunta[2]['questoes']?> </label><br/>
                <input type="radio" name="perg" value="0"/> O Senhor dos Anéis<br/>
                <input type="radio" name="perg" value="1"/>Dom Quixote <br/>
                <input type="radio" name="perg" value="0"/> O Pequeno Príncipe <br/>
                <input type="radio" name="perg" value="0"/> Ela, a Feiticeira <br/>
            </p>
            <input type="submit" name="responder">
        </article>
    </form>
</body>
</html>