<?php require_once 'app/views/templates/headerPublic.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>You are not logged in!</h1>

                <p class="lead"><a href="login/register"> Sign up here </a></p>
            </div>
		</div>
    </div>
	<?php
		if ($_SESSION['failedAuth']) { ?>
	<div class="row">
    	<div class="col-sm-auto">		
			<div class="alert alert-dismissible alert-danger">
  				<button type="button" class="close" data-dismiss="alert">&times;</button>
  				Login failed. Please try again.
			</div>
		</div>
	</div>
	<?php }	
	?>
<div class="row">
    <div class="col-sm-auto">
		<form action="login/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="name">Username</label>
				<input required type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="name">Password</label>
				<input required type="password" class="form-control" name="password">
			</div>
		  <button type="submit" class="btn btn-primary">Login</button>
		</fieldset>
		</form> 
	</div>
</div>

    <?php require_once 'app/views/templates/footer.php' ?>
