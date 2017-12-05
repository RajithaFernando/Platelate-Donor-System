<?php //include 'partial/header.php' ?>
    <!-- testing -->
    <div class = "col-md-12" style="border-style: ridge;">

        <!--        <h1>Donor Registration</h1>-->

        <?php if($this->session->flashdata('msg')){
            echo "<h3>".$this->session->flashdata('msg')."</h3>";
        } ?>

        <hr>
        <?php echo validation_errors(); ?>
        <?php echo form_open('Donors/registerDonor') ?>

        <form METHOD="post" data-toggle="validator" role="form" action="<?php echo base_url()?>/Donors/registerDonor" >
            <!--         <?php //echo form_open('donor/donor_registration') ?>
 -->    <div class="form-group" style="text-align: center;">
                <h2><b><?= $title; ?></b></h2>
            </div>




            <div class="form-group">
                <div class="form-row ">

                    <div class="col-md-2 form-inline">
                        <label for="donorid" class="control-label">Donor Id :</label>
                    </div>

                    <div class="col-md-4 form-inline">
                        <input type="text" class="form-control" id="donorid" placeholder="Donor Id" name="donorid" data-error="THIS MUST AUTO INCREMENT" required>
                        <div class="help-block with-errors"></div>
                    </div>



                    <div class="col-md-2 form-inline>
            <label for="donorFname" class="control-label">First Name :</label>
                </div>

                <div class="col-md-4 form-inline">
                    <input type="text" class="form-control" id="donorFname" placeholder="First Name" name="donorFname" data-error="please enter First Name" required>
                    <div class="help-block with-errors"></div>
                </div>

            </div>
    </div>


    <div class="form-group">
        <div class="form-row">

            <div class="col-md-2 form-inline">
                <label for="donorMname" class="control-label">Middle Name :</label>
            </div>
            <div class="col-md-4 form-inline">
                <input type="text" class="form-control" id="donorMname" placeholder="Middle Name" name="donorMname" data-error="Please enter Middle Name" required>
                <div class="help-block with-errors"></div>
            </div>



            <div class="col-md-2 form-inline">
                <label for="donorLname" class="control-label">Last Name :</label>
            </div>
            <div class="col-md-4 form-inline">
                <input type="text" class="form-control" id="donorLname" placeholder="Last Name" name="donorLname" data-error='Please enter Last Name' required>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>




    <div class="form-group">
        <div class="form-row">

            <div class="col-md-2 form-inline">
                <label for="donorNIC" class="control-label">NIC :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="text" class="form-control" id="donorNIC" placeholder="NIC" name="donorNIC" data-error='Please enter NIC' required>
                <div class="help-block with-errors"></div>
            </div>



            <div class="col-md-2 form-inline">
                <label>Gender :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="radio" class="c" value="male" name="donorGender"><label for="male" >Male</label>
                <input type="radio" class="c" value="female" name="donorGender"><label for="female">Female</label>

            </div>
        </div>
    </div>



    <div class="form-group">
        <div class="form-row">

            <div class="col-md-2 form-inline">
                <label for="donorLname" class="control-label">Address :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="text" class="form-control" id="donorAddress" placeholder="Address" name="donorAddress" data-error='Please enter Address' required>
                <div class="help-block with-errors"></div>
            </div>





            <div class="col-md-2 form-inline">
                <label for="donorDistance">Distance :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Distance" name="donorDistance">
            </div>
        </div>
    </div>





    <div class="form-group">
        <div class="form-row">
            <div class="col-md-2 form-inline">
                <label for="donorEmail">Email Address :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="email" class="form-control" id="donorEmail" placeholder="Email Address" name="donorEmail">
            </div>




            <div class="col-md-2 form-inline">
                <label for="donorDOB">Date Of Birth :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="date" class="form-control" id="donorDOB" placeholder="Date Of Birth" name="donorDOB">
            </div>
        </div>
    </div>



    <div class="form-group">
        <div class="form-row">

            <div class="col-md-2 form-inline">
                <label>Blood Group :</label></td>
            </div>

            <div class="col-md-4 form-inline">
                <select name="donorBloodGroup" >
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
                <label for="donorHeight">Height :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="double" class="form-control" id="donorHeight" placeholder="Height" name="donorHeight">
            </div>
        </div>
    </div>



    <div class="form-group">
        <div class="form-row">

            <div class="col-md-2 form-inline">
                <label>Available Times :</label>
            </div>

            <div class="col-md-0 form-inline">
                <br>
                <input type="radio" class="availableTimes" value="weekday" name="donorAvailable"><label for="weekday" class="light">Week day</label>
                <br>
                <input type="radio" class="availableTimes" value="weekend" name="donorAvailable"><label for="weekend" class="light">week end</label>
                <br>
                <input type="radio" class="availableTimes" value="anyday" name="donorAvailable"><label for="anyday" class="light">Any day</label>

            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-2 form-inline">
            <button type="submit" class="btn btn-primary btn-lg" style="border-radius: 15px">Submit</button>
        </div>

        <div class="col-md-10 form-inline">
            <button type="reset" class="btn btn-primary btn-lg" style="background: red; border-radius: 15px;">Cancel</button>
        </div>
    </div>





<?php echo form_close(); ?>
    </form>

    </div>

    <script type="text/javascript">

        function nic(){
            if (document.getElementById('oldnic').checked) {
                document.getElementById('magu2').style.display = 'block';
                document.getElementById('magu1').style.display = 'none';
            }
            else {
                document.getElementById('magu2').style.display = 'none';
                document.getElementById('magu1').style.display = 'block';
            }
        }


    </script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>



<?php //include 'partial/footer.php' ?>