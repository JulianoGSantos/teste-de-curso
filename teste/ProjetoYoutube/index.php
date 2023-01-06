<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PROJETO YOUTUBE</title>
    </head>
    <body><pre>
        <?php
        require_once 'Video.php';
        require_once 'AcoesVideo.php';
        require_once 'Usuario.php';
        
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");
        $v[3] = new Video("Aula 18 de MySql");
        print_r($v);
        
        $u[0] = new Usuario("Jot123", "Juliano", 36, "M");
        $u[1] = new Usuario("Mat123", "Matheus", 1, "M");
        print_r($u);
        ?>
        </pre>
    </body>
</html>
