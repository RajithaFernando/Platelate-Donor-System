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
            <label for="exampleInputEmail1">NIC Number</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NIC Number" name="donorNIC" maxlength="10||12">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Gender</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Gender" name="donorGender">
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


<?php //include 'partial/footer.php' ?>