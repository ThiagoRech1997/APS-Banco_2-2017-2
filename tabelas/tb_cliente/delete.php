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
						<legend>Deletar Cliente</legend>
						<?php
						$sql = "select A.Cli_Codigo, A.Cli_Nome, A.Cli_RG, A.Cli_CPF, B.End_Descricao, A.Cli_numero, C.Bai_Descricao, D.Cid_Descricao, A.Cli_Fone, A.Cli_Prazodevol
						from tb_cliente A, tb_endereco B, tb_bairro C, tb_cidade D
						where 
							A.Cli_Codendereco = B.End_Codigo and
							A.Cli_Codbairro   = C.Bai_Codigo and
							A.Cli_Codcidade   = D.Cid_Codigo
						order by Cli_Nome";
						$rs = mysql_query($sql,$conexao) or die ("Consulta nao realizada");
						?>
						<table class="table table-striped">
							<thead>
							<tr>
								<th>Nome</th>
								<th>RG</th>
								<th>CPF</th>
								<th>Endereço</th>
								<th>Número</th>
								<th>Bairro</th>
								<th>Cidade</th>
								<th>Fone</th>
								<th>Prazo Devolução</th>
							</thead>
							</tbody>
							<?php
								while($linha=mysql_fetch_array($rs)){
									$codigo   = $linha["Cli_Codigo"];
									$nome     = $linha["Cli_Nome"];
									$RG       = $linha["Cli_RG"];
									$CPF      = $linha["Cli_CPF"];
									$endereco = $linha["End_Descricao"];
									$numero   = $linha["Cli_numero"];
									$bairro   = $linha["Bai_Descricao"];
									$cidade   = $linha["Cid_Descricao"];
									$fone     = $linha["Cli_Fone"];
									$devol    = $linha["Cli_Prazodevol"];
							?>
							<tr>
								<td><a href="delete1.php?Codigo=
									<?php echo $codigo;?>" method="post" onclick="return confirm('Tem certeza que deseja deletar este registro?')">
									<?php echo utf8_encode ($nome);?>
									</a>
								</td>
								<td><?php echo utf8_encode ($RG);?></td>
								<td><?php echo utf8_encode ($CPF);?></td>
								<td><?php echo utf8_encode ($endereco);?></td>
								<td><?php echo utf8_encode ($numero);?></td>
								<td><?php echo utf8_encode ($bairro);?></td>
								<td><?php echo utf8_encode ($cidade);?></td>
								<td><?php echo utf8_encode ($fone);?></td>
								<td><?php echo utf8_encode ($devol);?></td>
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