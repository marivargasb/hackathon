<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to My App</title>

	
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	

</head>
<body>

<div id="container" class="container">
	<h1><?php echo $title ?></h1>
	<?php 
					foreach ($usser as $index=>$user) { 
					
						?>
						
			

	<form action="/Mypetscr/CodeIgniter-3.1.6/user/editar?id= <?php echo $user->id; ?>" method="POST" role="form">
	
		<div class="form-group">
			<label for="">Username</label>
			<input type="text" name="username" class="form-control" id="" placeholder="Input field" value="<?php echo $user->username; ?>">
		</div>



		<div class="form-group">
			<label for="">First Name</label>
			<input type="text" name="first_name" class="form-control" id="" placeholder="Input field" value="<?php echo $user->first_name; ?>">
		</div>

		<div class="form-group">
			<label for="">Last Name</label>
			<input type="text" name="last_name" class="form-control" id="" placeholder="Input field"  value="<?php echo $user->last_name; ?>">
		</div>
		
			<button type="submit" class="btn btn-primary">editar</button>
	</form>
	
	<?php } ?>
</div>

</body>
</html>