<?php
$file = file_get_contents('data.json');
$posts = json_decode($file, true);

require_once('header.php');

?>



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
			width: 100%;
			margin-bottom: 1em;
			border-radius: 1%;
			padding: 1em;
		}
		
		.post-area {
			
			margin-top: 1em;
			margin-left: 1%;
			width: 50%;

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
  <?php
	require_once('nav_bar.php');
	?>
  
	<div class="post-area">
		<?php 
			
			for($count = 0; $count < count($posts); $count++){
				echo '<a href="detail.php?id='.$count.'"><div class="post-style box"><p class="post-header-style">Posted by '.$posts[$count]['creator'].' on: ' .$posts[$count]['date_posted'].'</p><hr><p>'.$posts[$count]['content'].'</p></div></a>';
					
			}
			
		?>
	</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>