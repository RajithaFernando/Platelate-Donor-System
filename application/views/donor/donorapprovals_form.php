<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/donorapprovals/load_donors">Donor Approvals</a>
    </li>

    <li class="breadcrumb-item active">Donor Approvals</li>
</ol>
<div class=" col-md-12 " style=" padding-left:20px; padding-bottom: 20px; padding-right: 0px; padding-top: 20px;">



<div class="row">

		<div class="card col-md-6" style="padding-top: 20px; background-color: #dee2e6;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px;
    transition: 0.3s;">
            <div class="well-lg">
                <?php echo validation_errors(); ?>

			 <?php echo form_open('Donorapprovals/update_new_donor_status_details'); ?>	

			<div class="form-group" style="text-align: center;" >
                <a type="button" href="<?php echo base_url()?>/donorapprovals/load_donors" class="btn btn-danger pull-right" style="border-radius: 15px;"><i class="fa fa-reply" aria-hidden="true"></i></a>

			 		<h4><b><?= $title; ?></b></h4>
                <hr>

            </div>

			<!--area where information of donors registered for the donation on that date is dispalayed-->

			<div class='Donor_details_load_area' style="min-height: 460px; padding-left: 100px;">

				<div class="form-group" >
				<div class="form-row ">
       			
	       			<div class="col-md-2 form-inline">
			        		<label for='donorID' class="control-label">Donor ID :</label>
			        </div>

			        <div class="col-md-6 form-inline">
		        		<input type="text" class="form-control" value="<?php echo $donor['donorId'] ?>" id="donor_id" name='donorID' readonly>
		        	</div>
		        </div>
	        	</div>

	        	<div class="form-group">
	        	<div class="form-row ">
	        	
		        	<div class="col-md-2 form-inline" >
		        		<label for="donorNIC" class="control-label">NIC :</label>
		        		
		        	</div>

		        	<div class="col-md-6 form-inline">
		        		<input type="text" class="form-control" value="<?php echo $donor['donorNIC'] ?>" id="donor_nic" name='donorNIC' readonly>
		        	</div>
		        			
		        </div>
	        	</div>

				<div class="form-group">
				<div class="form-row ">

					<div class="col-md-2 form-inline">
						<label for="donorname " class="control-label">Donor Name :</label>
					</div>

		        	<div class="col-md-6 form-inline">
		        		<input type="text" class="form-control"  value="<?php echo $donor['donorFname'].' '.$donor['donorLname'] ?>" id="donor_name" name='donorname' readonly>
		        	</div>	
	        		
		        </div>
	    		</div >

	    		<div class="form-group">
	    		<div class="form-row ">

	    			<div class="col-md-2 form-inline">
	        			<label for="donorbloodgroup" class="control-label">Blood group :</label>
	        		</div>
	       			<div class="col-md-6 form-inline">
	       				<input type="text" class="form-control" value="<?php echo $donor['donorBloodGroup'] ?>" id="blood_group" name='donorbloodroup' readonly>
	       			</div>

	       		</div>
	    		</div>

	    		<div class="form-group">
	    		<div class="form-row ">

	    			<div class="col-md-2 form-inline">
	    				<label for="gender" class="control-label">Gender :</label>
	    			</div>
	    			<div class="col-md-2 form-inline">
	        			<input type="text" class="form-control" value="<?php echo $donor['donorGender'] ?>" id="gender" name='gender' readonly>	
					</div>

				</div>
				</div>

	    		<div class="form-group">
	    		
		        		<input type="radio" class='c' value="sent_to_donation" onclick="javascript:status();" name="approval" id="ApproveCheck">
		        		<label for="ApproveCheck" class="control-label" required>Approve for Donation</label>
		        	
		        	  	<input type="radio" class="c" value="p_deffer" onclick="javascript:status();" name="approval" id="PermanentdefferCheck" required>
		        		<label for="PermanentdefferCheck">Defer Permanently</label>

		        		<input type="radio" class='c' value="t_deffer" onclick="javascript:status();" name="approval" id="TemporarydefferCheck" required>
		        		<label for="TemporarydefferCheck">Defer Temporarily </label>
		        		<div class="error-handler-help"></div>

		        	
	    		</div> 

	    		<div id="ifdeffertemporary"  class="form-group" style="display:none;">
	    		<div class="form-row ">

		    		<div class="col-md-2 form-inline">	
						<label for="defer_reason" class="control-label">Reason for Deferral :</label>
					</div>
					<div class="col-md-6 form-inline">
		 				<textarea  class="form-control" cols="40" rows="3" name='defer_reason' ></textarea>
		 			</div>

	 			</div>
	 			</div>

	    		<div id="ifdefferpermanent"  class="form-group" style="display:none;">
	    		<div class="form-row ">

	    			<div class="col-md-2 form-inline">
	        			<label for="defer_reason" class="control-label" >  Reason for Deferral :</label>
	        		</div>
	        		<div class="col-md-6 form-inline">
	        			<textarea class="form-control" cols="40" rows="3"  name='defer_reason' ></textarea>
	        		</div> 

	    		</div>
	    		</div> 

	    		<div id='defferdate' style="display:none;" class="form-group">
	    		<div class="form-row ">

	    			<div class="col-md-2 form-inline">
	        			<label for="donorEligibleDate" class="control-label">Next Eligible Date :</label>
	        		</div>
	        		<div class="col-md-6 form-inline">
	        			<input type="date" class="form-control" name='donorEligibleDate'> 
	        		</div>   
	    		</div>
	    		</div>

    		</div>

    		<div class="form-group">
    		<div class="form-row ">

    			<div class="col-md-3 pull-right form-inline">
