
<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom.css">
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<header>
  		</header>
		<nav>
			<ul class ="navbar list-unstyled">
				<li>
					<a href = problema1.php>Problema 1</a>
				</li>
				<li>
					<a href = problema2.php>Problema 2</a>
				</li>
				<li>
					<a href = problema3.php>Problema 3</a>
				</li>
				<li>
					<a href = problema4.php>Problema 4</a>
				</li>
				<li>
					<a href = form.php>Formulario Validado en Cliente</a>
				</li>
			</ul>
		</nav>
		<div class ="container">
			<div class = "row">
					<div class ="col-sm-10">
						<section>
							<?php
								echo $view;
							?>	
						</section>
					</div>
					<div class ="col-sm-2">
							<aside>
								<div class ="form-box">
									<form>
										<div class="form-group">
											<label>Buscar:</label>
											<input class="form-control" type="text">
										</div>
										<input class ="btn" type ="submit" value="Buscar">
									</form>
								</div>
								<br>
								<div>
										<h5>Patrocinadores</h5>
										<h6>Google</h6>
										<img class="img-responsive" src="img/google.png">
										<h6>Wikipedia</h6>
										<img class ="img-responsive" src="img/wiki.png">
								</div>
								<br>
							</aside>
					</div>
			</div>
</div>
			<footer class="footer">
				<div class="container">
					<p >	Creado por: Carlos Moisés Tuñón Biddy, 8-916-809, Grupo: 1SF-131</p>
				</div>
			</footer>
</body>
</html>
