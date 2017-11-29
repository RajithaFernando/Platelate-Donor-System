<!--details regarding donor selected-->
			<!--form start-->
			<!--?php $js= "onclick='status()'"; ?-->
			<!--?php echo validation_errors(); ?-->
			
			
			<div class='details' >
				
				<div>
	        		<label class="labelone">Donor ID</label>
	        		<input type="text" class="txtone" id="donor_id" name='donorID' >
	        	</div>
				<div>
	        		<label class="labelone">Donor Name</label>
	        		<input type="text" class="txtone" id="donor_name" name='donorfullname' >
	    		</div>
	    		<div>
	        		<label class="labelone">Blood group</label>
	       			<input type="text" class="txtone" id="blood_group" name='donorblood' >
	    		</div>
	    		<div>	
	        		<label class="labelone">Gender</label>
	        		<input type="text" class="txtone" id="gender" name='gender' >	
				</div>
	    		<div class="radiobtn">
	        		<label for="ApprovedCheck">Approved</label>
	        		<input type="radio" onclick="javascript:status();" name="status" id="ApprovedCheck">
	        		<label for="PdefferCheck">Permanent deffer</label>
	        		<input type="radio" onclick="javascript:status();" name="status" id="PdefferCheck">
	        		<label for="TdefferCheck">Temporary deffer</label>
	        		<input type="radio" onclick="javascript:status();" name="status" id="TdefferCheck">
	    		</div> 

	    		<div id="ifdeffer1" style="display:none;vertical-align: middle;">
					<label for="textarea" class="labelone" style="vertical-align: middle;">Deffer Reason</label>
	 				<textarea  class="txtone" cols="80" rows="3" name='defer_reason' id='deffer'></textarea>
	 			</div>

	    		<div id="ifdeffer2" style="display:none;vertical-align: middle;">
	        		<label for="textarea" class="labelone" style="vertical-align: middle;">Deffer Reason</label>
	        		<textarea class="txtone" cols="80" rows="3"  name='defer_reason' id='deffer'></textarea> 
	    		</div> 

	    		<div id='iftdeffer' style="display: none;">
	        		<label class="labelone">Next eligible date</label>
	        		<input type="date" class="txtone" name='donorEligibleDate' id='deffer'>    
	        
	    		</div> 
    		</div>

    		<div class="button">
    			<button type="cancel" name="Cancel" id="cancel" >Cancel</button>
    			<button type="submit" name="submit" id="submit" >Continue</button><br>
    		</div>  
    		</form>

    	</div>

    	
			
	
		<div class="right" >
		<!--container for status null donors-->
			<div class="Reg_donors_container"> 
				<!--title-->			
				<div class="Reg_donors">
					Donors Registered for Donation
				</div>
				<!--divs(blocks) where donor name and id is shown-->
				
				<?php foreach ($registered_donors as $registered_donors_list ) : ?>
					<button class="donor_box" onclick="javascript:load_donor_details();" style="width: 100%; display: block;">
						
						<span class="id"><?php echo $registered_donors_list['donorId']; ?></span>
						<span class='name'><?php echo $registered_donors_list['donorFname']." ".$registered_donors_list['donorLname']; ?></span>
					</button>
				<?php endforeach; ?>
			</div>	
				<div class="recent_approvals">
					<h3>Recent Approvals</h3>
					<div></div>
				</div >
				<div class="recent_disapprovals">
					<h3>Recent Disapprovals</h3>
					<div></div>
				</div>	
		</div>
	
	</div>
			



	<script type="text/javascript">
		
	    function status(){
     if (document.getElementById('ApprovedCheck').checked) {
        document.getElementById('ifdeffer1').style.display = 'none';
        document.getElementById('iftdeffer').style.display = 'none';
        document.getElementById('ifdeffer2').style.display = 'none';
       
        }
    else if (document.getElementById('PdefferCheck').checked) {
    	document.getElementById('ifdeffer1').style.display = 'block';
    	document.getElementById('iftdeffer').style.display = 'none';
        document.getElementById('ifdeffer2').style.display = 'none';

        }
    else {
    	document.getElementById('ifdeffer2').style.display = 'block';
    	document.getElementById('iftdeffer').style.display = 'block';
        document.getElementById('ifdeffer1').style.display = 'none';
	   }
    }

    function load_donor_details(){
        
    }
	
	</script>
	
		
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
	
	

</body>
</html>                                          