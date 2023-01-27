<?php 









?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/specifications.css">
</head>
<body>
	<div class="container wall-bg-color">
		<div class="container">
		<div class="row">
			


			<div class="col-md-4 mx-auto mt-5">
				<div class="card" style="width: 18rem;">
  					<div class="card-header">
    					Login
  					</div>
  					<div class="card-body">
  						<?php //if(isset($message)){ ?>
  						<div class="alert alert-danger" role="alert">
  							<?php //echo $message; ?>
  						</div>



  						<?php //} ?>
  						<form method="POST" >
  						<div class="mb-3">
   						 <label  class="form-label" >Usuario</label>
   						 <input type="text" class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="ejem=rojo243">
  						  <div id="emailHelp" class="form-text">Jamas compartimos tus datos con nadie.</div>
  						</div>
  						<div class="mb-3">
  						  <label  class="form-label">Contraseña</label>
  						  <input type="password" class="form-control" name="password" placeholder="ejem=azul_.3124">
  						</div>
  						
  						<button type="submit" class="btn btn-primary">Loguear</button>
              <a href="signup.php" class="btn btn-secondary">Ir Registro</a>
						</form>		
               
  					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
<script type="text/javascript" src="../javascript/bootstrap.js"></script>
</body>
</html>