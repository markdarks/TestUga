<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="ckeditor/ckeditor.js"></script>


    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

	<?php include('remover.php'); ?>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="index.php" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add.php">adicionar post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
	
	
          
      <div class="row">

       

          <!-- Preview Image -->
          <!--<textarea class="ckeditor" name="editor"></textarea>-->
          <img class="img-fluid rounded" src="https://i1.wp.com/andre.panzetti.com.br/wp-content/uploads/2015/07/Microsoft-21.jpg?resize=900%2C300" alt="">

         <?php


	$con = mysqli_connect("localhost","root","","doit") or die("error awda");
	//$query = mysqli_query($con, "SELECT * FROM Texto");

	$sql = "select * from ckeditor";
	$result = mysqli_query($con,$sql);
	while($r = mysqli_fetch_array($result))
	{ 	
	 ?>
	
	
	

         <?php// echo $r["id"]; ?>
		

		

          <!-- Comments Form -->
         

          <!-- Single Comment -->
          

          <!-- Comment with nested comments -->
          <div class="media mb-4">

		  <script>/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 *
$('#delete-post').on('show.bs.post', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('ckeditor');
  
  var post = $(this);
  post.find('.post-title').text('Excluir post #' + id);
  post.find('#confirm').attr('href', 'remover.php?id=' + id);
}) */</script>
<?php /*
  require_once('remover.php'); 
  if (isset($_GET['id'])){
    delete($_GET['id']);
  } else {
    die("ERRO: ID não definido.");
  }*/
?>
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" type="button" id=delete-post alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              <?php echo $r['Texto']; ?>

			    <?php 
		
		}
		echo "</div>";
        echo  "</div>";
		?>
             <!-- <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>-->

            </div>
          </div>

        </div>

       

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    
  </body>

</html>
