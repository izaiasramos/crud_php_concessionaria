<h1>Listar Marca</h1>
<?php

$sql = "SELECT * FROM marca";
$resultado = $conn->query($sql);
$quantidade = $resultado->num_rows;

if($quantidade > 0){
    print "<p>Encontrou <b>$quantidade</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
            print "<tr>";
                    print "<th>".'ID Marca'."</th>";
                    print "<th>".'Nome Marca'."</th>";
                    print "<th>".'Ações'."</th>";
            print "</tr>"; 
    while($row = $resultado->fetch_object()){//fetch_object - busca/puxa os objetos/resultados no banco
            print "<tr>"; //ação javascript onclick redirecionando para a pagina que vai editar ou excluir,com barras invertidas para não dar erro nas aspas duplas
                    //&id_marca=".$row->id_marca." - passando o parametro que é o ID que será editado ou excluido, a $row que recebeu o acessso ao DB,acessa a linha daquele registro/marca do DB com o id_marca 
                    print "<td>".$row->id_marca."</td>";
                    print "<td>".$row->nome_marca."</td>";
                    print "<td>
                                <button onclick=\"location.href='?page=marca-editar&id_marca=".
                                $row->id_marca."';\" class='btn btn-primary'>Editar</button>
                              
                                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=marca-salvar&acao=excluir&id_marca=".
                                $row->id_marca."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                          </td>";  //não podemos excluir direto
            print "</tr>";
        }
    print "</table>";
}else{
    print "Não foi encontrado resultados.";
}