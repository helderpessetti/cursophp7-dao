<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "h22p011958");
$stmt = $conn->prepare("delete from tb_usuarios where idusuario = ?");
$conn->beginTransaction();
$id = 3;
$stmt->execute(array($id));
//$conn->rollback();
echo "Excluido com sucesso!!!";
$conn->commit();
 ?>
