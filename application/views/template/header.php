<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pdms</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
<!--    <link href="--><?php //echo base_url('assets/css/bootstrap.min.css');?><!--" rel="stylesheet">-->

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/sb-admin.css');?>" rel="stylesheet">
<!--    <script>
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
            if (xmlhttp.readyState==4 && xmlhttp.status==200){
                alert(xmlhttp.responseText);
                console.log(xmlhttp.responseText);// you will see OKKK in console
            }
        }
        xmlhttp.open("GET","../sms/send_sms",true); // first try `../index.php/example` ( extension depends if you enable/disable url rewrite in apache.conf ) , if this won't work then try base_url/index.php/example ( where you can specify base_url by static or with CodeIgniter helpher function )
        xmlhttp.send();
    </script>-->
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php if ($this->session->userdata('logged_in')):?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="background-color: #330000;">
    <a class="navbar-brand" href="<?php echo base_url();?>/">PLATLET DONOR MANAGEMENT SYSTEM</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive" >
        <?php if ($this->session->userdata('logged_in')):?>
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="<?php echo base_url()?>/users/dashboard">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">
                Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="<?php echo base_url()?>/users/edit">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">
                Edit Profile</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="<?php echo base_url()?>/donors/search_donor">
                    <i class="fa fa fa-search"></i>
                    <span class="nav-link-text">
                Scearch Donor by NIC</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="<?php echo base_url()?>/donors/view_donor">
                    <i class="fa fa fa-search"></i>
                    <span class="nav-link-text">
                    Scearch Donor by <br>  Blood Group</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">
                Employee</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="<?php echo base_url()?>/users/register">Employee Registration</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>/users/current_users">Current Employee</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>/users/check_block_users">Unauthorized Employee</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">
                Donors</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="<?php echo base_url()?>/donors/registerDonor">Donor Registration</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>/donorapprovals">Donor Approval list</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>/donation/add_donation">Donation</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>/donors/view_donor">Donor select by blood group</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>/differdonors"> Check differ Donors</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url()?>/donors/donor_profile">Donor Profile</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">
                Report</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="#">Donor deffer letter</a>
                    </li>
                    <li>
                        <a href="#">Donation Report</a>
                    </li>
                    <li>
                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                        <ul class="sidenav-third-level collapse" id="collapseMulti2">
                            <li>
                                <a href="#">Donor monthly report</a>
                            </li>
                            <li>
                                <a href="#">Machine report</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">
                Link</span>
                </a>
            </li>
        </ul>
<!--side nave arrow-->
            <ul class="navbar-nav ml-auto">
<!--            search bar-->
            <!--<li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
                    </div>
                </form>
            </li>
            -->
            </ul>
            <ul class="navbar-nav ml-auto">
                <h4 style = "color: white;">
                    <?php echo $this->session->userdata('employee_username')?>
                </h4>
                
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>
                            <b>Logout</a>
                    </li>
            </ul>

        <?php endif;?>

    </div>

</nav>
<?php endif;?>
<!--side nave toggel script-->
<script>
    function openNav() {
        document.getElementById("sidenavToggler").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
</script>

<div class="content-wrapper" style="background-color: #EFEFF0">

    <div class="container-fluid">
        <?php //$this->load->view('template/adminSideNav');?>
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



