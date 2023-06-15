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
        }
        button{
            background-color: dodgerblue;
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
        </style>
</head>
<body>
    <div>
    <h1>Vamos jogar?</h1>
    <h2>Digite um nome</h2>
    <input type="text" id="nome" placeholder="Nome">
    <br><br>
    <a href="quizcodperguntas.php"><button> Começar</button></a> 
    </div>
    
</body>
</html>