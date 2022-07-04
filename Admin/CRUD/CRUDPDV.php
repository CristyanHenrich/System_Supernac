<?php
include "../../BD/conexao.php";

$CodigoDeBarras = (isset($_POST['CodigoDeBarras'])) ? $_POST['CodigoDeBarras'] : '';

$stmt = $PDO->prepare('SELECT * FROM produtos WHERE COD_BARRAS=:COD_BARRAS');
$stmt->bindParam(':COD_BARRAS', $CodigoDeBarras);
$stmt->execute();
$resultado=$stmt->fetchAll();

if ($resultado > 0) {
    print json_encode($resultado);
}else {

    print json_encode("NA");

}

?>