<?php

require_once('functions.php');

$posts = jsonToArray('data.json');

$id = $_GET['id'];

if(!isset($_GET['id'])){
	die('No id: go back to the <a href="index.php">Hotels page</a>');
}

if(!is_numeric($_GET['id']) || $_GET['id']<0 || $_GET['id']>=count($posts)){
	die('Invalid: go back to the <a href="index.php">Home page</a>');
	
}




?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Peruser: A Reddit Clone</title>
	<style>
	
		a {
			text-decoration: none;
		}
		
		a:link {
			color: black;
			
			
		}
		
		a:visited {
			color: black;
			
			
		}
		
		a:hover {
			color: black;
			text-decoration: none;
			
		}
		
		
		
		.box:hover {
			border-color: black;
			border-width: 1px;
			border-style: solid;
		}
		
		.post-style {
			
			background-color: #FCFCFC;
			width: 75%;
			margin-top: 1em;
			border-radius: 1%;
			padding: 1em;
			margin-left: auto;
			margin-right: auto;
			
		}
		
		
		.post-header-style {
			
			font-weight: 5px;
			font-size: 0.75em;
		}
		
		body {
			
			background-color: #F4F4F4;
			
		}
		
	</style>
  </head>
  
  <body>
	<?php require_once('nav_bar.php'); ?>
	
	

<?= '<div class="post-style"><p class="post-header-style">Posted by '.$posts[$id]['creator'].' on: ' .$posts[$id]['date_posted'].'</p><hr><p>'.$posts[$id]['content'].'</p></div></a>'; ?>


  
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>