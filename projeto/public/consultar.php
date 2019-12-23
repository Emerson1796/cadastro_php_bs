<?php require_once("../conexao/conexao.php"); ?>
<?php require_once("../conexao/validacao.php"); ?>

<!doctype html>
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
                <form method="get">
                <!--<form method="post">-->
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input class="form-control" type="text" name="id" placeholder="ID"/>
                    </div>

                    <input class="btn btn-primary btn-block" type="submit" value="Pesquisar">
                </form>
            </main>
            </div>
        <?php
            
        ?>
        
        <div id="lista">
                <ul>
                    <b><h4><li class="col-xs-1"><?php echo " " ?></li>
                    <li class="col-xs-2"><?php echo "ID" ?></li>
                    <li class="col-xs-3"><?php echo "Nome" ?></li>
                    <li class="col-xs-3"><?php echo "Última Atualização" ?></li>
                    <li class="col-xs-1"><?php echo "Alterar" ?></li>
                    <li class="col-xs-2"><?php echo "Excluir" ?></li></h1></b>
                    
                </ul>
            <?php
                while($linha = mysqli_fetch_assoc($resultado)) {
            ?>
            
                <ul>
                    <li class="col-xs-1"><?php echo " " ?></li>
                    <li class="col-xs-2"><?php echo utf8_encode($linha["cadastroID"]) ?></li>
                    <li class="col-xs-3"><?php echo utf8_encode($linha["nomecompleto"]) ?></li>
                    <li class="col-xs-3"><?php echo utf8_encode($linha["data_registro"]) ?></li>
                    <li class="col-xs-1"><a href="alteracao.php?codigo=<?php echo $linha["cadastroID"] ?>">Alterar</a> </li>
                    <li class="col-xs-2"><form method="post"><button type="submit"><input type="hidden" name="excluir" value="<?= $linha["cadastroID"] ?>">Excluir</button></form>
                        <?php

                        if(isset($_POST['excluir']) && filter_input(INPUT_POST, 'excluir', FILTER_VALIDATE_INT) !== false){

                            $id = mysqli_real_escape_string($conecta, $_POST['excluir']);

                            $sql2     = "delete from nome where cadastroID='$id'";
                            $qry2     = mysqli_query($conecta,$sql2);

                        }

                        ?>
                </ul>
            <?php
                }
            ?>
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