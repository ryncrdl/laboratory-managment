<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>PUP LMS | Member Login</title>
	<!-- Logo -->
	<link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon"/>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap-table.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/styles.css">


	<!-- datatables -->
	<link rel="stylesheet" type="text/css" href="../assets/datatables/css/jquery.dataTables.min.css">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/font-awesome.min.css">

	<!-- custom -->
	<link rel="stylesheet" type="text/css" href="../assets/mycustom/css/styles.css">

	<!-- toastr -->
	<link rel="stylesheet" type="text/css" href="../assets/toastr/css/toastr.css">

	<style>
		/* .login{
			background-image: url(../assets/bg.png) !important;
			background: red;
			background-repeat: no-repeat;
			background-size: cover;	
		} */
	</style>

</head>
<body class="index-body login">


	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header" style="background: #800000; margin-left: -15px; width: 100vw; padding: 1rem 2rem;">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">PUP LABORATORY MANAGEMENT SYSTEM</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>	


<div class="container-fluid">

	<div class="panel">
		<div class="panel-body">

			<div class="col-md-4 col-sm-12 col-xs-12 col-md-offset-4" style="margin-top: 5rem; box-shadow: 0.1rem 0.1rem 0.5rem rgba(0,0,0,0.3);">
				<form class="frm_memberlogin" style="padding: 2rem;">
				<img src="../views/logo.png"  style="width: 10rem; margin: 1rem 0rem; position: relative; left: 50%; transform: translateX(-50%);"/>
				<div class="panel-heading text-center" style="color: #800000; font-weight: bold;">PUP Laboratory Management System</div>
				<h4 class="alert bg-primary text-center">Member Login</h4>
					<div class="form-group">
						<label>ID Number</label>
						<input type="number" name="id_number" class="form-control" required autofocus="on">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="m_password" class="form-control" required autofocus="on">
					</div>
					<div class="form-group">
						<a href="../" class="text-right" style="display: block; color: gray; margin: 1rem 0rem;"> Forgot Password</a>
						<button class="btn btn-primary" style="display: block; width: 100%;">Log in</button>
						<br>
						<a href="../" style="color: #800000 !important;"> Login as Admin's</a>
					</div>
				</form>
			</div>

		</div>
	</div>
	
</div>



<?php include 'footer.php'; ?>