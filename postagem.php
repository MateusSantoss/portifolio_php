<?php 
print_r($_POST);
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$linkPagina = $_POST['link_url'];
$linkImg = $_POST['link_img'];

echo $titulo;

$dsn = 'mysql:host=localhost;dbname=portifolio';
   $usuario = 'root';
   $senha = '';
   
   
   try {
	   $conexao = new PDO($dsn, $usuario, $senha);
      
	   $query = "insert into tb_projetos (titulo, descricao, linkPagina, linkImg)
       values ('$titulo', '$descricao', '$linkPagina', '$linkImg')";
       $conexao->exec($query);
   
	   //$stmt = $conexao->query($query);
	  
	 
   
	   
   }
   
	  catch(PDOException $e) {
	   echo "Erro".$e->getCode(). 'Mensagem: '.$e->getMessage ();

	   
   }
?>