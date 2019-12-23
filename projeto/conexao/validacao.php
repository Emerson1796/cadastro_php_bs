<?php
    //validação da pagina de cadastro
    if(!isset($_POST["nomecompleto"])){
        $nome = null;
    } else {
        $nome = $_POST["nomecompleto"];
        }
    $teste = strlen($nome)-substr_count($nome," ");
    $espaco = stripos($nome," ") + 2;
        
    if( substr_count($nome," ") > 0 and isset($nome) and $nome != "" and $teste > $espaco ) {
            $inserir    = "INSERT INTO nome ";
            $inserir    .= "(nomecompleto, data_registro) ";
            $inserir    .= "VALUES ";
            $inserir    .= "('$nome',now())";

            $operacao_inserir = mysqli_query($conecta,$inserir);
?>
            <script type="text/javascript">
                alert("Cadastro Realizado!");
            </script>
<?php
            if(!$operacao_inserir) {
                die("Erro no banco");
            }  
        unset($_POST["nomecompleto"]);
    } else{
        unset($_POST["nomecompleto"]);   
    }
?>
<?php

//validação da pagina de alteração

     $produtos = "SELECT * FROM nome ";
    if (isset($_GET["id"])) {
        $id   = urlencode($_GET["id"]);
        $produtos       .= "WHERE cadastroID LIKE '%{$id}%' "; 
    }
    $resultado = mysqli_query($conecta, $produtos);
    if(!$resultado) {
        die("Falha na consulta ao banco");   
    }
unset($_GET["nome_id"]);
?>