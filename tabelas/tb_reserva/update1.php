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
					<div id="footer" class="col-md-12">
				<?php
				$sql = "select * from tb_reserva where Res_Codigo= '$_REQUEST[Codigo]'";
				$rs = mysql_query($sql,$conexao) or die ("Consulta nao realizada");
				$linha=mysql_fetch_array($rs);
					$codigo =$linha["Res_Codigo"];
					$nome   =$linha["Res_Codlivro"];
					$status =$linha["Res_Situacao"];
					$cliente=$linha["Res_Codcliente"];
				?>
					<center>
						<form class="form-horizontal" method = "post" action = "update2.php?Codigo=<?php echo $codigo;?>">
						<fieldset>

						<!-- Form Name -->
						<legend>Alterar Exemplar</legend>
						<?php $sql = "select Liv_Titulo from tb_livro where Liv_Codigo = $nome";
						$sql1 = "select Cli_Nome from tb_cliente where Cli_Codigo = $cliente";
						$p = mysql_query($sql1,$conexao) or die ("Consulta nao realizada");
						$pp = mysql_query($sql,$conexao) or die ("Consulta nao realizada");
						$cli = mysql_fetch_array($p);
						$livro = mysql_fetch_array($pp); ?>
						<legend><?php echo utf8_encode("EX n. ".$codigo." - ".$livro["Liv_Titulo"]." | Cliente - ".$cli["Cli_Nome"]);?></legend>

						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="rExe_Status">Titulo:</label>
							<div class="col-md-4">
								<select id="rExe_Status" name="rExe_Status" class="form-control">
									<option value="<?php echo $status;?>"><?php echo utf8_encode($status);?></option>
									<option value="Ativa">Ativa</option>
									<option value="Cancelada">Cancelada</option>
									<option value="Concluida">Concluída</option>
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