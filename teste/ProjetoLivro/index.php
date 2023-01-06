<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Livro</title>
    </head>
    <body><pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $l[0] = new Pessoa("Juliano", 36, "masculino");
        $l[1] = new Pessoa("Pâmela", 39, "feminino");
        
        $b[0] = new Livro("Inteligência Emocional", "Bruno Mendes", 500, $l[0]);
        $b[1] = new Livro("Adultos Índigo", "Ingrid Cañete", 200, $l[1]);
        
        $l[0]->fazerAniver();
        $b[0]->folhear(80);
        $b[0]->getPagAtual();
        print_r($l[0]);
        $b[0]->detalhes();
        ?>
        </pre>
    </body>
</html>
