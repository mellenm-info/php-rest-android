<?php
$dbh = new PDO('pgsql:host=srv-peda.iut-acy.local;port=5433;dbname=mellenm', 'mellenm', 'XiTNXO');
$stmt = $dbh->prepare('SELECT * FROM vdsi.caca');
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;
$dbh = null;
?>
