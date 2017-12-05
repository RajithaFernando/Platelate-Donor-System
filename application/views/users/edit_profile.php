
<!--validation -->
<?php echo validation_errors();?>
<?php echo form_open('users/update');?>
<!--<input type="hidden" name="employee_id" value="--><?php //echo $user['employee_id'];?><!--">-->

<div class="col-md-5 col-md-offset-3">
    <h2><b><?= $title; ?></b></h2>
    <div class="form-group">
        <label>User id</label>
        <input type="text" class="form-control" name="employee_id" value="<?php echo $user['employee_id'];?>" disabled>
    </div>

    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name="employee_firstname" value="<?php echo $user['employee_firstname'];?>">
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="employee_lastname" value="<?php echo $user['employee_lastname'];?>">
    </div>
    <div class="form-group">
        <label>Telephone No</label>
        <input type="text" class="form-control" name="employee_teleNo" value="<?php echo $user['employee_teleNo'];?>">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="employee_email"value="<?php echo $user['employee_email'];?>">
    </div>
    <div class="form-group">
        <label>NIC</label>
        <input type="text" class="form-control" name="employee_NIC" value="<?php echo $user['employee_NIC'];?>"readonly>
    </div>

    <div class="form-group">
        <label>Occupation</label>
        <input type="text" class="form-control" name="employee_occupation" value="<?php echo $user['employee_occupation'];?>"readonly>
    </div>
    <button type="submit" class="btn btn-primary " name="">Submit</button>

</div>
<?php form_close();?>


<div class="text-md-left">
    <a class="d-block" href="<?php echo base_url()?>/users/change_password">Forgot Password?</a>
</div>

<script>

</script>
