<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UFC</title>
    </head>
    <body><pre>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            
            $l = array();
            $l[0]= new Lutador("Anderson Silva", "Brasil", 33, 1.93, 83.1, 31, 1, 1);
            $l[1]= new Lutador("Criss weidman", "Estados Unidos", 27, 1.88, 83.1, 15, 0, 1);
            
            $l[0]->apresentar();
            $l[0]->ganharLuta();
            $l[0]->perderLuta();
            $l[0]->empatarLuta();
            $l[0]->status();
            
            $UFC = new Luta();
            $UFC->marcarLuta($l[0], $l[1]);
            $UFC->lutar();
            $l[0]->status();
            $l[1]->status();
            ?></pre>
    </body>
</html>
