<?php require_once("../conexao/conexao.php"); ?>    
<?php require_once("../conexao/validacao.php"); ?>
<html>
    <head>
        <title>Sistema de Cadastro</title>
        <meta charset="utf-8">
        <meta name="author" content="Emerson Gomes">
        <meta name="generator" content="Brackets">
        
        <link href="../estilo/css/bootstrap.min.css" rel="stylesheet">
        <link href="../estilo/_css/estilo.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <nav>
                <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group" role="group">
                        <a href="cadastrar.php"><button type="button" class="btn btn-light">Cadastrar</button></a>
                    </div>
                    <div class="btn-group" role="group">
                        <a href="consultar.php"><button type="button" class="btn btn-light">Alterar/ Excluir</button></a>
                    </div>
                </div>     
            </nav>
            <main>
                <form action="falha.php" method="post">
                <!--<form method="post">-->
                    <div class="form-group">
                        <label for="nomecompleto">Nome Completo</label>
                        <input class="form-control" type="text" name="nomecompleto" placeholder="Nome"/>
                    </div>

                    <input class="btn btn-success btn-block" type="submit" value="Enviar">
                </form>
            </main>
        </div>
        <!-- Fim do seu codigo -->
        <script src="../estilo/js/jquery.js"></script>
        <script src="../estilo/js/bootstrap.min.js"></script>
        <script src="../estilo/_js/script.js"></script>
    </body>
</html>
<?php
    mysqli_close($conecta);
?>