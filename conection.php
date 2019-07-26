<?php
//abre a conexao
$conexao=mysql_connect("localhost","root","") or die("Conexao não realizada ".mysql_error());
$db=mysql_select_db("biblioteca",$conexao) or die("Banco perdido ".mysql_error());
?>
