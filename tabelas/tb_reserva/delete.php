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
						<legend>Deletar Reserva</legend>
						<?php
						$sql = "select A.Res_Codigo, B.Liv_Titulo, C.Fun_Nome, D.Cli_Nome, A.Res_Situacao
						from tb_reserva A, tb_livro B, tb_funcionario C, tb_cliente D
						where 
							A.Res_Codlivro   = B.Liv_Codigo and
							A.Res_Codfunc    = C.Fun_Codigo and
							A.Res_Codcliente = D.Cli_Codigo
						order by Liv_Titulo";
						$rs = mysql_query($sql,$conexao) or die ("Consulta nao realizada");
						?>
						<table class="table table-striped">
							<thead>
							<tr>
								<th>Livro</th>
								<th>Funcionário</th>
								<th>Cliente</th>
								<th>Situação</th>
							</thead>
							</tbody>
							<?php
								while($linha=mysql_fetch_array($rs)){
									$codigo      = $linha["Res_Codigo"];
									$livro       = $linha["Liv_Titulo"];
									$funcionario = $linha["Fun_Nome"];
									$cliente     = $linha["Cli_Nome"];
									$situacao    = $linha["Res_Situacao"];
							?>
							<tr>
								<td><a href="delete1.php?Codigo=
									<?php echo $codigo;?>" method="post" onclick="return confirm('Tem certeza que deseja deletar este registro?')">
									<?php echo utf8_encode ($livro);?>
									</a>
								</td>
								<td><?php echo utf8_encode ($funcionario);?></td>
								<td><?php echo utf8_encode ($cliente);?></td>
								<td><?php echo utf8_encode ($situacao);?></td>
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