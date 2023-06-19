<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <style>
        
        
        footer{
            background-color: black;
            position: fixed;
            bottom:0;
            left:0;
            color: aliceblue;
            background-color:rgb(7, 7, 7);
            width: 100%;
            text-align: left;
            font-family:Arial, Helvetica, sans-serif;
            padding-left: 20px;
            padding-right: 20px;
            font-size: 13px;
            font-weight: bold;


        }

        footer .container{
            display: flex;
            color:white;

        }
        footer .container ul{
            width:50%;
        }
        .site{
            display:flex;
            min-height:100vh;
            flex-direction:column;
            font-family: 'verdana';
            background: url("imagens/fundo2.jpeg");
            background-size: cover;
        }
        .site-content{
            flex:1;
            background-color: rgba(0,0,0,0.9) ;
            position: absolute;
            top: 39%;
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
<body class="site">
    <article class="site-content">
        <center><h1>QUIZ</h1></center>
        <center><h2>CONHECIMENTOS GERAIS</h2></center>
        <center><h3>Vamos jogar?</h3></center>
        <h4>Digite um nome:</h4>
        <input type="text" id="nome" placeholder="Nome" autocomplete="off">
        <br><br>
        <a href="quizcodperguntas.php"><button> Começar</button></a>
    </article>

    <footer>
        <div class="container">
            <ul>
                <p>
                    Projeto P/ Disciplina de Programação pra Internet <br>
                    Professor: Eberton Marinho <br>
                    Unidade 1
                </p>

            </ul>
            
            <ul>
                <p>
                    Desenvolvedores <br>
                    Amanda Nascimento - n.gabriela@escolar.ifrn.edu.br <br>
                    Eloiza Carvalho- eloiza.c@escolar.ifrn.edu.br <br>
                    Guilherme Dionizio - g.dionizio@escolar.ifrn.edu.br <br>
                    Letícia Pontes - leticia.pontes@escolar.ifrn.edu.br <br>
                    Maria Catarini - catarini.silva@escolar.ifrn.edu.br
                </p>
            </ul>
        </div>
        

    </footer>

    
    
</body>
</html>