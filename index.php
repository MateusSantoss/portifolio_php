<?php 
   

   #cria uma conexão com banco de dados
   $dsn = 'mysql:host=localhost;dbname=portifolio';
   $usuario = 'root';
   $senha = '';
   
   
   try {
	   $conexao = new PDO($dsn, $usuario, $senha);
	   $query = 'select * from tb_projetos';
	  
       
	   
   
	   
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

  	
  	<header class="row justify-content-center img img-fluid">

  		<div class="col-md-8 col-lg-8 col-xxl-5 col-8 justify-content-center topo">
  			<img class="img img-fluid mt-5 mx-auto" src="assets/imagens/Logotipo Mateus.png" id="logo"> 
  			</img>

  		
  				
  		</div>
		<!-- topo-->
		
  		<div class="container mx-5 " id="icones"><!--icones-->
			<div class=" d-flex flex-row justify-content-around  mx-6" style="margin-left: 30px;">
				  <div class="col-md-3 col-4" >

					  <a href="https://github.com/MateusSantoss">
						  <img class="col-1 col-md-2 img img-fluid" src="assets/imagens/github.png"  alt="github">
					  </a>

					 <a href="https://www.linkedin.com/in/mateussantos-dev/">
						 <img class="col-1 col-md-2 img img-fluid" src="assets/imagens/linkedin.png" alt="linkedin" >
					 </a>

					 

				  </div>

				  <div class="col-md-3 col-4" >

					  <a href="#">
						  <img class="col-1 col-md-2 img img-fluid" src="assets/imagens/html-5.png"  alt="html">
					  </a>

					 <a href="https://www.linkedin.com/in/mateussantos-dev/">
						 <img class="col-1 col-md-2 img img-fluid" src="assets/imagens/css-3.png" alt="css" >
					 </a>

					 <a href="#">
						<img class="col-1 col-md-2 img img-fluid" src="assets/imagens/js.png" alt="js" >
					</a>

					<a href="#">
						<img class="col-1 col-md-2 img img-fluid" src="assets/imagens/mysql.png" alt="mysql" >

					</a>

					<a href="#">
						<img class="col-1 col-md-2 img img-fluid" src="assets/imagens/php.png" alt="curriculo" >
					</a>

				  </div>
			</div>
  		</div><!--./icones-->
  	
  		
  	</header>

	<div class="container" id="conteudo">
		
		
  	<section class="container-fluid text-center">
		<h1 class="row justify-content-center">Projetos</h1>

		  <?php 
		  foreach($conexao->query($query) as $value => $valor) {
		 
		 ?>
		  <div class="row projeto"><!--projeto-->
			<div class="card  col-md-5 mb-3">
				<div class="card-body">
				  <h5 class="card-title"><?= $valor['titulo']?></h5>
				  <p><?= $valor['descricao']?></p>
				  <a href="<?=$valor['linkPagina']?>" class="nav-link">Ver página</a>
				
				 
				</div>
			  </div>
			<div class="card mb-3 col-md-">
				<div class="">
					<img src="<?=$valor['linkImg']?>" class="img-fluid img img-card" alt="...">
				</div>
			  </div>

			  
		  </div><!--./projeto-->

		  <?php 
		  } 
		 
		 ?>

  		
  	</section>

	</div>
    <!--seção de projetos-->
    
    	

  	<footer class="container" id="footer">
		<div class="card mb-3 mt-5 col-12 col-md-12 col-lg-12" ><!--projeto-->
			<div class="row g-0 " id="topo_footer">
			  <div class="col-md-4 col-4" >
				<img src="assets/imagens/eu.png" width="100" height="100" class="img-fluid " alt="Minha foto" id="eu">
			  </div>
			  <div class="col-md-12 col-12">
				<div class="card-body" id="sobre">
				  <h5 class="card-title display-4">SOBRE</h5>
				  <cite class="">Em março de 2022 tive o meu primeiro contato com a programação escrevendo os primeiro algoritimos em python, em outubro do mesmo ano encontrei a minha paixão no desenolvimento web, desde
					então sigo estudando de maneira intensa.
				  </cite>
                    <hr>
					<h1 class="row justify-content-center">contato</h1>

					<div class="row justify-content-center">
						<div class="col-6">
							
						<p>telefone: (75)997122910</p>

						</div>

						<div class="col-6">
							
						<p>email: msjt098@gmail.com</p>

						</div>

						<div class="row">
							<a href="https://www.instagram.com/mateuss5150/" class="col-2 col-md-1 col-lg-1 col-xl-1"><img class="img img-fluid" src="assets/imagens/instagram.png">
							</img></a>

							<a href="https://www.facebook.com/profile.php?id=100009637780064" class="col-2 col-md-1 col-lg-1 col-xl-1"><img class="img img-fluid" src="assets/imagens/facebook.png">
							</img></a>
						</div>
						</div>

					
                     
					

				  
				</div>
			  </div>
			</div>
		  </div><!--./projeto-->

  		
  
  	</footer>
  
  </body>
  </html>
