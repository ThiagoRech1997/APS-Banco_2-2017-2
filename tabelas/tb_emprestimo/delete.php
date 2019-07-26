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
						<legend>Deletar Emprestimo</legend>
						<?php
						$sql = "select A.Emp_Codigo, C.Fun_Nome, D.Cli_Nome
						from tb_emprestimo A, tb_funcionario C, tb_cliente D
						where 
							A.Emp_Codfuncionario    = C.Fun_Codigo and
							A.Emp_Codcliente = D.Cli_Codigo
						order by Cli_Nome";
						$rs = mysql_query($sql,$conexao) or die ("Consulta nao realizada");
						?>
						<table class="table table-striped">
							<thead>
							<tr>
								<th>Cliente</th>
								<th>Funcionário</th>
							</thead>
							</tbody>
							<?php
								while($linha=mysql_fetch_array($rs)){
									$codigo      = $linha["Emp_Codigo"];
									$cliente     = $linha["Cli_Nome"];
									$funcionario = $linha["Fun_Nome"];
							?>
							<tr>
								<td><a href="delete1.php?Codigo=
									<?php echo $codigo;?>" method="post" onclick="return confirm('Tem certeza que deseja deletar este registro?')">
									<?php echo utf8_encode ($cliente);?>
									</a>
								</td>
								<td><?php echo utf8_encode ($funcionario);?></td>
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