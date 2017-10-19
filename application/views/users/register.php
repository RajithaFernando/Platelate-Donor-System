<!--validation -->
<?php echo validation_errors();?>
<form METHOD="post" data-toggle="validator" role="form" action="<?php echo base_url()?>/users/register">
    <h2><b><?= $title; ?></b></h2>
    <div class="col-md-6 col-md-offset-3">

    <div class="form-group">
        <label class="control-label" for="employee_firstname">First Name</label>
        <input class="form-control"  data-error="Please enter name field." id="employee_firstname" name="employee_firstname" placeholder="First Name"  type="text" required />
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <label class="control-label" for="employee_lastname">Last Name</label>
        <input class="form-control"  data-error="Please enter name field." id="employee_lastname" name="employee_lastname" placeholder="First Name"  type="text" required />
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <label>Gender</label>
        <input type="radio"  value="male" name="employee_gender" required>Male
        <input type="radio"  value="female" name="employee_gender" required>Female
    </div>
    <div class="form-group">
        <label class="control-label" for="employee_teleNo">Telephone No</label>
        <input type="text" class="form-control" name="employee_teleNo" data-length="10" required>
    </div>

    <div class="form-group">
        <label for="employee_email" class="control-label">Email</label>
        <input type="email" class="form-control" id="employee_email" name="employee_email" placeholder="Email" required>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <label class="control-label"for="employee_NIC">NIC</label>
        <input type="text" class="form-control" data-minlength="10" data-maxlength="12" name="employee_NIC" id="employee_NIC"data-error="must enter minimum of 10 characters"  required>
        <div class="help-block with-errors"></div>
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

    <div class="form-group">
        <label class="control-label" for="employee_username">Userame</label>
        <input class="form-control"  data-error="Please enter name field." id="employee_username" name="employee_username" placeholder="Username"  type="text" required />
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group">
        <label for="employee_password" class="control-label">Password</label>
        <div class="form-group">
            <input type="password" data-minlength="5" class="form-control" name="employee_password" id="employee_password" data-error="must enter minimum of 5 characters" placeholder="Password" required>
            <div class="help-block with-errors"></div>
        </div>
    </div>
<!--    --><?php //echo form_error('Password', '<div class="alert alert-danger contact-warning">', '</div>'); ?>

    <div class="form-group">
        <label>Confirm password</label>
        <input type="password" class="form-control" name="employee_password2" id="employeee_password2" data-match="#employee_password" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">
            Submit
        </button>
    </div>
    </div>
</form>