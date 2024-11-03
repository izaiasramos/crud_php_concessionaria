// Inclua o arquivo de conexão
<?php
//include 'config.php'; // Altere para o caminho correto do seu arquivo de conexão

switch ($_REQUEST['acao']) { // O switch recebe uma requisição que vem do input oculto com o name="acao"
    case 'cadastrar':
        $sql = "INSERT INTO marca
                    (nome_marca)
                VALUES
                    ('".$_POST['nome_marca']."')";

        $resultado = $conn->query($sql); // Execute a query   

        if ($resultado==true) { // Se a query acima der certo
            print "<script>alert('Cadastrado com sucesso!');</script>"; // Alerta ao usuário
            print "<script>location.href='?page=marca-listar';</script>"; // Redireciona o usuário
        } else {
                print "<script>alert('Não foi possível cadastrar a marca!');</script>"; // Alerta de erro
                print "<script>location.href='?page=marca-listar';</script>"; // Redireciona o usuário
            }
        break;
   
    case 'editar':
        // Lógica para editar
        $sql = "UPDATE marca SET 
                    nome_marca='".$_POST['nome_marca']."' 
                WHERE 
                    id_marca=".$_POST["id_marca"];//aqui já mando o parametro que vamos editar
                //nome_marca do DB vai receber '".$_POST['nome_marca']."' o nome que vem do formulario            
                //WHERE onde o id_marca id_marca=". tem que ser igual ao .$_POST["id_marca"]; id da marca presente na requisição/o id em questão/atual
        
        $resultado = $conn->query($sql); // Execute a query   

        if ($resultado==true) { // Se a query acima der certo
            print "<script>alert('Editado com sucesso!');</script>"; // Alerta ao usuário
            print "<script>location.href='?page=marca-listar';</script>"; // Redireciona o usuário
        } else {
                print "<script>alert('Não foi possível editar a marca!');</script>"; // Alerta de erro
                print "<script>location.href='?page=marca-listar';</script>"; // Redireciona o usuário
            }       

                break;

    case 'excluir':
        // Lógica para excluir
        break;    
}
?>