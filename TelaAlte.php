<html>
    <head>
    </head>
    <body>
    <h1>Tela de Alteração </h1><br>

        <form nome="alterar" method="post" action="TelaAlte.php" >
            
        Forneça o Código:<input type="text" name="codigo"><br><br>
            
        Novo Valor:<input type="text" name="novoval"><br><br>
            
            <input type="submit" name="alterar" value="alterar">
            
        </form>
    </body>
</html>
<?php
// identificar a linguagem php //
$conexao=mysqli_connect("localhost","root","","3aa")
   //criar a variavel php $conexão para guardar o resultado da conexão com o servidor (localhost), usuario e senha (root) e banco de dados "3aa"//
    
    if (isset($_POST['alterar'])) {
    // verifica a ação defiinida no formulario de acordo co o botão subtmit //
    
    $codigo=$_POST['codigo'];
    $novoval=$_POST['novoval'];
    // cria a variavel php para guardar o conteudo da variavel html//
    

    $sql=" UPDATE * produto set valor='$novoval' WHERE codigo='$codigo'";
    // criar a variavel php para guardar a sentença query que seleciona a tabela produto e verifica se o codigo digitado e igual a algum na tabela//

    $resultado=mysqli_query($conexao,$sql);
    // cria uma variavel php para guardar o resultado da execução da query //
    
    if ($resultado){
        // teste o resultado da execução do queru
        // caso afirmativo  cria um loop para criar o array $linha onde guarda os valores encontrados //

    {echo "dado alterado";}
    //mostra o conteudo da variavel e pular umma linha//
}
?>
