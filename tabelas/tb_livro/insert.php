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
						<form class="form-horizontal" method = "post" action = "../tb_livro/insert1.php">
						<fieldset>

						<!-- Form Name -->
						<legend>Cadastrar Livro</legend>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="nLiv_Titulo">Titulo:</label>  
							<div class="col-md-4">
								<input id="nLiv_Titulo" name="nLiv_Titulo" type="text" placeholder="" class="form-control input-md" required="">
							
							</div>
						</div>

						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="rEdi_Nome">Editora:</label>
							<div class="col-md-4">
								<select id="rEdi_Nome" name="rEdi_Nome" class="form-control">
									<?php 
										$sql = "Select Count(*) as 'Total' from tb_editora";
										$rt = mysql_query($sql, $conexao) or die (mysql_error());
										$t=mysql_fetch_array($rt);
										$tam =$t["Total"];
									?>
									<?php
										for($i=1; $i<=$tam; $i++){
											$SqlSit2 = "Select Edi_Nome from tb_editora where Edi_Codigo= ".$i;
											$rt = mysql_query($SqlSit2, $conexao) or die (mysql_error());
											$n = mysql_fetch_array($rt);
											$nome = $n["Edi_Nome"];
											echo utf8_encode ("<option value='".$i."'>".$nome."</option>");
										}
									?>
								</select>
							</div>
						</div>

						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="rCat_Descricao">Categoria:</label>
							<div class="col-md-4">
								<select id="rCat_Descricao" name="rCat_Descricao" class="form-control">
									<?php 
										$sql = "Select Count(*) as 'Total' from tb_categoria";
										$rt = mysql_query($sql, $conexao) or die (mysql_error());
										$t=mysql_fetch_array($rt);
										$tam =$t["Total"];
									?>
									<?php
										for($i=1; $i<=$tam; $i++){
											$SqlSit2 = "Select Cat_Descricao from tb_categoria where Cat_Codigo= ".$i;
											$rt = mysql_query($SqlSit2, $conexao) or die (mysql_error());
											$n = mysql_fetch_array($rt);
											$nome = $n["Cat_Descricao"];
											echo utf8_encode ("<option value='".$i."'>".$nome."</option>");
										}
									?>
								</select>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="nLiv_Edicao">Edição:</label>  
							<div class="col-md-4">
								<input id="nLiv_Edicao" name="nLiv_Edicao" type="text" placeholder="" class="form-control input-md" required="">
							
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="nLiv_Ano">Ano:</label>  
							<div class="col-md-4">
								<input id="nLiv_Ano" name="nLiv_Ano" type="text" placeholder="" class="form-control input-md" required="">
							
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="nLiv_Prazominimo">Prazo Minimo:</label>  
							<div class="col-md-4">
								<input id="nLiv_Prazominimo" name="nLiv_Prazominimo" type="text" placeholder="" class="form-control input-md">
								<span class="help-block">Opcional</span>  
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