<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Register Page</title>

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://css.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://css.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
	
	<div class="col-lg-7 col-lg-offset-2">
		<h1>Register Page</h1>

        <p>Fill in the details to register on our website</p>
        <?php if(isset($_SESSION['succes'])) { ?>
             <div class="alert alert-success"> <?php echo $_SESSION['succes']; ?></div>
        <?php
        } ?>
        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
        <form action="" method="POST">
	    
		<div class="form-group">
			<label for="username">Username:</label>
			<input class="form-control" name="username" id="username" type="text">
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input class="form-control" name="email" id="email" type="text">
		</div>

        <div class="form-group">
			<label for="password">Password:</label>
			<input class="form-control" name="password" id="password" type="password">
		</div>

        <div class="form-group">
			<label for="password">Confirm Password:</label>
			<input class="form-control" name="password2" id="password" type="password">
		</div>

        <div class="form-group">
			<label for="gender">Gender:</label>
			<select class="form-control" name="gender" id="gender">
			  <option value="Male">Male</option>
			  <option value="Female">Female</option>
			  <option value="Other">Other</option>
			</select>
		</div>

        <div class="form-group">
			<label for="phone">Phone:</label>
			<input class="form-control" name="phone" id="phone" type="text">
		</div>

        <div>
	        <button class="btn-btn-primary" name="register">Register</button>
        </div>
    </form>
    </div>


<srcipt src="<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.j.s"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>