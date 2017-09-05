<!-- <div id="content"> -->
<?php echo validation_errors();?>
<?php echo form_open('donation/add_donation'); ?>

<div class="col-md-6 col-md-offset-3">
    <h2><b><?= $title; ?></b></h2>

    <div class="form-group">
        <label>Donation ID:</label>
        <input class="form-control" name="donationId" >
    </div>

    <div class="form-group">
        <label>Donation Date:</label>
        <input type="date" class="form-control" name="donationDate">
    </div>
    <div class="form-group">
        <label>Donation Start Time:</label>
        <input type="time" id="donationStartTime" value="00:00">
    </div>
    <div class="form-group">
        <label>Donation End Time:</label>
        <input type="time" id="donationEndTime" value="00:00">
    </div>
    <div class="form-group">
        <label>Donation WBC count:</label>
        <input type="text" class="form-control" name="donationWBCCount" >mcL
    </div>
    <div class="form-group">
        <label>Donation Hemoglobin count:</label>
        <input type="text" class="form-control" name="donationHemoCount" >mcL
    </div>
    <div class="form-group">
        <label>Donation Platelet count:</label>
        <input type="text" class="form-control" name="donationPlateletCount" >mcL
    </div>
    <div class="form-group">
        <label>No of unit collected:</label>
        <input type="text" class="form-control" name="DonationNoOfUnitCollected" >
    </div>
    <div class="form-group">
        <label>Donor ID:</label>
        <input type="text" class="form-control" name="donorId" >
    </div>
    <div class="form-group">
        <label>Machine Kit Serial No:</label>
        <input type="text" class="form-control" name="MachineKitSerialNo" >
    </div>
    <div class="form-group">
        <label>Machine Kit DOE:</label>
        <input type="date" class="form-control" name="MachineKitDOE" >
    </div>
    <div class="form-group">
        <label>Height of donor:</label>
        <input type="text" class="form-control" name="donorHeight" maxlength="3" size="4">    cm
    </div>
    <div class="form-group">
        <label>Weight of donor:</label>
        <input type="text" class="form-control" name="donorWeight" maxlength="3" size="4">    Kg
    </div>
    <div class="form-group">
        <label>Machine No:</label></td>
        <select name="machineNo" >
            <option>M1</option>
            <option>M2</option>
            <option>M3</option>
            <option>M4</option>
        </select>

    </div>
    <div class="form-group">
        <label >Donation PCV:</label></td>
        <input type="text" class="form-control" name="donationPCV" ></td>
    </div>

    <!-- <div class="btn">
        <input type="submit" value="Submit" class="btn"/>
        <input type="reset" value="Cancel" class="btn"/> </div>
    </div>
     -->
    <button type="submit" class="btn btn-primary btn-block" name="">Submit</button>

    <button type="reset" class="btn btn-primary btn-block" name="">Cancel</button>

</div>
<?php form_close();?>