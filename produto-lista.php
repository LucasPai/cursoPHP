<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); 

function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao,"select * from produtos");
    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);

    }
    return $produtos;
}











$produtos = listaProdutos($conexao);
foreach($produtos as $produto) {
    echo $produto['nome'] . "<br>";
}

?>

<?php include("rodape.php"); ?>