<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>morte</title>

    <style>

        body{
            background-color: black;
        }
        div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            font-size: 50px;
        }
        h1{
          
            color: red;
            font-family: monospace;
            border-right: 4px solid;
            width: 11ch;
            white-space: nowrap;
            overflow: hidden;
            animation: typing 2s steps(8), blinking 0.5s infinite step-end alternate;
        }
        @keyframes typing{
            from{
                width: 0;
            }
        }
        @keyframes blinking{
            50%{
                border-color: transparent;
            }
        }
        p{
        color: red;
        display: inline-block;
        white-space: pre-line;
        animation: appear 5s forwards;
    }

.hidden {
    opacity: 0;
}

@keyframes appear {
    to {
        opacity: 1;
    }
           
}
a{
    text-decoration: none;
   color: white;
}
    

    </style>
</head>
<body>

<audio autoplay loop>
        <source src="som/morte.mp3" type="audio/mpeg">
        Seu navegador não suporta a tag de áudio.
      </audio>


    <div class="container">
        <h1> VOCÊ MORREU</h1>
        <a href="game.php?id=42">Prosseguir</a>
    </div>

    
</body>
</html>