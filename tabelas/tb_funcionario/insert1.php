<?php
//VERIFICA SE A SESSÃO ESTÁ ATIVA
require_once("../../conection.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="icon" href="../../icon/library.png">
		<title>Biblioteca</title>
		<link href="../../css/style.css" rel="stylesheet">

		<meta name="description" content="Source code generated using layoutit.com">
		<meta name="author" content="LayoutIt!">

		<link href="../../css/bootstrap.min.css" rel="stylesheet">
		<link href="../../css/style.css" rel="stylesheet">

	</head>
	<body>
		<div class="container-fluid">
			<?php include '../../menu1.php';?>
			<div class="row" class="target">
				<div id="footer" class="col-md-12">
					<center>
						<?php if (!$_POST['nFun_Nome']||!$_POST['nCli_RG']||!$_POST['nCli_CPF']||!$_POST['rCar_Descricao']||!$_POST['rEnd_Descricao']||!$_POST['rBai_Descricao']||!$_POST['rCid_Descricao']){ ?>
						<strong>Você não preencheu todos os campos</strong><a href='javascript:history.back(1);'>&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-left" aria-hidden="true">Voltar</span></a>
						<?php
						}else{
							/** Retorna Codigo Endereço **/
							$SqlSit2 = "Select End_Codigo from tb_endereco where End_Descricao= ".$_POST["rEnd_Descricao"];
							$rt = mysql_query($SqlSit2, $conexao) or die (mysql_error());
							$descricao = mysql_fetch_array($rt);
							$endereco = $descricao["End_Codigo"];
							/** Retorna Codigo Bairro **/
							$SqlSit2 = "Select Bai_Codigo from tb_bairro where Bai_Descricao= ".$_POST["rBai_Descricao"];
							$rt = mysql_query($SqlSit2, $conexao) or die (mysql_error());
							$descricao = mysql_fetch_array($rt);
							$endereco = $descricao["Bai_Codigo"];
							/** Retorna Codigo Cidade **/
							$SqlSit2 = "Select Cid_Codigo from tb_cidade where Cid_Descricao= ".$_POST["rCid_Descricao"];
							$rt = mysql_query($SqlSit2, $conexao) or die (mysql_error());
							$descricao = mysql_fetch_array($rt);
							$endereco = $descricao["Cid_Codigo"];
							/** Retorna Codigo Cargo **/
							$SqlSit2 = "Select Car_Codigo from tb_cargo where Car_Descricao= ".$_POST["rCar_Descricao"];
							$rt = mysql_query($SqlSit2, $conexao) or die (mysql_error());
							$descricao = mysql_fetch_array($rt);
							$endereco = $descricao["Car_Codigo"];
							/** Inserção no Banco **/
							$SqlSit2 = "INSERT into tb_funcionario ";
							$SqlSit2 = $SqlSit2 . "(Fun_Codigo, Fun_Nome, Fun_RG, Fun_CPF, Fun_Codcargo, Fun_Codendereco, Fun_Codbairro, Fun_Codcidade)";
							$SqlSit2 = $SqlSit2 . " values('null','$_POST[nFun_Nome]','$_POST[nCli_RG]','$_POST[nCli_CPF]','$_POST[rCar_Descricao]','$_POST[rEnd_Descricao]','$_POST[rBai_Descricao]','$_POST[rCid_Descricao]');";
							$rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
							echo ("<span class='label label-success'>O Funcionário foi cadastrado com sucesso</span></h2>");
							echo ("<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../tb_funcionario/insert.php'>");   
						}
						mysql_close($conexao);
						?>
					</center>
				</div>
			</div>
		</div>

		<script src="../../js/jquery.min.js"></script>
		<script src="../../js/bootstrap.min.js"></script>
		<script src="../../js/scripts.js"></script>
	</body>
</html>