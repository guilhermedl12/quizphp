<?php 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <style>
        body{
            font-family: 'times new roman';
            background: url("imagens/fundo2.jpeg");
            background-size: cover;
           
        }
        div{
            background-color: rgba(0,0,0,0.9) ; 
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%, -50%);
            padding:70px;
            border-radius:15px;
            color:white;
        }
        input{
            
            padding:15px;
            border:none;
            outline:none;
            width: 500px;
            border-radius: 10px;
        }
        button{
            background-color: rgba(219, 161, 35, 0.993);
            border:none;
            padding: 15px;
            width: 100%;
            border-radius:10px;
            color:white;
            font-size:15px;
        }
        button:hover{
           background-color:deepskyblue;
        }
        .h2 {
    text-align: center;
            }
        .h4 {
            text-align: center;
            }
        </style>
</head>
<body>
    <div>
    <center><h1>QUIZ</h1></center>
    <center><h2>CONHECIMENTOS GERAIS</h2></center>
    <center><h3>Vamos jogar?</h3></center>
    <h4>Digite um nome:</h4>
    <input type="text" id="nome" placeholder="Nome">
    <br><br>
    <a href="quizcodperguntas.php"><button> Começar</button></a> 
    </div>
    
</body>
</html>