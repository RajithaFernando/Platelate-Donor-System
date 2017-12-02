<?php //include 'partial/header.php' ?>
<!-- testing -->
    <div class = "col-md-6 col-md-offset-3">

<!--        <h1>Donor Registration</h1>-->

        <?php if($this->session->flashdata('msg')){
            echo "<h3>".$this->session->flashdata('msg')."</h3>";
        } ?>

        <hr>
        <?php echo validation_errors(); ?>
        <?php echo form_open('donor/registerDonor') ?>

        <h2><b><?= $title; ?></b></h2>

        <div class="form-group">
            <label for="exampleInputEmail1">Donor Id</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Donor Id" name="donorid">
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="donorFname">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Middle Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Middle Name" name="donorMname">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name" name="donorLname">
        </div>
        <div class="form-group">
            <label>NIC</label>
            <input type="radio" onclick="javascript:nic();" name="nic" value="" id="oldnic" ><label for="oldnic">Old NIC</label>
            <input type="radio" onclick="javascript:nic();" name="nic" value="" id="newnic"><label for="newnic">New NIC</label>
        </div>
        
        <div class="form-group" id="magu1" style="display:none;">
            <label for="exampleInputEmail1">Old NIC</label>
            <input type="text" class="form-control" id="onic" placeholder="Old NIC" name="donorOnic">
        </div> 

        <div class="form-group" id="magu2" style="display:none;">
            <label for="exampleInputEmail1">New NIC</label>
            <input type="text" class="form-control" id="nnic" placeholder="New NIC" name="donorNnic">
        </div>
        <div class="form-group">
            <label>Gender</label>
            <input type="radio" class="gender" value="Male" name="gender"><label for="Male" class="light">Male</label>
            <input type="radio" class="gender" value="Female" name="gender"><label for="Female" class="light">Female</label>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="address" class="form-control" id="exampleInputEmail1" placeholder="Address" name="donorAddress">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Distance</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Distance" name="donorDistance">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email Address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address" name="donorEmail">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Date Of Birth</label>
            <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Date Of Birth" name="donorDOB">
        </div>
        
        <div class="form-group">
        <label>Blood Group</label></td>
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
        <div class="form-group">
            <label for="exampleInputEmail1">Height</label>
            <input type="double" class="form-control" id="exampleInputEmail1" placeholder="Height" name="donorHeight">
        </div>



        <div class="form-group">
            <label>Available Times</label>
            <input type="radio" class="availableTimes" value="weekday" name="donorAvailable"><label for="weekday" class="light">Week day</label>
            <input type="radio" class="availableTimes" value="weekend" name="donorAvailable"><label for="weekend" class="light">week end</label>
            <input type="radio" class="availableTimes" value="anyday" name="donorAvailable"><label for="anyday" class="light">Any day</label>

        </div>


        <button type="submit" class="btn btn-default">Submit</button>

        <?php echo form_close(); ?>

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