<!-- <div id="content"> -->


<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/donorapprovals/load_donors">Current Donation List</a>
    </li>

    <li class="breadcrumb-item active">Donation</li>
</ol>
<!-- divide form into two colomns -->
<div class=" col-md-12 " style="padding-left: 20px; padding-bottom: 20px; padding-right: 0px; padding-top: 20px;">


    <div class="row">

        <div class="card col-md-7" style="padding-top: 20px; background-color: #dee2e6;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px;
        transition: 0.3s;">
            
<!--            <div class="well-lg">-->

                    <?php echo validation_errors(); ?>
                    <?php echo form_open('donation/add_donation'); ?>


                <div class="form-group"  style="text-align: center;">
                    <a type="button" class="btn btn-danger pull-right" style="border-radius: 15px;" href="<?php echo base_url()?>donor_waitinglist/load_donors"><i class="fa fa-reply" aria-hidden="true"></i></a>
                    <h4><b>Donation</b></h4>
                    <hr>

                </div>

<!--                <div class="col-md-12" >-->


                    <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-2 form-inline">
                                <label for="donorId" class="control-label">Donor ID</label>
                        </div>

                        <div class="col-md-5 form-inline">
                            <input type="text" class="form-control" id="donorId" value="<?php echo $donor['donorId']?>" name="donorId" readonly>
                        </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-2 form-inline">
                                <label for="donorNIC" class="control-label">Donor NIC</label>
                        </div>

                        <div class="col-md-5 form-inline">
                            <input type="text" class="form-control" id="donornic"  name="donorNIC" value="<?php echo $donor['donorNIC']?>" readonly>
                        </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-2 form-inline">
                                <label for="donorName" class="control-label">Donor Name</label>
                        </div>

                        <div class="col-md-5 form-inline">
                            <input type="text" class="form-control" id="donorname"  name="donorName" value="<?php echo $donor['donorFname'].$donor['donorLname']?>"readonly>
                        </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-2 form-inline">
                                <label for="donorBloodGroup" class="control-label">Blood Group</label>
                        </div>

                        <div class="col-md-5 form-inline">
                            <input type="text" class="form-control" id="donorbloodgroup"  name="donorBloodGroup" value="<?php echo $donor['donorBloodGroup']?>" readonly>
                        </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-row ">

                        <div class="col-md-2 form-inline">
                                <label for="donationDate" class="control-lable">Donation Date:</label>
                        </div>

                        <div class="col-md-5 form-inline">
                                <input type="date" class="form-control" id="donationDate"  name="donationDate" data-error="Please Enter Donation Date" required>
                        </div>

                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-2 form-inline">
                                <label for="donationStartTime" class="control-label">Donation Start Time:</label>
                        </div>
                            
                        <div class="col-md-5 form-inline">
                                <input type="time" class="form-control" id="donationStartTime" value="00:00" name="donationStartTime" data-error="Please Enter Donation Start Time" required>
                        </div>

                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-2 form-inline">
                                <label for="donationEndTime" class="control-label">Donation End Time:</label>
                        </div>
                        
                        <div class="col-md-5 form-inline">
                                <input type="time" class="form-control" id="donationEndTime" value="00:00" name="donationEndTime" data-error="Please Enter Donation End Time" required>
                        </div>

                    </div>
                    </div>



                    <div class="form-group">
                    <div class="form-row">

                            <div class="col-md-2 form-inline">
                                <label for="donationWBCCount" class="control-label">Donation WBC count:</label>
                            </div>

                            <div class="col-md-5 form-inline">
                                <input type="text" class="form-control" id="donationWBCCount" placeholder="WBC Count" name="donationWBCCount" data-error="Please Enter Donation WBC Count" required >10<sup>3</sup>/µL
                            </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-row">

                            <div class=" form-inline col-md-2 ">
                                <label for="donationHemoCount" class="control-label">Donation Hemoglobin count:</label>
                            </div>
                            
                            <div class="form-inline col-md-5">
                                <input type="text" class="form-control" id="donationHemoCount" placeholder="Hemoglobin count" name="donationHemoCount" data-error="Please Enter Donation Hemoglobic Count" required>10<sup>3</sup>/µL
                            </div>

                    </div>
                    </div>



                    <div class="form-group">
                    <div class="form-row">

                            <div class="col-md-2 form-inline ">
                                <label for="donationPlatelateCount" class="control-label">Donation Platelet count:</label>
                            </div>
                            
                            <div class="col-md-5 form-inline">
                                <input type="text" class="form-control" id="donationPlatelateCount" placeholder= "Platelet Count" name="donationPlatelateCount" data-error="Please Enter Donation Platelet Count" required >10<sup>3</sup>/µL
                            </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-row">

                            <div class="col-md-2 form-inline">
                                <label for="DonationNoOfUnitCollected" class="control-label">No of unit collected:</label>
                            </div>

                            <div class="col-md-5 form-inline">
                                <input type="text" class="form-control" id="DonationNoOfUnitCollected" placeholder=" No Of Units" name="DonationNoOfUnitCollected" data-error="Please Enter No of units collected" required >
                            </div>

                    </div>
                    </div>


                    <div class="form-group">
                    <div class="form-row">

                            <div class="col-md-2 form-inline">
                                <label for="MachineKitSerialNo" class="control-label">Machine Kit Serial No:</label>
                            </div>
                            
                            <div class="col-md-5 form-inline">
                                <input type="text" class="form-control" id="MachineKitSerialNo" placeholder="Kit No" name="MachineKitSerialNo" data-error="Please Enter Machine Kit Serial No" required  >
                            </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-row">

                            <div class="col-md-2 form-inline" >
                                <label for="MachineKitDOE" class="control-label">Machine Kit DOE:</label>
                            </div>
                            
                            <div class="col-md-4 form-inline">
                                <input type="date" class="form-control" id="MachineKitDOE" name="MachineKitDOE" data-error="Please Enter Machine Kit DOE" required >
                            </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-row">

                            <div class="col-md-2 form-inline">
                                    <label for="donorWeight" class="control-label">Weight of donor:</label>
                            </div>
                            
                            <div class="col-md-5 form-inline">
                                <input type="text" class="form-control" id="donorWeight" placeholder="Weight" name="donorWeight" maxlength="3" size="4" data-error="Please Enter Donor's weight" required>    Kg
                            </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-row">

                            <div class="col-md-2 form-inline">
                                <label for="machineName" class="control-label">Machine Name:</label>
                            </div>
                            
                            <div class="col-md-4 form-inline">
                                <select name="category_id" class="form-control">
                                    <?php foreach ($machines as $machine): ?>
                                        <option value="<?php echo $machine['machine_name'];?>"><?php echo $machine['machine_name']?></option>
                                    <?php endforeach;?>
                                </select>

                            </div>

                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-row">
                    
                            <div class="col-md-2 form-inline">
                                <label for="donorHeight" class="control-label">Height of donor:</label>
                            </div>
                            
                            <div class="col-md-5 form-inline">
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

                    <div class="form-group">
                    <div class="form-row">

                            <div class="col-md-2 form-inline">
                                  <label for="remarks" class="control-label">Remarks :</label>
                            </div>
                    
                            <div class="col-md-4 form-inline">
                               <textarea  class="form-control" cols="40" rows="3" name='donationRemarks' placeholder="eg. ease of venous access" ></textarea>
                            </div>
                            
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-2 form-inline">

                            <button type="reset" class="btn btn-primary btn-lg" name="" style=" background: red;">Reset</button>
                        </div>

                        <div class="col-md-10 pull-right">
                            <button type="submit" class="btn btn-success btn-lg" name="" >Submit</button>
                        </div>
                    </div>
                    </div>

