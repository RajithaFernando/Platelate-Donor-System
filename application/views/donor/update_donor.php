
<div class="container">
    <h1>Change Donor Profile</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
            <div class="text-center">
                <?php foreach ($imagepath as $value) {?>
                    <img src="<?php echo $value['donorImage'];?> " class="img-rounded" id="img" style="width: 150px; margin-left: 20px; border-radius: 100px;">

                <?php }?>

                <?php echo form_open_multipart('Donors/do_upload/'.$donor2[0]['donorId']);?>
                <!-- <div class="row"> -->
                <input type="file" id="brows" name="userfile" style="margin-left: 30px; margin-top: 10px;"><br>
                <input type="submit" value="upload" id=s"size" style="margin-left: 30px; margin-top: 10px;" >
                <!-- </div> -->
                <?php echo form_close();?>
            </div>
        </div>


        <div class="col-md-9">
            <?php echo validation_errors();?>
            <?php //echo form_open('donors/registerDonor')?>

            <form class="form-horizontal" role="form" action="<?php echo base_url()?>/Donors/update_donor" method="post">

                <div class="coverpad"></div>
                <div class="coverpadx">
                    <form class="form-horizontal" role="form">

                        <div class="form-group form-row">
                            <div class="col-md-2 form-inline">
                                <label>Donor Id</label></div>
                            <div class="form-inline">
                                <input type="text" class="form-control" name="donorId" value="<?php echo $donor2[0]['donorId']; ?>" readonly></div>
                            <?php //var_dump($donor2[0]['donorId']) ?>
                        </div>
                </div>


                <?php foreach($donor2 as $donor1 ) {?>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-2 form-inline">
                            <label for="exampleInputEmail1">First Name</label></div>
                        <div class="col-md-4 form-inline">
                            <input type="text" class="form-control" value="<?php echo $donor1['donorFname']; ?>" name="donorFname" required></div>

                        <div class="col-md-2 form-inline">
                            <label for="exampleInputEmail1">Middle Name</label></div>
                        <div class="col-md-4 form-inline">
                            <input type="text" class="form-control" value="<?php echo $donor1['donorMname']; ?>" name="donorMname">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-2 form-inline">
                            <label for="exampleInputEmail1">Last Name</label></div>
                        <div class="col-md-4 form-inline">
                            <input type="text" class="form-control" value="<?php echo $donor1['donorLname']; ?>" name="donorLname" required>
                        </div>
                        <div class="col-md-2 form-inline">
                            <label for="exampleInputEmail1">NIC Number</label></div>
                        <div class="col-md-4 form-inline">
                            <input type="text" class="form-control" id="nicnumber" value="<?php echo $donor1['donorNIC']; ?>" name="donorNIC" required>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-2 form-inline">
                            <label for="exampleInputEmail1">Gender</label></div>
                        <div class="col-md-4 form-inline">
                            <input type="text" class="form-control" id="gender" value="<?php echo $donor1['donorGender']; ?>" name="donorGender" required>
                        </div>
                        <div class="col-md-2 form-inline">
                            <label for="exampleInputEmail1">Address</label></div>
                        <div class="col-md-4 form-inline">
                            <input type="address" class="form-control" id="address" value="<?php echo $donor1['donorAddress']; ?>" name="donorAddress" required>
                        </div>
                    </div>
                </div>


                <div class="form-group" id="about">
                    <div class="form-row">
                        <div class="col-md-2 form-inline">
                            <label for="exampleInputEmail1">Distance</label></div>
                        <div class="col-md-4 form-inline">
                            <input type="address" class="form-control" id="distance" value="<?php echo $donor1['donorDistance']; ?> KM" name="donorDistance" required>
                        </div>

                        <div class="col-md-2 form-inline">
                            <label for="exampleInputEmail1">Email Address</label></div>
                        <div class="col-md-4 form-inline">
                            <input type="email" class="form-control" id="emailaddress" value="<?php echo $donor1['donorEmail']; ?>" name="donorEmail" required>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-2 form-inline">
                            <label for="exampleInputEmail1">Date Of Birth</label></div>
                        <div class="col-md-4 form-inline">
                            <input type="date" class="form-control" id="dob" value="<?php echo $donor1['donorDOB']; ?>" name="donorDOB" required>
                        </div>
                        <div class="col-md-2 form-inline">
                            <label for="exampleInputEmail1">Height</label></div>
                        <div class="col-md-4 form-inline">
                            <input type="double" class="form-control" id="height" value="<?php echo $donor1['donorHeight']; ?>" name="donorHeight" required>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-2 form-inline">
                            <label>Blood Group :</label></td>
                        </div>

                        <div class="col-md-4 form-inline">
                            <select name="donorBloodGroup" data-error='Please enter Blood Group' >
                                <option><?php echo $donor1['donorBloodGroup']; ?></option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>O+</option>
                                <option>O-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                            </select>

                        </div>

                        <div class="col-md-2 form-inline">
                            <label>Available Times</label><br></div>
                        <div class="col-md-4 form-inline">
                            <input type="radio" class="availableTimes" value="weekday" name="donorAvailable"><label for="weekday" class="light">Week day</label><br>
                            <input type="radio" class="availableTimes" value="weekend" name="donorAvailable"><label for="weekend" class="light">week end</label><br>
                            <input type="radio" class="availableTimes" value="anyday" name="donorAvailable"><label for="anyday" class="light">Any day</label>

                        </div>
                    </div>
                </div>

                <input type="submit" value="Change" style=" border-radius: 10px; background: #336699; padding: 10px;">

                <!-- <div style="border: 1px solid white ; padding: 15px; border-radius:10px; margin-bottom:5px; width: 100px; background: #336699;">
            <a href="<?php echo base_url()?>/Donors/update_donor/<?php echo $donor1['donorId']; ?>" style="text-decoration: none;"><font style="color: black;"><center>Change</center></font></a>
          </div> -->
                <div style=" padding: 20px; margin-left: 650px; margin-top: -40px; margin-bottom:5px; width: 100px; ">
                    <a href="<?php echo base_url()?>/Donors/donor_profile/<?php echo $donor1['donorId']; ?>" style="text-decoration: none;"><font style="color: blue;"><center><<-Previous</center></font></a>
                </div>
        </div>

        <?php } ?>
        </form>
        <?php echo form_close(); ?>
    </div>

    </form>

</div>
</div>
</div>
<hr>
<!--</body>-->
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
        width: 200px;
        background: green;
    }


</style>
<!--</html>-->