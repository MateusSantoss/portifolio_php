<?php 

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$linkPagina = $_POST['link_url'];
$linkImg = $_POST['link_img'];



$dsn = 'mysql:host=sql211.infinityfree.com;dbname=if0_35335029_portifolio';
$usuario = 'if0_35335029';
$senha = 'o3e4zDB0Lr';
   
   
   try {
	   $conexao = new PDO($dsn, $usuario, $senha);
      
	   $query = "insert into tb_portifolio (titulo, descricao, linkPagina, linkImg)
       values ('$titulo', '$descricao', '$linkPagina', '$linkImg')";
       $conexao->exec($query);
       echo "<p>Postagem realizado com sucesso! </p>";
   
	   //$stmt = $conexao->query($query);
	  
	 
   
	   
   }
   
	  catch(PDOException $e) {
	   echo "Erro".$e->getCode(). 'Mensagem: '.$e->getMessage ();

	   
   }
?>