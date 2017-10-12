
<!--validation -->
<?php echo validation_errors();?>
<?php //echo form_open('users/register');?>
<form method="post" id="register" action="<?php echo base_url()?>/users/register">
<div class="col-md-6 col-md-offset-3">
    <h2><b><?= $title; ?></b></h2>
    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name="employee_firstname" id="employee_firstname" required>
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="employee_lastname" id="employee_lastname" required>
    </div>
    <div class="form-group">
        <label>Gender</label>
        <input type="radio"  value="male" name="employee_gender" required>Male
        <input type="radio"  value="female" name="employee_gender" required>Female
    </div>

    <div class="form-group">
        <label>Telephone No</label>
        <input type="text" class="form-control" name="employee_teleNo">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="employee_email" id="employee_email" data-error="Bruh, that email address is invalid" required>
        <div class="help-block with-errors"></div>
    </div>


    <div class="form-group">
        <label>NIC</label>
        <input type="text" class="form-control" name="employee_NIC" id="employee_NIC" data-minlength="12" required>
    </div>
   <div class="form-group">
       <?php echo "<p>Occupation: ";
            $employee_occupation = array(
            ''  => 'select occupation',
            'Doctor'  => 'Doctor',
            'Admin'    => 'Admin',
            'Nurse'   => 'Nurse',
            'Machine_operator' => 'Machine_operator',
                'PHI'=>'PHI',
            );
            //echo form_dropdown('employee_occupation', $employee_occupation, '');
           echo form_dropdown('employee_occupation', $employee_occupation, ''); //validation come to drop down

       echo "</p>";?>
        </div>

    <!--<div class="form-group">
        <label>Occupation</label>
        <select id="occupation" name="employee_occupation" selected="None">
            <option value="None">Select Occupation</option>
            <option value="Admin">Admin</option>
            <option value="Doctor">Doctor</option>
            <option value="Nurse">Nurse</option>
            <option value="PHI">PHI</option>
            <option value="Machine_operator">Machine Operator</option>
        </select>
    </div>
    -->
    <div class="form-group has-warning">
        <label>Username</label>
        <input type="text" class="form-control " name="employee_username" required>
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input  type="password" class="form-control" name="employee_password" id="employee_password" data-indicator="pwindicator" required>
    </div>
    <div class="form-group">
        <label>Confirm password</label>
        <input type="password" class="form-control" name="employee_password2" id="employeee_password2" data-match="#employee_password" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
        <div class="help-block with-errors"></div>
    </div>
    <button type="submit" class="btn btn-primary btn-block" name="" >Submit</button>

</div>
</form>
<?php //form_close();?>