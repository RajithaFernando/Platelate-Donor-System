<!-- <div id="content"> -->
<?php echo validation_errors();?>
<?php echo form_open('donation/add_donation'); ?>

<!-- <?php //echo form_open('donation/add_donation'); ?> -->
<form METHOD="post" data-toggle="validator" role="form" action="<?php echo base_url()?>/donation/add_donation">
<div class="col-md-6 col-md-offset-3">
    <h2><b><?= $title; ?></b></h2>

    <div class="form-group">
        <label>Donation ID:</label>
        <label class="control-label" for="donationId">Donation ID:</label>
        <input class="form-control" name="donationId" >
    </div>
    

    <div class="form-group">
        <label>Donation Date:</label>
        <input type="date" class="form-control" name="donationDate">
        <label class="control-label" for="donationDate">Donation Date:</label>
        <input type="date" class="form-control" data-error="Please enter Donation Date" id="donationDate" name="donationDate" required>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <label>Donation Start Time:</label>
        <label class="control-label" for="donationStartT">Donation Start Time:</label>
        <input type="time" id="donationStartTime" value="00:00">
    </div>
    <div class="form-group">
        <label>Donation End Time:</label>
        <input type="time" id="donationEndTime" value="00:00">
    </div>

    <div class="form-group">
        <label>Donation WBC count:</label>
        <input type="text" class="form-control" name="donationWBCCount" >mcL
        <label class="control-label" for="donationWBCCount">Donation WBC count:</label>
        <input type="text" class="form-control" data-error="Please enter a valid WBC count" id="donationWBCCount" name="donationWBCCount"   required>   10<sup>3</sup> /µL
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group">
        <label>Donation Hemoglobin count:</label>
        <input type="text" class="form-control" name="donationHemoCount" >mcL
        <label class="control-label" for="donationHemoCount">Donation Hemoglobin count:</label>
        <input type="number" step="any" class="form-control" data-error="Please enter Hemoglobin count" id="donationHemoCount" name="donationHemoCount" min="0" max='99.99' required>10<sup>3</sup> /µL
        <div class="help-block with-errors"></div>
       
    </div>
    <div class="form-group">
        <label>Donation Platelet count:</label>
        <input type="text" class="form-control" name="donationPlateletCount" >mcL
        <label class="control-label" for="donationPlateletCount">Donation Platelet count:</label>
        <input type="number" step="any" class="form-control" data-error="Please enter Platelet count" id="donationPlateletCount" name="donationPlateletCount" min="0" max='999.99' required="">10<sup>3</sup> /µL
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group">
        <label>No of unit collected:</label>
        <input type="text" class="form-control" name="DonationNoOfUnitCollected" >
        <label class="control-label" for="DonationNoOfUnitCollected">No of unit collected:</label>
        <input type="number" step="any" min="0" class="form-control" data-error="Please enter number of units collected" id="DonationNoOfUnitCollected" name="DonationNoOfUnitCollected" data-error="Please enter Platelet count" required >
        <div class="help-block with-errors"></div>
    </div>
    
    <div class="form-group">
        <label>Donor ID:</label>
        <input type="text" class="form-control" name="donorId" >
        <label class="control-label" for="donorId">Donor ID:</label>
        <input type="text" class="form-control" data-error="Please enter donor ID" id="donorId" name="donorId" required="" >
        <div class="help-block with-errors"></div>
    </div>
    
    <div class="form-group">
        <label>Machine Kit Serial No:</label>
        <input type="text" class="form-control" name="MachineKitSerialNo" >
        <label class="control-label" for="MachineKitSerialNo">Machine Kit Serial No:</label>
        <input type="text" class="form-control" data-error="Please enter Machine Kit number" id="MachineKitSerialNo" name="MachineKitSerialNo" required >
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group">
        <label>Machine Kit DOE:</label>
        <label class="control-label" for="donationPlateletCount">Machine Kit DOE:</label>
        <input type="date" class="form-control" name="MachineKitDOE" >
    </div>
    <div class="form-group">
    <!-- <div class="form-group">
        <label>Height of donor:</label>
        <input type="text" class="form-control" name="donorHeight" maxlength="3" size="4">    cm
    </div>
    </div> -->
    <div class="form-group">
        <label>Weight of donor:</label>
        <input type="text" class="form-control" name="donorWeight" maxlength="3" size="4">    Kg
        <label class="control-label" for="donorWeight">Weight of donor:</label>
        <input type="text" class="form-control" data-error="Please enter Weight of Donor" id="donorWeight" name="donorWeight" maxlength="3" size="4" required>    Kg
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <label>Machine No:</label></td>
        <select name="machineNo" >
            <option>Hemonetics</option>
            <option>Amicus</option>
            <option>Spectra Optia</option>
            
        </select>

    </div>
    <!-- <div class="form-group">
   <!--  <div class="form-group">
        <label >Donation PCV:</label></td>
        <input type="text" class="form-control" name="donationPCV" ></td>
    </div>
 -->
    </div> -->

    <!-- <div class="btn">
        <input type="submit" value="Submit" class="btn"/>
        <input type="reset" value="Cancel" class="btn"/> </div>
    </div>
     -->
    <button style="margin-left:10px;" type="submit" class="btn btn-primary " name="">Cancel</button>

    <button style="margin-left:250px;" type="reset" class="btn btn-primary " name="">Submit</button>

</div>
<?php form_close();?>