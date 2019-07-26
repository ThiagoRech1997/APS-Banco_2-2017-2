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
						<legend>Deletar Funcionário</legend>
						<?php
						$sql = "select A.Fun_Codigo, A.Fun_Nome, A.Fun_RG, A.Fun_CPF, E.Car_Descricao, B.End_Descricao, C.Bai_Descricao, D.Cid_Descricao
						from tb_funcionario A, tb_endereco B, tb_bairro C, tb_cidade D, tb_cargo E
						where 
							A.Fun_Codendereco = B.End_Codigo and
							A.Fun_Codbairro   = C.Bai_Codigo and
							A.Fun_Codcidade   = D.Cid_Codigo and
							A.Fun_Codcargo    = E.Car_Codigo
						order by Fun_Nome";
						$rs = mysql_query($sql,$conexao) or die ("Consulta nao realizada");
						?>
						<table class="table table-striped">
							<thead>
							<tr>
								<th>Nome</th>
								<th>RG</th>
								<th>CPF</th>
								<th>Cargo</th>
								<th>Endereço</th>
								<th>Bairro</th>
								<th>Cidade</th>
							</thead>
							</tbody>
							<?php
								while($linha=mysql_fetch_array($rs)){
									$codigo   = $linha["Fun_Codigo"];
									$nome     = $linha["Fun_Nome"];
									$RG       = $linha["Fun_RG"];
									$CPF      = $linha["Fun_CPF"];
									$cargo    = $linha["Car_Descricao"];
									$endereco = $linha["End_Descricao"];
									$bairro   = $linha["Bai_Descricao"];
									$cidade   = $linha["Cid_Descricao"];
							?>
							<tr>
								<td><a href="delete1.php?Codigo=
									<?php echo $codigo;?>" method="post" onclick="return confirm('Tem certeza que deseja deletar este registro?')">
									<?php echo utf8_encode ($nome);?>
									</a>
								</td>
								<td><?php echo utf8_encode ($RG);?></td>
								<td><?php echo utf8_encode ($CPF);?></td>
								<td><?php echo utf8_encode ($cargo);?></td>
								<td><?php echo utf8_encode ($endereco);?></td>
								<td><?php echo utf8_encode ($bairro);?></td>
								<td><?php echo utf8_encode ($cidade);?></td>
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