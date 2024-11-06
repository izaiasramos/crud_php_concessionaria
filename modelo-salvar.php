<h1>Salvar Modelo</h1>
<?php
switch ($_REQUEST['acao']){
    case 'cadastrar'://salvar valores que foram mandados via post pelo formulario do arquivo modelo-cadastrar salvar no DB
        $sql = "INSERT INTO modelo (
                marca_id_marca,
                nome_modelo,
                cor_modelo,
                ano_modelo,
                placa_modelo
                )VALUES(
                ".$_POST["marca_id_marca"].",
                '".$_POST["nome_modelo"]."',
                '".$_POST["cor_modelo"]."',
                '".$_POST["ano_modelo"]."',
                '".$_POST["placa_modelo"]."'
                )";//pegar os valores dos input via requisição post.

        $resultado = $conn->query($sql);
        if ($resultado==true) { // Se a query acima der certo
            print "<script>alert('Editado com sucesso!');</script>"; // Alerta ao usuário
            print "<script>location.href='?page=modelo-listar';</script>"; // Redireciona o usuário
        } else {
                print "<script>alert('Não foi possível editar a marca!');</script>"; // Alerta de erro
                print "<script>location.href='?page=modelo-listar';</script>"; // Redireciona o usuário
            }       
        break;
    case 'editar':
        
        break;
    case 'excluir':
    
        break;
         
        
}		
