<!-- <div id="content"> -->

<?php echo validation_errors();?>
<?php echo form_open('donation/add_donation'); ?>

<div class="col-md-12" style="border-style: ridge;">
<div class="form-group" style="text-align: center;">
<h2><b><?= $title; ?></b></h2>
</div>
<div class="col-md-12" >
    
    
    <div class="form-group">
    <div class="form-row">
    <div class="col-md-6 form form-inline">
        <label>Donor ID:</label>
    
        <input class="form-control" name="donationId" >
    </div>

    <div class="col-md-6 form-inline">
        <label>Donation Date:</label>
        <input type="date" class="form-control" name="donationDate">
         </div>
    </div>

    </div>
    

   
    <div class="form-group">
      <div class="form-row">
       <div class="col-md-6">
        <label>Donation Start Time:</label>
        <input type="time" id="donationStartTime" value="00:00">
       </div>
       <div class="col-md-6">
        <label>Donation End Time:</label>
        <input type="time" id="donationEndTime" value="00:00">
       </div>

      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6 form-inline">
            <label>Donation WBC count:</label>
            <input type="text" class="form-control" name="donationWBCCount" >10<sup>3</sup>/µL
        </div>
        <div class=" form-inline col-md-6 ">
            <label>Donation Hemoglobin count:</label>
            <div class="form-inline">
            <input type="text" class="form-control" name="donationHemoCount" >10<sup>3</sup>/µL
            </div>

        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6 form-inline ">
            <label>Donation Platelet count:</label>
            
            <input type="text" class="form-control" name="donationPlateletCount" >10<sup>3</sup>/µL
            
        </div>
        <div class="col-md-6 form-inline">
            <label>No of unit collected:</label>
            <input type="text" class="form-control" name="DonationNoOfUnitCollected" >
        </div>

      </div>
    </div>
    
    <div class="form-group">
     <div class="form-row">
       <div class="col-md-6">
        <label>Machine Kit Serial No:</label>
        <input type="text" class="form-control" name="MachineKitSerialNo" >
       </div>
     
       <div class="col-md-6">
            <label>Machine Kit DOE:</label>
            <input type="date" class="form-control" name="MachineKitDOE" >
        </div>

     </div>
    </div>
    <div class="form-group">
     <div class="form-row">
       <div class="col-md-6 form-inline">

        <label>Weight of donor:</label>
        <input type="text" class="form-control" name="donorWeight" maxlength="3" size="4">    Kg

       </div>
      
        <div class="col-md-6">
            <label>Machine No:</label></td>
            <select name="machineNo" >
                <option>Hemonetics</option>
                <option>Amicus</option>
                <option>Spectra Optia</option>
                
            </select>
        </div>

      </div>
    </div>

    
    <!-- <div class="form-group">
        <label >Donation PCV:</label></td>
        <input type="text" class="form-control" name="donationPCV" ></td>
    </div>
 -->
    <!-- <div class="btn">
        <input type="submit" value="Submit" class="btn"/>
        <input type="reset" value="Cancel" class="btn"/> </div>
    </div>
     -->
<<<<<<< HEAD

    <div class="form-row">
      <div class="col-md-6">
        <button type="submit" class="btn btn-primary btn-block" name="">Submit</button>
      </div>

      <div class="col-md-6"> 

        <button type="reset" class="btn btn-primary btn-block" name="">Cancel</button>

      </div>
    </div>




</div >
</div>
<?php form_close();?>