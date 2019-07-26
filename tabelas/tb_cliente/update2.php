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
						<?php if (!$_POST['nCli_Nome']||!$_POST['nCli_RG']||!$_POST['rEnd_Descricao']||!$_POST['rBai_Descricao']||!$_POST['rCid_Descricao']){ ?>
						<strong>Você não preencheu todos os campos</strong><a href='javascript:history.back(1);'>&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-left" aria-hidden="true">Voltar</span></a>
						<?php
						}else{
							$SqlSit2 = "UPDATE tb_cliente set
								Cli_Nome        = '$_POST[nCli_Nome]',
								Cli_Rg          = '$_POST[nCli_RG]',
								Cli_Cpf         = '$_POST[nCli_CPF]',
								Cli_Codendereco = '$_POST[rEnd_Descricao]',
								Cli_Numero      = '$_POST[nCli_Numero]',
								Cli_Codbairro   = '$_POST[rBai_Descricao]',
								Cli_Codcidade   = '$_POST[rCid_Descricao]',
								Cli_Fone        = '$_POST[nCli_Fone]',
								Cli_Prazodevol  = '$_POST[nCli_Prazodevol]'
								where Cli_Codigo = $_REQUEST[Codigo]";
							$rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
							echo ("<span class='label label-success'>O cliente foi atualizado com sucesso</span></h2>");
							echo ("<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=update.php'>");   
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