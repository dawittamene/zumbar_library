<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zumbara library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="index.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand"><span>zu</span>mbara</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	   
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	    
		  <li class="nav-item">
		  </li>
		  <li class="nav-item">
			<a class="nav-link " href="#" ><span>H</span>ome</a>
		  </li>

		  <li class="nav-item">
			<a class="nav-link " href="#" ><span>B</span>ook</a>
		  </li>

		  <li class="nav-item">
			<a class="nav-link " href="#" ><span>v</span>ideo</a>
		  </li>

		  <li class="nav-item">
			<a class="nav-link " href="#" ><span>A</span>bout</a>
		  </li>
	    </ul>

      
	  </div>
	</nav>
	<br><br>

    <h3>HI, <span>Teacher</span></h3>
    <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>



	<div class="row">
		<div class="col-lg-2">
        <img class="thumbnail" src="images/placeholder.png">
			<div class="box-element product">
				<h6><strong>Product</strong></h6>
				<hr>
				<center><a class="btn btn-outline-success" href="#"><button><i class="fa fa-download"></i> Download</button></a></center>

			</div>
		</div>

		<div class="col-lg-2">
        <img class="thumbnail" src="images/placeholder.png">
			<div class="box-element product">
				<h6><strong>Product</strong></h6>
				<hr>
				
				<center><a class="btn btn-outline-success" href="#"><button><i class="fa fa-download"></i> Download</button></a></center>
				
				
			</div>
		</div>


	


		<div class="col-lg-2">
        <img class="thumbnail" src="images/placeholder.png">
			<div class="box-element product">
				<h6><strong>Product</strong></h6>
				<hr>
				
				<center><a class="btn btn-outline-success" href="#"><button><i class="fa fa-download"></i> Download</button></a></center>
				
				
			</div>
		</div>


		<div class="col-lg-2">
			<img class="thumbnail" src="images/placeholder.png">
				<div class="box-element product">
					<h6><strong>Product</strong></h6>
					<hr>
					
					<center><a class="btn btn-outline-success" href="#"><button><i class="fa fa-download"></i> Download</button></a></center>
					
					
				</div>
			</div>


			<div class="col-lg-2">
				<img class="thumbnail" src="images/placeholder.png">
					<div class="box-element product">
						<h6><strong>Product</strong></h6>
						<hr>
						
						<center><a class="btn btn-outline-success" href="#"><button><i class="fa fa-download"></i> Download</button></a></center>
						
						
					</div>
				</div>


        <div class="col-lg-2">
        <img class="thumbnail" src="images/placeholder.png">
			<div class="box-element product">
				<h6><strong>Product</strong></h6>
				<hr>
				
				<center><a class="btn btn-outline-success" href="#"><button><i class="fa fa-download"></i> Download</button></a></center>
				
				
				
			</div>
		</div>

	
	</div>




	<div class="row">
		<div class="col-lg-2">
        <img class="thumbnail" src="images/placeholder.png">
			<div class="box-element product">
				<h6><strong>Product</strong></h6>
				<hr>
				<center><a class="btn btn-outline-success" href="#"><button><i class="fa fa-download"></i> Download</button></a></center>
				

			</div>
		</div>

		<div class="col-lg-2">
        <img class="thumbnail" src="images/placeholder.png">
			<div class="box-element product">
				<h6><strong>Product</strong></h6>
				<hr>
				
				<center><a class="btn btn-outline-success" href="#"><button><i class="fa fa-download"></i> Download</button></a></center>
				
				
			</div>
		</div>


	


		<div class="col-lg-2">
        <img class="thumbnail" src="images/placeholder.png">
			<div class="box-element product">
				<h6><strong>Product</strong></h6>
				<hr>
				
				<center><a class="btn btn-outline-success" href="#"><button><i class="fa fa-download"></i> Download</button></a></center>
				
				
			</div>
		</div>


		<div class="col-lg-2">
			<img class="thumbnail" src="images/placeholder.png">
				<div class="box-element product">
					<h6><strong>Product</strong></h6>
					<hr>
					
					<center><a class="btn btn-outline-success" href="#"><button><i class="fa fa-download"></i> Download</button></a></center>
					
					
				</div>
			</div>


			<div class="col-lg-2">
				<img class="thumbnail" src="images/placeholder.png">
					<div class="box-element product">
						<h6><strong>Product</strong></h6>
						<hr>
						
						<center><a class="btn btn-outline-success" href="#"><button><i class="fa fa-download"></i> Download</button></a></center>
						
						
					</div>
				</div>


        <div class="col-lg-2">
        <img class="thumbnail" src="images/placeholder.png">
			<div class="box-element product">
				<h6><strong>Product</strong></h6>
				<hr>
				
				<center><a class="btn btn-outline-success" href="#"><button><i class="fa fa-download"></i> Download</button></a></center>
				
				
				
			</div>
		</div>

	
	</div>




























































<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>