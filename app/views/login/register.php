<?php require_once 'app/views/templates/headerPublic.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Please create an account</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="/login/validate" method="post">
			    <fieldset>
					<div class="form-group">
					  <label for="username" class="col-lg-2 control-label">New Username</label>
					  <div class="col-lg-10">
						<input type="text" class="form-control" name="username" placeholder="Username" required>
					  </div>
					</div>
					<div class="form-group">
					  <label for="password"  id="psw" name="psw" class="col-lg-2 control-label">New Password</label>
					  <div class="col-lg-10">
						<input type="password" class="form-control" name="password" placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,}$" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters and a specialCharacter" required>
					  </div>
					</div>
				
				<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
 <p id="specialCharacter" class="invalid">A <b>Special</b> character</p>
</div>
		
				
					<div class="form-group">
					  <div class="col-lg-10 col-lg-offset-2">
						<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</div>
			    </fieldset>
			</form>
			
        </div>
    </div>
	<?php
		if ($_SESSION['isValidLogin']==-1) { ?>
	<div class="row">
    	<div class="col-sm-auto">		
			<div class="alert alert-dismissible alert-danger">
  				<button type="button" class="close" data-dismiss="alert">&times;</button>
  				<?php echo $_SESSION['registerMessage'] ?>
			</div>
		</div>
	</div>
	<?php }

	else if ($_SESSION['isValidLogin']==1)
	{ ?>
	<div class="row">
    	<div class="col-sm-auto">		
			<div class="alert alert-dismissible alert-success">
  				<button type="button" class="close" data-dismiss="alert">&times;</button>
  				You are sucessfully Registered !!!!
			</div>
		</div>
	</div>
	<?php } ?>

   <?php require_once 'app/views/templates/footer.php' ?>

