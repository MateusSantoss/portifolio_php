<?php 
   

   #cria uma conexão com banco de dados
   $dsn = 'mysql:host=localhost;dbname=portifolio';
   $usuario = 'root';
   $senha = '';
   
   
   
   try {
	   $conexao = new PDO($dsn, $usuario, $senha);
	   $query = 'select * from tb_portifolio order by id desc';
	   $query2 = 'select * from resumo';
	   

	   
	  
       
	   
   
	   
   }
   
	  catch(PDOException $e) {
	   echo "Erro".$e->getCode(). 'Mensagem: '.$e->getMessage ();
	   
   }

?>

<!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Mateus santos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  	<link rel="stylesheet" type="text/css" href="assets/estilo.css">
	<script type="text/JavaScript">
	

	</script>
	

  	<!--fontes-->
	
  </head>
  <body >

  	
  	<header class="row justify-content-center img img-fluid ">

  		<div class="col-md-8 col-lg-8 col-xxl-5 col-8 justify-content-center">
  			<img class="img img-fluid mt-5 mx-auto bg-transparent" src="../assets/imagens/Logotipo Mateus.png" id="logo"> 
  			</img>		
  		</div>
		<!-- topo-->
		
  		
  		
  	</header>

	<div class="container" id="conteudo">
		
		
  	<section class="container-fluid text-center">
		<h1 class="row justify-content-center">Projetos</h1>
         <div class="row ">
		  <?php 
		  foreach($conexao->query($query) as $valor) {
		 
		 ?>
		
			<div class="col-12 col-md-6" id="projetos"><!--projeto-->
			<a href="<?=$valor['linkPagina']?>" class="nav-link">
				<div>
					<div>
						<div class="card-body">
							<h5 class="card-title"><?= $valor['titulo']?></h5>
							<p><?= $valor['descricao']?></p>
						</div>
					</div>
					<div class="card mb-4">
						<div class="">
							<img src="<?=$valor['linkImg']?>" class="img-fluid img img-card" alt="...">
						</div>
					</div>

				</div>
			</a>
				

				
			</div><!--./projeto-->

			<?php 
			} 
			
			?>

			</div>
		

  		
  	</section>

	</div>
    <!--seção de projetos-->
	<?php 
	foreach($conexao->query($query2) as $resumo) {

	
	
	?>
	
    
    	

  	<footer class="container" id="footer">
		<div class="card mb-3 mt-5 col-12 col-md-12 col-lg-12" ><!--projeto-->
			<div class="row g-0 " id="topo_footer">
			  <div class="col-md-4 col-4" >
				<img src="<?= $resumo['img']?>" width="100" height="100" class="img-fluid " alt="Minha foto" id="eu">
			  </div>
			  <div class="col-md-12 col-12">
				<div class="card-body" id="sobre">
				  <h5 class="card-title display-4"><?= $resumo['titulo']?></h5>
				  <cite class=""><?= $resumo['resumo']?>
				  </cite>
                    <hr>
					<h1 class="row justify-content-center">contato</h1>

					<div class="row justify-content-center">
						<div class="col-6">
							
						<p>telefone: <?= $resumo['telefone']?></p>

						</div>

						<div class="col-6">
							
						<p class="clipboard">email: <?= $resumo['email']?></p>

						</div>

						<div class="row">
							<a href="https://www.instagram.com/mateuss5150/" class="col-2 col-md-1 col-lg-1 col-xl-1"><img class="img img-fluid" src="../assets/imagens/instagram.png">
							</img></a>

							<a href="https://www.facebook.com/profile.php?id=100009637780064" class="col-2 col-md-1 col-lg-1 col-xl-1"><img class="img img-fluid" src="../assets/imagens/facebook.png">
							</img></a>

							<a href="https://www.linkedin.com/in/mateussantos-dev/" class="col-2 col-md-1 col-lg-1 col-xl-1"><img class="img img-fluid" src="../assets/imagens/linkedin.png">
							</img></a>

							<a href="https://github.com/MateusSantoss" class="col-2 col-md-1 col-lg-1 col-xl-1"><img class="img img-fluid" src="../assets/imagens/github.png">
							</img></a>

							<a href="https://wa.me/5575997122910" class="col-2 col-md-1 col-lg-1 col-xl-1"><img class="img img-fluid" src="../assets/imagens/whatsapp_733585.png">
							</img></a>
							
						</div>
						</div>

					
                     
					

				  
				</div>
			  </div>
			</div>
		  </div><!--./projeto-->
		  <?php }?>

  		
  
  	</footer>
  
  </body>
  </html>
