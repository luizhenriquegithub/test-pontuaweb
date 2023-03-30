<?php
    include('verifica_login.php');
    $url 	 = "http://gateway.marvel.com/v1/public/characters?limit=11&ts=1&apikey=9ec229260298fe01270c32742ec97e71&hash=8f845f03fafb39ee2e451be568788732";
	$result  = json_decode(file_get_contents($url),true);
	//var_export($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pontua Web</title>
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
		
        <section class="py-0">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    
					<div class="col-md-6">
						<img class="card-img-top mb-2 mb-md-0" src="img/bro.png" alt="..." />
					</div>
					<div class="col-md-1"></div>
                    <div class="col-md-5">
							
						<div class="card shadow-2-strong" style="border-radius: 1rem;">
						  
							<form class="form-signin" action="login.php" method="POST">
								</br>
								<h1 class="h3 mb-3 font-weight-normal"><img src="img/agentes.png"></h1>
								</p>
								<h1 class="h6 mb-3 font-weight-normal" style="color: #777777;">Tenha a visao completa do seu agente.</h1>
									
									<select class="custom-select d-block w-100" name="agente" required>
										    <?php foreach ($result['data']['results'] as $key => $value) { ?>
												<?php foreach ($value as $key => $value) { ?>
														<?php if ($key == 'name') {
															$heroName = $value;
														} ?>
												<?php } ?>
												<option value="<?= $heroName; ?>"> <?= $heroName; ?> </option>
										   	<?php } ?>
									</select>
									</p>
									
									<p align="right">
									  <button type="button" class="btn btn-dark" style="background-color: #00113D; ">Entrar</button>
									</p>									
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