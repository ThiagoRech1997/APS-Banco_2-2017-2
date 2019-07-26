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
						<legend>Deletar Livro</legend>
						<?php
						$sql = "select A.Liv_Codigo, A.Liv_Titulo, B.Edi_Nome, C.Cat_Descricao, A.Liv_Edicao, A.Liv_Ano, A.Liv_Prazominimo
						from tb_livro A, tb_EDITORA B, tb_categoria C
						where 
							A.Liv_Codeditora   = B.Edi_Codigo and
							A.Liv_Codcategoria = C.Cat_Codigo
						order by Liv_Titulo";
						$rs = mysql_query($sql,$conexao) or die ("Consulta nao realizada");
						?>
						<table class="table table-striped">
							<thead>
							<tr>
								<th>Livro</th>
								<th>Editora</th>
								<th>Categoria</th>
								<th>Edição</th>
								<th>Ano</th>
								<th>Prazo Minimo</th>
							</thead>
							</tbody>
							<?php
								while($linha=mysql_fetch_array($rs)){
									$codigo    = $linha["Liv_Codigo"];
									$nome      = $linha["Liv_Titulo"];
									$editora   = $linha["Edi_Nome"];
									$categoria = $linha["Cat_Descricao"];
									$edicao    = $linha["Liv_Edicao"];
									$ano       = $linha["Liv_Ano"];
									$minimo    = $linha["Liv_Prazominimo"];
							?>
							<tr>
								<td><a href="delete1.php?Codigo=
									<?php echo $codigo;?>" method="post" onclick="return confirm('Tem certeza que deseja deletar este registro?')">
									<?php echo utf8_encode ($nome);?>
									</a>
								</td>
								<td><?php echo utf8_encode ($editora);?></td>
								<td><?php echo utf8_encode ($categoria);?></td>
								<td><?php echo utf8_encode ($edicao);?></td>
								<td><?php echo utf8_encode ($ano);?></td>
								<td><?php echo utf8_encode ($minimo);?></td>
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