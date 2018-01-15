<!-- <div id="content"> -->

<?php echo validation_errors();?>
<?php echo form_open('donation/add_donation'); ?>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Donation</li>
</ol>

<!-- divide form into two colomns -->
<div class=" col-md-11" style="margin-left:37px; ">
    <div class="form-group"  style="text-align: center;">
        <h4><b><?= $title; ?></b></h4>
    </div>
    <div class="col-md-12" style="background-color: #F3F3F3; padding: 15px; margin-right:10px; margin-left: 10px;margin-top: 22px; padding-left:20px; padding-bottom: 20px; padding-right: 20px; padding-top: 20px;">

        <div class="form-group">
            <div class="form-row">
                <div class="col-md-2 form-inline">
                    <label for="donorId" class="control-label">Donor ID</label></div>
                <div class="col-md-4 form-inline">
                    <input type="text" class="form-control" id="donorId" placeholder="Ex: MHXXX" name="donorId" data-error="This Must Auto Increment" required ></div>

                <div class="col-md-2 form-inline">
                    <label for="donationDate" class="control-lable">Donation Date:</label></div>
                <div class="col-md-4 form-inline">
                    <input type="date" class="form-control" id="donationDate"  name="donationDate" data-error="Please Enter Donation Date" required>
                </div>

            </div>
        </div>



        <div class="form-group">
            <div class="form-row">
                <div class="col-md-2 form-inline">
                    <label for="donationStartTime" class="control-label">Donation Start Time:</label></div>
                <div class="col-md-4 form-inline">

                    <input type="time" class="form-control" id="donationStartTime" value="00:00" name="donationStartTime" data-error="Please Enter Donation Start Time" required></div>

                <div class="col-md-2 form-inline">
                    <label for="donationEndTime" class="control-label">Donation End Time:</label></div>
                <div class="col-md-4 form-inline">
                    <input type="time" class="form-control" id="donationEndTime" value="00:00" name="donationEndTime" data-error="Please Enter Donation End Time" required></div>

            </div>
        </div>



        <div class="form-group">
            <div class="form-row">
                <div class="col-md-2 form-inline">
                    <label for="donationWBCCount" class="control-label">Donation WBC count:</label></div>
                <div class="col-md-4 form-inline">
                    <input type="text" class="form-control" id="donationWBCCount" placeholder="WBC Count" name="donationWBCCount" data-error="Please Enter Donation WBC Count" required >10<sup>3</sup>/µL
                </div>

                <div class=" form-inline col-md-2 ">
                    <label for="donationHemoCount" class="control-label">Donation Hemoglobin count:</label></div>
                <div class="form-inline col-md-4">
                    <input type="text" class="form-control" id="donationHemoCount" placeholder="Hemoglobin count" name="donationHemoCount" data-error="Please Enter Donation Hemoglobic Count" required>10<sup>3</sup>/µL
                </div>

            </div>
        </div>



        <div class="form-group">
            <div class="form-row">
                <div class="col-md-2 form-inline ">
                    <label for="donationPlatelateCount" class="control-label">Donation Platelet count:</label></div>
                <div class="col-md-4 form-inline">
                    <input type="text" class="form-control" id="donationPlatelateCount" placeholder= "Platelet Count" name="donationPlatelateCount" data-error="Please Enter Donation Platelet Count" required >10<sup>3</sup>/µL
                </div>

                <div class="col-md-2 form-inline">
                    <label for="DonationNoOfUnitCollected" class="control-label">No of unit collected:</label></div>
                <div class="col-md-4 form-inline">
                    <input type="text" class="form-control" id="DonationNoOfUnitCollected" placeholder=" No Of Units" name="DonationNoOfUnitCollected" data-error="Please Enter No of units collected" required >
                </div>

            </div>
        </div>


        <div class="form-group">
            <div class="form-row">
                <div class="col-md-2 form-inline">
                    <label for="MachineKitSerialNo" class="control-label">Machine Kit Serial No:</label></div>
                <div class="col-md-4 form-inline">
                    <input type="text" class="form-control" id="MachineKitSerialNo" placeholder="Kit No" name="MachineKitSerialNo" data-error="Please Enter Machine Kit Serial No" required  >
                </div>
                <div class="col-md-2 form-inline" >
                    <label for="MachineKitDOE" class="control-label">Machine Kit DOE:</label></div>
                <div class="col-md-4 form-inline">
                    <input type="date" class="form-control" id="MachineKitDOE" name="MachineKitDOE" data-error="Please Enter Machine Kit DOE" required >
                </div>
            </div>
        </div>



        <div class="form-group">
            <div class="form-row">
                <div class="col-md-2 form-inline">

                    <label for="donorWeight" class="control-label">Weight of donor:</label></div>
                <div class="col-md-4 form-inline">
                    <input type="text" class="form-control" id="donorWeight" placeholder="Weight" name="donorWeight" maxlength="3" size="4" data-error="Please Enter Donor's weight" required>    Kg
                </div>
                <div class="col-md-2 form-inline">
                    <label for="machineName" class="control-label">Machine Name:</label></td></div>
                <div class="col-md-4 form-inline">
                    <select name="machineName" >
                        <option></option>
                        <option>Hemonetics</option>
                        <option>Amicus</option>
                        <option>Spectra Optia</option>

                    </select>
                </div>

            </div>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-md-2 form-inline">

                    <label for="donorHeight" class="control-label">Height of donor:</label></div>
                <div class="col-md-4 form-inline">
                    <input type="text" class="form-control" id="donorHeight" placeholder="Height" name="donorHeight" maxlength="3" size="4" data-error="Please Enter Donor's height" required>    cm
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

        <div class="form-row">
            <div class="col-md-10 pull-right">
                <button type="reset" class="btn btn-primary" name="" style=" border-radius: 15px; background: red;">Cancel</button>

            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-success" name="" style=" border-radius: 15px;">Submit</button>


            </div>
        </div>



    </div >
</div>
<?php form_close();?>