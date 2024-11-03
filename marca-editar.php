<h1>Editar Marca</h1>
<?php
//consulta para trazer meus dados ja prenchidos de acordo com o id apertado, e mostrar atravez do input abaixo
//nesse caso não preciso fazer um while porque preciso de apenas 1 dado do DB no caso o ID
    $sql = "SELECT * FROM marca WHERE id_marca=".$_REQUEST['id_marca'];//id_marca tem que ser igual ao da request/requisição que vem na url
    $resposta = $conn->query($sql); // buscar minha conexão para ter acesso ao DB
    $row = $resposta->fetch_object();//bucar meu resultado direto no objeto
?>
<form action="?page=marca-salvar" method="POST"><!-- mando pra marca-salvar -->
   <input type="hidden" name="acao" value="editar"><!-- a ação vai ser editar-->
   <input type="hidden" name="id_marca" value="<?php print $row->id_marca; ?>"><!--e vai editar esse cara aqui, o id,preciso mandar meu id_marca no name e puxar o id_marca do DB pra mandar em oculto-->
    <div class="mb-3">
        <label>Nome da Marca</label>
        <input type="text" name="nome_marca" value="<?php print $row->nome_marca; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>