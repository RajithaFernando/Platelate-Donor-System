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
    <link href="<?php echo base_url('assets/bootstrap/css/style.css');?>" rel="stylesheet">
<!--    <link href="--><?php //echo base_url('assets/css/bootstrap.min.css');?><!--" rel="stylesheet">-->

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/sb-admin.css');?>" rel="stylesheet">

    <script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
    <script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>

      <style >
          .loader
          {
              position: fixed;
              left: 0px;
              top: 0px;
              width: 100%;
              height: 100%;
              z-index: 9999;
              background: url('<?php echo base_url()?>/assets/images/preloader.gif') 50% 50% no-repeat rgb(249,249,249);
          }
  #exampleAccordion li:hover{
    background-color:#5e5c58;
  }
  </style>

</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php if ($this->session->userdata('logged_in')):?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url();?>/"><b style="font-size:20px;"><img src="<?php echo base_url(); ?>assets2/js/masterslider/1.png" style ="width:40px; hight:20px; border-radius:70px;">   PLATELET DONOR MANAGEMENT SYSTEM</b></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive" >
<!--        allowed to access when user login-->
        <?php if ($this->session->userdata('logged_in')):?>
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="<?php echo base_url()?>/users/dashboard">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">
                Dashboard</span>
                </a>
            </li>
<!--            users can edit their profile-->
            <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="<?php /*echo base_url()*/?>/users/edit">
                     <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    <span class="nav-link-text">
                Edit Profile</span>
                </a>
            </li>-->
<!--            only admin can access employee registration with employee module-->
            <?php if ($this->session->userdata('employee_occupation')=="Admin"): ?>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                        <span class="nav-link-text">
                Employee</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents">
                        <li>
                            <a href="<?php echo base_url()?>/users/register_page"><i class="fa fa-circle-o" aria-hidden="true"></i> Employee Registration</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>/users/current_users"><i class="fa fa-circle-o" aria-hidden="true"></i> Current Employees</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>/users/check_block_users"><i class="fa fa-circle-o" aria-hidden="true"></i> Blocked Employee</a>
                        </li>
                    </ul>
                </li>
            <?php endif;?>

<!--donor search by blood group-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="<?php echo base_url()?>/donors/view_donor">
                    <i class="fa fa fa-search"></i>
                    <span class="nav-link-text">
                    Search Donor by <br>  Blood Group</span>
                </a>
            </li>
<!--            donor search by NIC-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="<?php echo base_url()?>/donors/search_donor">
                    <i class="fa fa fa-search"></i>
                    <span class="nav-link-text">
                Search Donor by NIC</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <span class="nav-link-text">
                Donors</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="<?php echo base_url()?>/donors/registerDonor"><i class="fa fa-circle-o" aria-hidden="true"></i>  Donor Registration</a>
                    </li>
<!--                    give permission only doctors and admint to access-->
                    <?php if (($this->session->userdata('employee_occupation')=="Admin")||($this->session->userdata('employee_occupation')=="Doctor")): ?>

                    <li>
                        <a href="<?php echo base_url()?>/donorapprovals/load_donors"><i class="fa fa-circle-o" aria-hidden="true"></i>  Donor Approval list</a>
                    </li>
                        <li>
                            <a href="<?php echo base_url()?>donor_waitinglist/load_donors"><i class="fa fa-circle-o" aria-hidden="true"></i> Waiting Donations list</a>
                        </li>
                    <li>
                        <a href="<?php echo base_url()?>/donation/add_donation"><i class="fa fa-circle-o" aria-hidden="true"></i>  Donation</a>
                    </li>
                    <!--<li>
                        <a href="<?php /*echo base_url()*/?>/donors/view_donor"><i class="fa fa-circle-o" aria-hidden="true"></i>  Donor select by blood group</a>
                    </li>
                    -->
                        <li>
                        <a href="<?php echo base_url()?>/differdonors"><i class="fa fa-circle-o" aria-hidden="true"></i>  Check differ Donors</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url()?>/donors/donor_profile_list"><i class="fa fa-circle-o" aria-hidden="true"></i>  Donor Profile</a>
                    </li>
                    <?php endif;?>

                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    <span class="nav-link-text">
                Report</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="<?php echo base_url()?>/Pdf_Controller/generate_pdf_report"><i class="fa fa-circle-o" aria-hidden="true"></i> Donor deffer letter</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>/SummaryPdf_Controller/generate_summarypdf_report"><i class="fa fa-circle-o" aria-hidden="true"></i> Donation Summery Report</a>
                    </li>
                    <!--<li>
                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2"><i class="fa fa-circle-o" aria-hidden="true"></i> Third Level</a>
                        <ul class="sidenav-third-level collapse" id="collapseMulti2">
                            <li>
                                <a href="#"> <i class="fa fa-square-o" aria-hidden="true"></i> Donor monthly report</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-square-o" aria-hidden="true"></i> Machine report</a>
                            </li>
                        </ul>
                    </li>-->
                </ul>
            </li>
