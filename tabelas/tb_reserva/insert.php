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
						<form class="form-horizontal" method = "post" action = "../tb_reserva/insert1.php">
						<fieldset>

						<!-- Form Name -->
						<legend>Cadastrar Reserva</legend>

						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="rLiv_Titulo">Titulo Livro:</label>
							<div class="col-md-4">
								<select id="rLiv_Titulo" name="rLiv_Titulo" class="form-control">
									<?php 
										$sql = "Select Count(*) as 'Total' from tb_livro";
										$rt = mysql_query($sql, $conexao) or die (mysql_error());
										$t=mysql_fetch_array($rt);
										$tam =$t["Total"];
									?>
									<?php
										for($i=1; $i<=$tam; $i++){
											$SqlSit2 = "Select Liv_Titulo from tb_livro where Liv_Codigo= ".$i;
											$rt = mysql_query($SqlSit2, $conexao) or die (mysql_error());
											$n = mysql_fetch_array($rt);
											$nome = $n["Liv_Titulo"];
											echo utf8_encode ("<option value='".$i."'>".$nome."</option>");
										}
									?>
								</select>
							</div>
						</div>

						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="rFun_Nome">Funcionário:</label>
							<div class="col-md-4">
								<select id="rFun_Nome" name="rFun_Nome" class="form-control">
									<?php 
										$sql = "Select Count(*) as 'Total' from tb_funcionario";
										$rt = mysql_query($sql, $conexao) or die (mysql_error());
										$t=mysql_fetch_array($rt);
										$tam =$t["Total"];
									?>
									<?php
										for($i=1; $i<=$tam; $i++){
											$SqlSit2 = "Select Fun_Nome from tb_funcionario where Fun_Codigo= ".$i;
											$rt = mysql_query($SqlSit2, $conexao) or die (mysql_error());
											$n = mysql_fetch_array($rt);
											$nome = $n["Fun_Nome"];
											echo utf8_encode ("<option value='".$i."'>".$nome."</option>");
										}
									?>
								</select>
							</div>
						</div>

						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="rCli_Nome">Cliente:</label>
							<div class="col-md-4">
								<select id="rCli_Nome" name="rCli_Nome" class="form-control">
									<?php 
										$sql = "Select Count(*) as 'Total' from tb_cliente";
										$rt = mysql_query($sql, $conexao) or die (mysql_error());
										$t=mysql_fetch_array($rt);
										$tam =$t["Total"];
									?>
									<?php
										for($i=1; $i<=$tam; $i++){
											$SqlSit2 = "Select Cli_Nome from tb_cliente where Cli_Codigo= ".$i;
											$rt = mysql_query($SqlSit2, $conexao) or die (mysql_error());
											$n = mysql_fetch_array($rt);
											$nome = $n["Cli_Nome"];
											echo utf8_encode ("<option value='".$i."'>".$nome."</option>");
										}
									?>
								</select>
						  </div>
						</div>

						<!-- Button (Double) -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="btnEnviar"></label>
							<div class="col-md-8">
								<button id="btnEnviar" name="btnEnviar" class="btn btn-success">Enviar</button>
								<button id="btnCancelar" name="btnCancelar" class="btn btn-danger">Cancelar</button>
							</div>
						</div>

						</fieldset>
						</form>
					</center>
				</div>
			</div>
		</div>

		<script src="../../js/jquery.min.js"></script>
		<script src="../../js/bootstrap.min.js"></script>
		<script src="../../js/scripts.js"></script>
	</body>
</html>