<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';
        
        $c1= new Caneta();
        $c1->setModelo("Bic cristal");
        $c1->setPonta(0.5);
        print "o modelo atual da caneta é {$c1->getModelo()} com a ponta {$c1->getPonta()}";
        ?>
        </pre>
    </body>
</html>
