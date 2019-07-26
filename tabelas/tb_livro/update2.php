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
						<?php
							$SqlSit2 = "UPDATE tb_livro set
								Liv_Titulo       = '$_POST[nLiv_Titulo]',
								Liv_Codeditora   = '$_POST[rEdi_Nome]',
								Liv_Codcategoria = '$_POST[rCat_Descricao]',
								Liv_Edicao       = '$_POST[nLiv_Edicao]',
								Liv_Ano          = '$_POST[nLiv_Ano]',
								Liv_Prazominimo  = '$_POST[nLiv_Prazominimo]'
								where Liv_Codigo = $_REQUEST[Codigo];";
							$rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
							echo ("<span class='label label-success'>O livro foi atualizado com sucesso</span></h2>");
							echo ("<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=update.php'>");  
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