<!--           only admin can register new machine to system-->
            <?php if ($this->session->userdata('employee_occupation')=="Admin"): ?>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="<?php echo base_url()?>/Machine/load">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">
                Machine Details</span>
                </a>
            </li>
            <?php endif;?>
        </ul>
            <!--side nave arrow-->
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if (($this->session->userdata('employee_occupation')=="Admin")||($this->session->userdata('employee_occupation')=="Doctor")): ?>

                    <li class="nav-item " style="width: auto;">
                        <a class="nav-link  mr-lg-3" id="messagesDropdown" href="<?php echo base_url()?>/donorapprovals/load_donors" >
                            <span class="badge badge-default" >Waiting donors</span>
                            <span class="badge badge-success indicator" id="notification">
                            </span>
                        </a>
                    </li>
                <?php endif;?>
                <li class="nav-item">
                    <a class="nav-link  mr-lg-3" id="messagesDropdown" href="<?php echo base_url()?>donor_waitinglist/load_donors" >
                        <span class="badge badge-default" >Waiting donation</span>
                        <span class="badge badge-warning indicator" style="background-color: #81D8D0;" id="notification_donation">
                        </span>
                    </a>
                </li>
                <!--                search donor -->
                <li class="nav-item">
<!--                    <div class="dropdown" id="dropdownMenu">-->
                        <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group" >
                            <input class="form-control" type="text" id="search2" name="search2" placeholder="Search by NIC...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        </form>
<!--                    <div id="finalResult" class="dropdown-menu" aria-labelledby="dropdownMenuButton">-->
                        <ul id="finalResult">

                        </ul>
<!--                    </div>-->
<!--                    </div>-->
                </li>
                <li class="nav-item dropdown" style="padding-right: 50px;">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $this->session->userdata('employee_username')?>
                    </a>
                        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header"><?php echo $this->session->userdata('employee_occupation')?></h6>
                            <h6 class="dropdown-header">Manage Account:</h6>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo base_url();?>/users/dashboard" style="color: #0D3349;">&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-tachometer" ></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Dashbord</a>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo base_url();?>/users/edit" style="color: #0D3349;">&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-pencil-square-o" ></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEdit profile</a>
                            <div class="dropdown-divider"></div>
                            <a data-toggle="modal" data-target="#exampleModal">&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-fw fa-power-off"></i>&nbsp&nbsp&nbsp&nbsp&nbsp Logout</a>
                        </div>
                </li>
            </ul>
        <?php endif;?>
    </div>
</nav>
<?php endif;?>
<!--side nave toggel script-->
<script>
    notification

    function notification()
    {
        $.ajax({//updating the stasus to replied in quotation table
            type:"post",
            url:"<?php echo base_url('Donorapprovals/update_notification');?>",
            success:function(data){
                if(data>0){
                    $('#notification').html(data);
                }
            }
        });
    }
    setInterval(notification, 1*1000);
</script>
<script>
    notification_donation

    function notification_donation()
    {
        $.ajax({//updating the stasus to replied in quotation table
            type:"post",
            url:"<?php echo base_url('Donor_waitinglist/update_notification');?>",
            success:function(data){
                if(data>0){
                    $('#notification_donation').html(data);
                }
            }
        });
    }
    setInterval(notification_donation, 1*1000);
</script>


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

<script>
    $(document).ready(function(){
        $("#search2").keyup(function() {
            if ($("#search2").val().length > 2) {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url()?>/donors/suggest_donors",
                    cache: false,
                    data: 'search=' + $("#search2").val(),
//                    dataType: 'json',
                    success: function (response) {
                        //console.log(response);
                        $('#finalResult').html("");
                        var obj = JSON.parse(response);
                        if (obj.length > 2) {
                            try {
                                var items = [];
                                $.each(obj, function (i, val) {
                                    items.push($('<li> <a href="<?php echo base_url()?>/donors/donor_profile/'+val.donorId+'">'+val.donorFname + " " + val.donorLname +"    "+val.donorNIC +'</a></li>'));
                                });
                                $('#finalResult').append.apply($('#finalResult'), items);
                            } catch (e) {
                                alert('Exception while request..');
                            }
                        } else {
                            $('#finalResult').html($('<li/>').text("No Donor Found"));
                        }

                    },
                    error: function () {
                        alert('Error while request..');
                    }
                });
            }
            return false;
        });

        $(function(){
            $('navbar a').click(function(){
                speed = 200;
                i=$(this).index();

            });
        });
    });
</script>
<script type="text/javascript">
    $(window).load(function() {
        $(".loader").fadeOut(5000);
    })
</script>
<div class="loader">
</div>

<div class="content-wrapper"  style="background-color: #e1e8ed;">

    <div class="container-fluid">
<!--       messages load here-->
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

        <?php  if ($this->session->flashdata('get_last_donation')):?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('get_last_donation').'</p>';?>
        <?php endif; ?>


