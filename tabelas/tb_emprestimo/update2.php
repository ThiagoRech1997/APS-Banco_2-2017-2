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
			<div class="row" style="height: 50px;">
				<div class="col-md-12">
					<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
						<div class="navbar-header">
							 
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
							</button> <a class="navbar-brand" href="../../index.php" target="_parent">Biblioteca</a>
						</div>
						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Insert<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="../tb_autor/insert.php">Autor</a>
										</li>
										<li>
											<a href="../tb_bairro/insert.php">Bairro</a>
										</li>
										<li>
											<a href="../tb_cargo/insert.php">Cargo</a>
										</li>
										<li>
											<a href="../tb_categoria/insert.php">Categoria</a>
										</li>
										<li>
											<a href="../tb_cidade/insert.php">Cidade</a>
										</li>
										<li>
											<a href="../tb_cliente/insert.php">Cliente</a>
										</li>
										<li>
											<a href="../tb_editora/insert.php">Editora</a>
										</li>
										<li>
											<a href="../tb_emprestimo/insert.php">Empréstimo</a>
										</li>
										<li>
											<a href="../tb_endereco/insert.php">Endereço</a>
										</li>
										<li>
											<a href="../tb_exemplar/insert.php">Exemplar</a>
										</li>
										<li>
											<a href="../tb_funcionario/insert.php">Funcionário</a>
										</li>
										<li>
											<a href="../tb_livro/insert.php">Livro</a>
										</li>
										<li>
											<a href="../tb_reserva/insert.php">Reserva</a>
										</li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Update<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="../tb_autor/update.php">Autor</a>
										</li>
										<li>
											<a href="../tb_bairro/update.php">Bairro</a>
										</li>
										<li>
											<a href="../tb_cargo/update.php">Cargo</a>
										</li>
										<li>
											<a href="../tb_categoria/update.php">Categoria</a>
										</li>
										<li>
											<a href="../tb_cidade/update.php">Cidade</a>
										</li>
										<li>
											<a href="../tb_cliente/update.php">Cliente</a>
										</li>
										<li>
											<a href="../tb_editora/update.php">Editora</a>
										</li>
										<li>
											<a href="../tb_emprestimo/update.php">Empréstimo</a>
										</li>
										<li>
											<a href="../tb_endereco/update.php">Endereço</a>
										</li>
										<li>
											<a href="../tb_exemplar/update.php">Exemplar</a>
										</li>
										<li>
											<a href="../tb_funcionario/update.php">Funcionário</a>
										</li>
										<li>
											<a href="../tb_livro/update.php">Livro</a>
										</li>
										<li>
											<a href="../tb_reserva/update.php">Reserva</a>
										</li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Delete<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="../tb_autor/delete.php">Autor</a>
										</li>
										<li>
											<a href="../tb_bairro/delete.php">Bairro</a>
										</li>
										<li>
											<a href="../tb_cargo/delete.php">Cargo</a>
										</li>
										<li>
											<a href="../tb_categoria/delete.php">Categoria</a>
										</li>
										<li>
											<a href="../tb_cidade/delete.php">Cidade</a>
										</li>
										<li>
											<a href="../tb_cliente/delete.php">Cliente</a>
										</li>
										<li>
											<a href="../tb_editora/delete.php">Editora</a>
										</li>
										<li>
											<a href="../tb_emprestimo/delete.php">Empréstimo</a>
										</li>
										<li>
											<a href="../tb_endereco/delete.php">Endereço</a>
										</li>
										<li>
											<a href="../tb_exemplar/delete.php">Exemplar</a>
										</li>
										<li>
											<a href="../tb_funcionario/delete.php">Funcionário</a>
										</li>
										<li>
											<a href="../tb_livro/delete.php">Livro</a>
										</li>
										<li>
											<a href="../tb_reserva/delete.php">Reserva</a>
										</li>
									</ul>
								</li>
							</ul>
							
							<ul class="nav navbar-nav navbar-right">
								<form class="navbar-form navbar-left" role="search">
									<div class="form-group">
										<input type="text" class="form-control">
									</div> 
									<button type="submit" class="btn btn-default">
										Submit
								</button>
							</form>
							</ul>
						</div>
						
					</nav>
				</div>
			</div>
			<div class="row" class="target">
				<div id="footer" class="col-md-12">
				</div>
			</div>
		</div>

		<script src="../../js/jquery.min.js"></script>
		<script src="../../js/bootstrap.min.js"></script>
		<script src="../../js/scripts.js"></script>
	</body>
</html>