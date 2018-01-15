<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>pdms</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url('assets3/bootstrap/css/bootstrap.min.css');?>">
       	<link rel="stylesheet" href="<?php echo base_url('assets3/css/form-elements.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets3/css/style.css');?>">

        



    </head>

    <body style="<?php echo site_url('assets3/img/backgrounds/1.jpg');?>">

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Login</strong></h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        	
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="<?php echo base_url()?>/users/login" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="employee_username"  class="form-control" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="employee_password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Login</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url('assets3/js/jquery-1.11.1.min.js');?>"></script>
        <script src="<?php echo base_url('assets3/bootstrap/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets3/js/jquery.backstretch.min.js');?>"></script>
        <script src="<?php echo base_url('assets3/js/scripts.js');?>"></script>
        
        <!--[if lt IE 10]>
            <script src="<?php echo base_url('assets3/js/placeholder.js');?>"></script>
        <![endif]-->

    </body>

</html>