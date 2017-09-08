<html>
<head>
    <title> pdms
    </title>

    <!--    <link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <!--    <script src="http://cdn.ckeditor.com/4.7.2/basic/ckeditor.js"></script>-->
    <script src="http://cdn.ckeditor.com/4.7.2/full/ckeditor.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script><!-- jQuery Library-->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url();?>/">PDMS</a>
        </div>
        <div id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>/about">About</a></li>
                <li><a href="<?php echo base_url();?>/posts">Blogs</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (!$this->session->userdata('logged_in')):?>
                    <li><a href="<?php echo base_url();?>users/login">login</a></li>
                <?php endif;?>

                <?php if ($this->session->userdata('logged_in')):?>
                    <li><a href="<?php echo base_url();?>donation/add_donation">Donation</a></li>
                    <li><a href="<?php echo base_url();?>users/edit">Edit Profile</a></li>

                    <li> <a href="<?php echo base_url();?>users/logout"><?php echo $_SESSION['employee_username'];?> Log out</a><i class="fa fa-fw fa-sign-out"></i></li>
                <?php endif;?>

            </ul>

        </div>
    </div>

</nav>
<!--<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>
-->
<div class="container">
<!--    --><?php //$this->load->view('template/adminSideNav');?>
    <?php  if ($this->session->flashdata('user_registered')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>';?>
    <?php endif; ?>
    <?php  if ($this->session->flashdata('login_failed')):?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>';?>
    <?php endif; ?>

    <?php  if ($this->session->flashdata('user_loggedin')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
    <?php endif; ?>

    <?php  if ($this->session->flashdata('user_loggedout')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>';?>
    <?php endif; ?>

    <?php  if ($this->session->flashdata('donation_successfull')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('donation_successfull').'</p>';?>
    <?php endif; ?>

    <?php  if ($this->session->flashdata('profile_updated')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('profile_updated').'</p>';?>
    <?php endif; ?>
