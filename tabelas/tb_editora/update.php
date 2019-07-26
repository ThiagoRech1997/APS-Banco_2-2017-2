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
						<legend>Alterar Cliente</legend>
						<?php
						$sql = "select A.Edi_Codigo, A.Edi_Nome, B.End_Descricao, C.Bai_Descricao, D.Cid_Descricao, A.Edi_Fone, A.Edi_Contato
						from tb_editora A, tb_endereco B, tb_bairro C, tb_cidade D
						where 
							A.Edi_Codendereco = B.End_Codigo and
							A.Edi_Codbairro   = C.Bai_Codigo and
							A.Edi_Codcidade   = D.Cid_Codigo
						order by Edi_Nome";
						$rs = mysql_query($sql,$conexao) or die ("Consulta nao realizada");
						?>
						<table class="table table-striped">
							<thead>
							<tr>
								<th>Nome</th>
								<th>Endereço</th>
								<th>Bairro</th>
								<th>Cidade</th>
								<th>Fone</th>
								<th>Contato</th>
							</thead>
							</tbody>
							<?php
								while($linha=mysql_fetch_array($rs)){
									$codigo   = $linha["Edi_Codigo"];
									$nome     = $linha["Edi_Nome"];
									$endereco = $linha["End_Descricao"];
									$bairro   = $linha["Bai_Descricao"];
									$cidade   = $linha["Cid_Descricao"];
									$fone     = $linha["Edi_Fone"];
									$contato  = $linha["Edi_Contato"];
							?>
							<tr>
								<td><a href="update1.php?Codigo=
									<?php echo $codigo;?>" method="post">
									<?php echo utf8_encode ($nome);?>
									</a>
								</td>
								<td><?php echo utf8_encode ($endereco);?></td>
								<td><?php echo utf8_encode ($bairro);?></td>
								<td><?php echo utf8_encode ($cidade);?></td>
								<td><?php echo utf8_encode ($fone);?></td>
								<td><?php echo utf8_encode ($contato);?></td>
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