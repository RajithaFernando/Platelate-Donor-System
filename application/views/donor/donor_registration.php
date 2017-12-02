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

        <form METHOD="post" data-toggle="validator" role="form" action="<?php echo base_url()?>/donor/registerDonor" >
<!--         <?php //echo form_open('donor/donor_registration') ?>
 -->
        <h2><b><?= $title; ?></b></h2>

        <div class="form-group">
            
            <label for="donorid" class="control-label">Donor Id</label>
            <input type="text" class="form-control" id="donorid" placeholder="Donor Id" name="donorid" data-error="THIS MUST AUTO INCREMENT" required>
        <div class="help-block with-errors"></div>
        </div>


        <div class="form-group">
            
            <label for="donorFname" class="control-label">First Name</label>
            <input type="text" class="form-control" id="donorFname" placeholder="First Name" name="donorFname" data-error="please enter First Name" required>
        <div class="help-block with-errors"></div>   
        </div>


        <div class="form-group">
          
            
            <label for="donorMname" class="control-label">Middle Name</label>
            <input type="text" class="form-control" id="donorMname" placeholder="Middle Name" name="donorMname" data-error="Please enter Middle Name" required>
        <div class="help-block with-errors"></div>  
        </div>


        <div class="form-group">
           
           
            <label for="donorLname" class="control-label">Last Name</label>
            <input type="text" class="form-control" id="donorLname" placeholder="Last Name" name="donorLname" data-error='Please enter Last Name' required>
        <div class="help-block with-errors"></div>  
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
            
           
            
           <label class="control-label">Gender</label>
        <input type="radio"  value="male" name="employee_gender" required>Male
        <input type="radio"  value="female" name="employee_gender" required>Female
        <div class="help-block with-errors"></div>  
        </div>
        

        <div class="form-group">
                    
                <label for="donorAddress" class="control-label">Address</label><br>
            <div style="display: table; width:1000px">    
                <div style="display: table-cell;">
                <label >Current</label>
                <input type="address" class="form-control" id="donorAddress" placeholder="Address" name="donorAddress" data-error="Please enter your current address and city" required>
                <input type="address" class="form-control" id="donorAddress" placeholder="Address,
                " name="donorAddress" data-error="Please enter your current address and city" required>
                <input type="address" class="form-control" id="donorAddress" placeholder="Address" name="donorAddress">
                <input type="address" class="form-control" id="donorAddress" placeholder="city eg.Bambalapitiya" name="donorAddress" data-error="Please enter the city" required>
            <div class="help-block with-errors"></div> 
                </div>
            
                <div style="display: table-cell;">
                <label>Home</label>
                <input type="address" class="form-control" id="donorAddress" placeholder="Address" name="donorAddress">
                <input type="address" class="form-control" id="donorAddress" placeholder="Address
                " name="donorAddress">
                <input type="address" class="form-control" id="donorAddress" placeholder="Address" name="donorAddress">
                <input type="address" class="form-control" id="donorAddress" placeholder="city" name="donorAddress" >
                </div>
            
                <div style="display: table-cell;">
                <label >Office</label>
                <input type="address" class="form-control" id="donorAddress" placeholder="Address" name="donorAddress">
                <input type="address" class="form-control" id="donorAddress" placeholder="Address" name="donorAddress">
                <input type="address" class="form-control" id="donorAddress" placeholder="Address" name="donorAddress">
                <input type="address" class="form-control" id="donorAddress" placeholder="city" name="donorAddress">
                </div>
            </div>
        </div>
        <div class="form-group">
            
            <label for="donorDistance">Distance</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Distance" name="donorDistance">
        </div>
        <div class="form-group">
           
    
            <label for="donorEmail">Email Address</label>
            <input type="email" class="form-control" id="donorEmail" placeholder="Email Address" name="donorEmail">
        </div>
        <div class="form-group">
            
            <label for="donorDOB">Date Of Birth</label>
            <input type="date" class="form-control" id="donorDOB" placeholder="Date Of Birth" name="donorDOB">
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
            
            <label for="donorHeight">Height</label>
            <input type="double" class="form-control" id="donorHeight" placeholder="Height" name="donorHeight">
        </div>



        <div class="form-group">
            <label>Available Times</label>
                    <br>
            <input type="radio" class="availableTimes" value="weekday" name="donorAvailable"><label for="weekday" class="light">Week day</label>
                    <br>
            <input type="radio" class="availableTimes" value="weekend" name="donorAvailable"><label for="weekend" class="light">week end</label>
                    <br>
            <input type="radio" class="availableTimes" value="anyday" name="donorAvailable"><label for="anyday" class="light">Any day</label>

        </div>


        
     
        <button type="submit" class="btn btn-primary">Submit</button>

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