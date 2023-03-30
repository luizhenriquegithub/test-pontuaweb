<?php 
	session_start();
	header("Content-type: text/html; charset=utf-8"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Pontua Web</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		<link href="css/signin.css" rel="stylesheet" />
		<link href="css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body style="background-color: #00113D;">
        
        <div class="container px-4 px-lg-5">
		</br></br></p>
            <img src="img/logo_pontua_white.png">
        </div>
		
        <!-- Product section-->
        <section class="py-0">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    
					<div class="col-md-6">
						<img class="card-img-top mb-2 mb-md-0" src="img/bro.png" alt="..." />
					</div>
					<div class="col-md-1"></div>
                    <div class="col-md-5">
						
						<?php
							if(isset($_SESSION['nao_autenticado'])) {
								echo "<div class='alert alert-danger' role='alert'>  
										email ou senha esta invalido, tente novamente. 
									 </div>										
									 ";			
							}
							unset($_SESSION['nao_autenticado']);
						?>

						<div class="card shadow-2-strong" style="border-radius: 1rem;">
							<form class="form-signin" action="login.php" method="POST">
								</br>
								<h1 class="h3 mb-3 font-weight-normal"><img src="img/bem-vindo.png"></h1>
									</p>
									<h1 class="h6 mb-3 font-weight-normal" style="color: #777777;">informe as suas credenciais de acesso ao portal</h1>
									<label for="inputEmail" class="sr-only">Endereço de email</label>
									<input type="email" name="usuario" class="form-control" placeholder="Seu email" required autofocus>
									</p>
									<label for="inputPassword" class="sr-only">Senha</label>
									<input type="password" name="senha" class="form-control" placeholder="Informe sua senha" required>
									<button class="w-100 btn btn-lg btn-primary" style="background-color: #00113D;" type="submit">entrar <img src="img/vector.png"> </button>
									</p>
									<p class="text-right"><img src="img/vector_senha.png"><a href="" style="color: #F21A05; font-family: 'Epilogue';" > Esqueceu a senha?</a></p>
							</form>						  
						
						</div>
					</div>
				</div>	
			</div>		
		</section>
		
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>