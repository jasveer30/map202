<?php require_once 'app/views/templates/headerPublic.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Signup</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="/login/checkUser" method="post">
			    <fieldset>
					<div class="form-group">
					  			<label for="username" class="col-lg-2 control-label">New Username</label>
					  <div class="col-lg-10">
						  
						  
								<input type="text" class="form-control" name="username" placeholder="Username" required>
					  </div>
					</div>
					
					
					
					
									<div class="form-group">
									  <label for="password"  id="pass" name="psw" class="col-lg-2 control-label">New Password</label>
		  <div class="col-lg-10">
			<input type="password" class="form-control" name="password" placeholder="Password" required>
		  </div>
					</div>
							<div class="form-group">
								  <div class="col-lg-10 col-lg-offset-2">
									<button type="submit" class="btn btn-primary">Submit</button>
								  </div>
								</div>
							<div>	
						<?php
		if ($_SESSION['$data_valid']==-1) { ?>
	
	
	<div class="row">
    	<div class="col-sm-auto">	
			
			
			
					<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php echo $_SESSION['passw_error'] ?>
					</div>
			
			
		</div>
	</div>
	<?php }

	else if ($_SESSION['$data_valid']==1)
	{ ?>
	<div class="row">
    	<div class="col-sm-auto">	
			
			
					<div class="alert alert-dismissible alert-success">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									Registered
					</div>
			
		</div>
	</div>
	<?php } ?>
					<div>
						
					
					<p>
					Password must contain a Capital Letter, a Number, a special char and must be minimum three characters length
					</p>
						</div>
				</div>
				
			    </fieldset>
			</form>
			
        </div>
    </div>


   <?php require_once 'app/views/templates/footer.php' ?>

