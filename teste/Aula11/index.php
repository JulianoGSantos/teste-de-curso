<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11</title>
    </head>
    <body><pre>
        <?php
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        
        $v = new Visitante();
        $a = new Aluno();
        $b = new Bolsista();
        
        $v->setNome("Juliano");
        $v->setIdade(36);
        $v->setSexo("M");
        print_r($v);
        
        $a->setNome("Matheus");
        $a->setIdade(1);
        $a->fazerAniversario();
        $a->setSexo("M");
        $a->setMatricula(1111);
        $a->setCurso("Matemática");
        print_r($a);
        
        $b->setNome("Pâmela");
        $b->setIdade(39);
        $b->setSexo("M");
        $b->pagarMensalidade();
        $b->setMatricula(1000);
        $b->setCurso("Administração");
        print_r($b);
        
        ?>
        </pre>
    </body>
</html>