<!--                 </div >-->

                 <?php form_close();?>
            </div>

<!--        </div>-->

                <!--the lsit of donors waiting to donate(the right side part)-->
        <div class="col-md-5" style="padding-top: 20px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; background-color: #EAF2F5;
        transition: 0.3s;" >

                     <div  class="form-group" style="text-align: center; ">
                    <h4><b>Donation</b></h4>
                    <hr>
                </div>

                <table class="table table-hover table-responsive table-striped table-bordered" >

                    <tr style="background-color: #307D7E; color: white;">
                        <th >Donor Id</th>
                        <th>NIC</th>
                        <th >Name</th>
                        <th >Sent to Donation</th>
                    </tr>

                    <?php foreach ($sent_to_donate_donors as $sent_to_donate_donors_list ) :?>

                        <tr>
                            <td>   <?php echo $sent_to_donate_donors_list ['donorId']; ?>  </td>

                            <td>  <?php echo $sent_to_donate_donors_list ['donorNIC']; ?>  </td>

                            <td>  <?php echo $sent_to_donate_donors_list ['donorFname']." ".$sent_to_donate_donors_list ['donorLname']; ?>  </td>

                            <th style="text-align: center;"> <a href="<?php echo site_url('/Donor_waitinglist/sent_to_donation/'.$sent_to_donate_donors_list['donorId'])?>"><button type="button" name="select" class="btn btn-md btn-info" style="background-color: #81D8D0; color: white;" ><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Check</button></a></th>
                        </tr>
                        <?php endforeach; ?>
                </table>

        </div>

            <!--<div class="card center" style="text-align: center; padding:10px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
                <div class="pagination">
                    <?php /*echo $link */?>
                </div>
            </div>-->
    </div>
</div>
