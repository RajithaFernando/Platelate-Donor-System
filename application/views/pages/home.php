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
			                        <button id="loginbtn" type="submit" class="btn">Login</button>
			                    </form>
                                <a href="#" data-target="#pwdModal" data-toggle="modal">Forgot my password</a>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <!--modal-->
        <div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h1 class="text-center">What's My Password?</h1>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="text-center">

                                        <p>If you have forgotten your password you can reset it here.</p>
                                        <div class="panel-body">
                                            <?php echo form_open_multipart('passwords/recover_password');?>
                                            <fieldset>
                                                <div class="form-group">
                                                    <input class="form-control input-lg" placeholder="E-mail Address" name="recover_email" type="email">
                                                </div>
                                                <button class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit"></button>
                                            </fieldset>
                                            <?php echo form_close();?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-12">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
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
<script type="text/javascript">
    //    this function call when reset button click

    $(document).ready(function() {

        $("#loginbtn").click(function(){
//            check password equals
            var password = document.getElementById("form-password").value;
            var username = document.getElementById("form-username").value;
            if ((password =="")&&( username=="") ){
                alert("Passwords fields can not be empty .");
                return false;
            }
            if (password =="" ){
                alert("Passwords field can not be empty .");
                return false;
            }
            if ( username=="" ){
                alert("Username field can not be empty .");
                return false;
            }

    });

</script>