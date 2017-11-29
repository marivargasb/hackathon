<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
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

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>username</th>
			<th>firt name</th>
			<th>last name</th>
			<th>editar</th>
			<th>eliminar</th>
		</tr>
	</thead>
	<tbody>

	<?php 
					foreach ($usser as $index=>$user) { ?>
					<tr>
						<td><?php echo $user->username; ?></td>
						<td><?php echo $user->first_name; ?></td>
						<td><?php echo $user->last_name; ?></td>
						
					<td>	<a class="btn btn-large btn-block btn-primary" href="/Mypetscr/CodeIgniter-3.1.6/user/cargar?id= <?php echo $user->id; ?>" role="button">editar</a> </td>
					<td>	<a class="btn btn-large btn-block btn-danger" href="/Mypetscr/CodeIgniter-3.1.6/user/delates?id= <?php echo $user->id; ?>" role="button">eliminar</a> </td>
						
					</tr>	
				<?php } ?>
				

				
	</tbody>
</table>
	


</div>




</body>
</html>
