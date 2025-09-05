<?php
include "conexao.php";

if(isset($_POST['atualiza'])){
    $idatualiza = intval($_POST['id']);
    $nome       = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email      = mysqli_real_escape_string($conexao, $_POST['email']);
    $msg        = mysqli_real_escape_string($conexao, $_POST['msg']);

    $sql = "UPDATE davi_tabelas SET nome='$nome', email='$email', mensagem='$msg' WHERE id=$idatualiza";
    mysqli_query($conexao, $sql) or die("Erro ao atualizar: " . mysqli_error($conexao));
    header("Location: moderar.php");
    exit;
}

if(isset($_GET['acao']) && $_GET['acao'] == 'excluir'){
    $id = intval($_GET['id']);
    mysqli_query($conexao, "DELETE FROM davi_tabelas WHERE id=$id") or die("Erro ao deletar: " . mysqli_error($conexao));
    header("Location: moderar.php");
    exit;
}

  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title>Moderar pedidos</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div id="main">
<div id="geral">
<div id="header">
    <h1>Mural de pedidos</h1>
</div>

<?php if($recado_editar): ?>
<div id="formulario_mural">
<form method="post">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?php echo htmlspecialchars($recado_editar['nome']); ?>"/><br/>
    <label>Email:</label>
    <input type="text" name="email" value="<?php echo htmlspecialchars($recado_editar['email']); ?>"/><br/>
    <label>Mensagem:</label>
    <textarea name="msg"><?php echo htmlspecialchars($recado_editar['mensagem']); ?></textarea><br/>
    <input type="hidden" name="id" value="<?php echo $recado_editar['id']; ?>"/>
    <input type="submit" name="atualiza" value="Modificar Recado" class="btn"/>
</form>
</div>
<?php endif; ?>

<?php
$seleciona = mysqli_query($conexao, "SELECT * FROM davi_tabelas ORDER BY id DESC");
if(mysqli_num_rows($seleciona) <= 0){
    echo "<p>Nenhum pedido no mural!</p>";
}else{
    while($res = mysqli_fetch_assoc($seleciona)){
        echo '<ul class="davi_tabelas">';
        echo '<li><strong>ID:</strong> ' . $res['id'] . ' |
              <a href="moderar.php?acao=excluir&id=' . $res['id'] . '">Remover</a> |
              <a href="moderar.php?acao=editar&id=' . $res['id'] . '">Modificar</a></li>';
        echo '<li><strong>Nome:</strong> ' . htmlspecialchars($res['nome']) . '</li>';
        echo '<li><strong>Email:</strong> ' . htmlspecialchars($res['email']) . '</li>';
        echo '<li><strong>Mensagem:</strong> ' . nl2br(htmlspecialchars($res['mensagem'])) . '</li>';
        echo '</ul>';
    }
}
?>

<div id="footer">
</div>
</div>
</div>
</body>
</html>
