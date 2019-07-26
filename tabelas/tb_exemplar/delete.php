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
						<legend>Deletar Exemplar</legend>
						<?php
						$sql = "select A.Exe_Codigo, B.Liv_Titulo, A.Exe_Status from tb_exemplar A, tb_livro B
							where A.Exe_Codlivro = B.Liv_Codigo
							order by Exe_Codlivro";
						$rs = mysql_query($sql,$conexao) or die ("Consulta nao realizada");
						?>
						<table class="table table-striped">
							<thead>
							<tr>
								<th>Nome Exemplar</th>
								<th>Status</th>
							</thead>
							</tbody>
							<?php
								while($linha=mysql_fetch_array($rs)){
									$codigo = $linha["Exe_Codigo"];
									$nome   = $linha["Liv_Titulo"];
									$status = $linha["Exe_Status"];
							?>
							<tr>
								<td><a href="delete1.php?Codigo=
									<?php echo $codigo;?>" method="post" onclick="return confirm('Tem certeza que deseja deletar este registro?')">
									<?php echo utf8_encode ($nome);?>
									</a>
								</td>
								<td><?php echo utf8_encode ($status);?></td>
							</tr>
							<?php } ?>
						</table>
					<center>
				</div>
			</div>
		</div>

		<script src="../../js/jquery.min.js"></script>
		<script src="../../js/bootstrap.min.js"></script>
		<script src="../../js/scripts.js"></script>
	</body>
</html>