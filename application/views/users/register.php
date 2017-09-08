<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script><!-- jQuery Library-->

<!--validation -->
<?php echo validation_errors();?>
<?php echo form_open('users/register');?>
<div class="col-md-6 col-md-offset-3">
    <h2><b><?= $title; ?></b></h2>
    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name="employee_firstname">
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="employee_lastname">
    </div>
    <div class="form-group">
        <label>Gender</label>
        <input type="radio"  value="male" name="employee_gender" checked>Male
        <input type="radio"  value="female" name="employee_gender">Female
    </div>

    <div class="form-group">
        <label>Telephone No</label>
        <input type="text" class="form-control" name="employee_teleNo">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="employee_email">
    </div>


    <div class="form-group">
        <label>NIC</label>
        <input type="text" class="form-control" name="employee_NIC">
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
           echo form_dropdown('employee_occupation', $employee_occupation, '', 'required="required"'); //validation come to drop down

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
        <input type="text" class="form-control " name="employee_username">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input  type="password" class="form-control" name="employee_password" data-indicator="pwindicator">
    </div>
    <div class="form-group">
        <label>Confirm password</label>
        <input type="password" class="form-control" name="employee_password2">
    </div>
    <button type="submit" class="btn btn-primary btn-block" name="">Submit</button>

</div>
<?php form_close();?>