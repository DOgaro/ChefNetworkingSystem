<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Chef Hub</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Chef Hub</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/insert">
				<div class="form-group">
					<label>Username:</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="text" class="form-control" name="password">
				</div>
				<div class="form-group">
					<label>FullName:</label>
					<input type="text" class="form-control" name="fname">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label>Contact:</label>
					<input type="text" class="form-control" name="contact">
				</div><div class="form-group">
					<label>Culinary Arts:</label>
					<input type="text" class="form-control" name="arts">
				</div><div class="form-group">
					<label>Located In:</label>
					<input type="text" class="form-control" name="location">
				</div><div class="form-group">
					<label>Review:</label>
					<input type="text" class="form-control" name="review">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>