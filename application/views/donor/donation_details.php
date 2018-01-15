<style type="text/css">

    .container ul li{
        text-align: center;
        border: 1px solid white ;
        padding-top: 0px;
        border-radius:0px;
        margin-bottom:5px;
        width: 200px;
    }
    .container ul li:hover{
        border: 1px solid white ;
        padding-top: 0px;
        border-radius:0px;
        margin-bottom:5px;
        width: 100px;
        background: green;
    }


    .change{
        text-align: center;
        border: 1px solid white ;
        padding-top: 0px;
        border-radius:0px;
        margin-bottom:5px;
        width: 200px;

    }

    .change:hover{
        border: 1px solid white ;
        padding-top: 0px;
        border-radius:5px;
        margin-bottom:5px;
        width: 200px;
        background: #a5a9af;

    }

    .container{
        color: white;
    }


    .vertical-separate:hover{
        padding: 8px;
        border-radius:10px;
        margin-bottom:25px;
        background-color:  #5EFB6E;
        transition: linear all 0.1s;

    }


</style>




<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/donors/donor_profile_list">Donors</a>
    </li>
    <li class="breadcrumb-item active">Donor Profile</li>
</ol>
<div class="col-md-12" style="text-align: center; margin-top: 10px;">
    <legend><b>Donations Details</b></legend>
</div>
<div class="row">

    <!-- left column -->
    <div class="col-md-5" style="padding-top: 40px;
        margin-left: 40px;
        position: fixed;
        top: 150px;
        height: 100%;
        border-radius: 0;
        border: none;
        /*overflow-y: auto;*/">
        <div class="text-center" style="margin-left: -300px;">
            <img src="<?php echo base_url('assets/images/media/user.png');?>" class="avatar img-circle" alt="avatar" style="width: 150px; height: 150px;">
        </div>

        <div class="text-change" style="margin-left: -80px;">
            <ul style="list-style-type: none; ">
                <li class="change"><center>Change Profile></center></font></a></li>
            </ul>
        </div>
    </div>
    <div class="card col-md-7" style="margin-left: 350px;">
    </div>
</div>