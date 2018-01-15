<hr>
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
    <legend><b>Donor Profile</b></legend>
</div>
<div class="row">
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
                    <!-- <li style="top: 150px;"><a href="#top" style="text-decoration: none;"><font color="black"><center>About</center></font></a></li>

                    <li style="top: 600px;"><a href="#donation" style="text-decoration: none;"><font color="black">Donation Details</font></a></li> -->
                    <li class="change"><a href="<?php echo base_url()?>Donors/view_update_donor/<?php echo $donor["0"]['donorId']; ?>" style="text-decoration:none;"><font color="#3478e5"><center>Change Profile></center></font></a></li>
                    <!--                <li class="change"><a href="--><?php //echo base_url()?><!--donation/get_last_donation/--><?php //echo $donor["0"]['donorId']; ?><!--" style="text-decoration:none;"><font color="#3478e5"><center>View Last donation></center></font></a></li>-->
                    <li class="change"><a href="<?php echo base_url()?>donors/view_donation_history/<?php echo $donor["0"]['donorId']; ?>" style="text-decoration:none;"><font color="#3478e5"><center>Donation history></center></font></a></li>

                </ul>
            </div>
        </div>


        <div class="col-md-7" style="margin-left: 350px;">

            <form class="form-horizontal" role="form">
                <div class="coverpad"></div>
                <div class="coverpadx">

                    <form class="form-horizontal" role="form">

                        <?php foreach($donor as $donor1){ ?>
                        <h3><?php echo $donor1['donorFname']." ".$donor1['donorMname']." ".$donor1['donorLname']; ?></h3>
                        <!-- <label style="font-size: 20px;"><b>About</b></label><br> -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIC Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $donor1['donorNIC']; ?>" name="donorNIC" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Gender</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $donor1['donorGender']; ?>" name="donorGender" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="address" class="form-control" id="exampleInputEmail1" value="<?php echo $donor1['donorAddress']; ?>" name="donorAddress" disabled>
                        </div>
                        <div class="form-group" id="about">
                            <label for="exampleInputEmail1">Distance</label>
                            <input type="address" class="form-control" id="exampleInputEmail1" value="<?php echo $donor1['donorDistance']; ?> KM" name="donorAddress" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $donor1['donorEmail']; ?>" name="donorEmail" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date Of Birth</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" value="<?php echo $donor1['donorDOB']; ?>" name="donorDOB" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Height</label>
                            <input type="double" class="form-control" id="exampleInputEmail1" value="<?php echo $donor1['donorHeight']; ?>" name="donorHeight" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Blood Group</label>
                            <input type="address" class="form-control" id="exampleInputEmail1" value="<?php echo $donor1['donorBloodGroup']; ?>" name="donorAddress" disabled>
                        </div>
                        <div class="form-group">
                            <label>Available Times</label><br>
                            <input type="double" class="form-control" id="exampleInputEmail1" value="<?php echo $donor1['donorAvailable']; ?>" name="donorHeight" disabled>
                        </div>
                        <div class="form-group">
                            <label>Donor Status</label><br>
                            <input type="text" class="form-control" id="donorStatus" value="<?php echo $donor1['donorStatus']; ?>" name="donorStatus" disabled>
                        </div>
                        <!-- <label style="font-size: 20px;"><b>Last Donation Details</b></label><br>
    -->
                </div>
                <a href="#top" style="text-decoration: none; font-size: 20px; margin-left: 750px;"><font color="blue">Top</font></a>

                <?php } ?>
            </form>

        </div>
        </form>

    </div>
</div>
</div>
<hr>
</body>
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