<!--                    <button type="reset" class="btn btn-danger" style=" border-radius: 15px;">Cancel</button>-->
                </div>

	    		<div class="col-md-5  form-inline">
                    <button type="submit" class="btn btn-success pull-right" style="border-radius: 15px"  >Submit</button>
                </div>
    		</div> 
    		</div> 



    		<?php echo form_close(); ?>
            </div>
    		
    	</div>

<!--    table-->
    <div class="card col-md-5" style="margin-left:10px; padding-top: 20px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px;
    transition: 0.3s;" >

        <div  class="form-group" style="text-align: center;">
            <h4><b>Donor Waiting List</b></h4>
            <hr>
        </div>

        <table class="table table-hover table-responsive table-striped table-bordered">

            <tr>
                <th style="background-color: #c3e6cb; text-align: center;">Donor Id</th>
                <th style="background-color: #c3e6cb; text-align: center;">NIC</th>
                <th style="background-color: #c3e6cb; text-align: center;">Name</th>
                <th style="background-color: #c3e6cb; text-align: center;">Check</th>
            </tr>

            <?php foreach ($registered_donors as $registered_donors_list ) :?>

                <tr>
                    <td>   <?php echo $registered_donors_list['donorId']; ?>  </td>

                    <td>  <?php echo $registered_donors_list['donorNIC']; ?>  </td>

                    <td>  <?php echo $registered_donors_list['donorFname']." ".$registered_donors_list['donorLname']; ?>  </td>

                    <th> <a href="<?php echo site_url('/donorapprovals/'.$registered_donors_list['donorId'])?>"><button type="button" name="select" class="btn .btn-info" style="background-color: #639e0d;" ><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></button></a> </th>
                </tr>
                <?php endforeach; ?>
        </table>
    </div>
</div>
</div>







   
<script type="text/javascript">
		
		    function status(){
	     if (document.getElementById('ApproveCheck').checked) {
	        document.getElementById('ifdeffertemporary').style.display = 'none';
	        document.getElementById('ifdefferpermanent').style.display = 'none';
	        document.getElementById('defferdate').style.display = 'none';
	       
	        }
	    else if (document.getElementById('TemporarydefferCheck').checked) {
	    	document.getElementById('ifdeffertemporary').style.display = 'block';
	    	document.getElementById('ifdefferpermanent').style.display = 'none';
	        document.getElementById('defferdate').style.display = 'block';

	        }
	    else if(document.getElementById('PermanentdefferCheck').checked){
	    	document.getElementById('ifdeffertemporary').style.display = 'none';
	    	document.getElementById('ifdefferpermanent').style.display = 'block';
	        document.getElementById('defferdate').style.display = 'none';
		   }
	    }

</script>

	
		
	
	
	
                                     
