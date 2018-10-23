<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Login Page</title>

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://css.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://css.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
	
	<div class="col-lg-7 col-lg-offset-2">
		<h1>Profile Page</h1>

        
        <?php if(isset($_SESSION['succes'])) { ?>
             <div class="alert alert-success"> <?php echo $_SESSION['succes']; ?></div>
        <?php
        } ?>
        

        HELLO, <?php echo $_SESSION['username']; ?>
        <br></br>

        <a href="<?php echo base_url(); ?>index.php/auth/logout">Logout</a>
    </div>


<srcipt src="<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.j.s"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
