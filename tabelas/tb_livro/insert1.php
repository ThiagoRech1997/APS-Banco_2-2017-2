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
						<?php if (!$_POST['nLiv_Titulo']||!$_POST['rEdi_Nome']||!$_POST['rCat_Descricao']||!$_POST['nLiv_Edicao']||!$_POST['nLiv_Ano']){ ?>
						<strong>Você não preencheu todos os campos</strong><a href='javascript:history.back(1);'>&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-left" aria-hidden="true">Voltar</span></a>
						<?php
						}else{
							/** Retorna Codigo Editora **/
							$SqlSit2 = "Select Edi_Codigo from tb_editora where Edi_Nome= ".$_POST["rEdi_Nome"];
							$rt = mysql_query($SqlSit2, $conexao) or die (mysql_error());
							$descricao = mysql_fetch_array($rt);
							$endereco = $descricao["Edi_Codigo"];
							/** Retorna Codigo Categoria **/
							$SqlSit2 = "Select Cat_Codigo from tb_categoria where Cat_Descricao= ".$_POST["rCat_Descricao"];
							$rt = mysql_query($SqlSit2, $conexao) or die (mysql_error());
							$descricao = mysql_fetch_array($rt);
							$endereco = $descricao["Cat_Codigo"];
							/** Inserção no Banco **/
							$SqlSit2 = "INSERT into tb_livro ";
							$SqlSit2 = $SqlSit2 . "(Liv_Codigo, Liv_Titulo, Liv_Codeditora, Liv_Codcategoria, Liv_Edicao, Liv_Ano, Liv_Prazominimo)";
							$SqlSit2 = $SqlSit2 . " values('null','$_POST[nLiv_Titulo]','$_POST[rEdi_Nome]','$_POST[rCat_Descricao]','$_POST[nLiv_Edicao]','$_POST[nLiv_Ano]','$_POST[nLiv_Prazominimo]');";
							$rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
							echo ("<span class='label label-success'>O Livro foi cadastrado com sucesso</span></h2>");
							echo ("<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../tb_livro/insert.php'>");   
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