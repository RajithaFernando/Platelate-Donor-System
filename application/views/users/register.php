<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<header class="page-header" id="pheader">
    <h1 class="page-title"><b><?= $title; ?></b></h1>
</header>

<!--validation -->
<?php //echo validation_errors();?>
<!--<form METHOD="post" data-toggle="validator" role="form" action="--><?php //echo base_url()?><!--/users/register">-->
<?php form_open('users/register')?>

<div class="col-md-6 col-md-offset-3">

    <div class="form-group">
        <label class="control-label" for="employee_firstname">First Name</label>
        <input class="form-control"  data-error="Please enter name field." id="employee_firstname" name="employee_firstname" placeholder="First Name"  type="text" required />

    </div>
    <div class="form-group">
        <label class="control-label" for="employee_lastname">Last Name</label>
        <input class="form-control"  data-error="Please enter name field." id="employee_lastname" name="employee_lastname" placeholder="First Name"  type="text" required />
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <label>Gender</label>
        <input type="radio"  value="male" name="employee_gender" id="employee_gender" required>Male
        <input type="radio"  value="female" name="employee_gender" id="employee_gender" required>Female
    </div>
    <div class="form-group">
        <label class="control-label" for="employee_teleNo">Telephone No</label>
        <input type="text" class="form-control" name="employee_teleNo" id="employee_teleNo" data-length="10" required>
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
        <select id="employee_occupation">
            <option value="Doctor">Doctor</option>
            <option value="None" selected="selected">Select occupation</option>
            <option value="Admin">Admin</option>
            <option value="Nurse">Nurse</option>
            <option value="Machine_operator">Machine_operator</option>
            <PHI value="PHI">Doctor</PHI>

        </select>
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
        <input type="password" class="form-control" name="employee_password2" id="employee_password2" data-match="#employee_password" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="button"id="submitbtn">
            Submit
        </button>
    </div>
</div>
</form>
<script>
    $(document).ready(function () {
        $("#submitbtn").click(function(){
            var employee_id=$('#employee_id').val();
            var employee_firstname=$('#employee_firstname').val();
            var employee_lastname=$('#employee_lastname').val();
            var employee_email=$('#employee_email').val();
            var employee_NIC=$('#employee_NIC').val();
            var employee_occupation=$('#employee_occupation').val();
            var employee_teleNo=$('#employee_teleNo').val();
            var employee_gender=$("input[type=radio]:checked").val();
            var employee_password=$('#employee_password').val();
            var employee_password2=$('#employee_password2').val();
            var employee_username=$('#employee_username').val();

            $.ajax({
                type:'post',
                url:'<?php echo base_url()?>/users/register',
                data:{'employee_id':employee_id,'employee_firstname':employee_firstname,'employee_lastname':employee_lastname,'employee_NIC':employee_NIC,'employee_email':employee_email,'employee_occupation':employee_occupation,'employee_teleNo':employee_teleNo,'employee_gender':employee_gender,'employee_password':employee_password,'employee_password2':employee_password2,'employee_username':employee_username},
                success:function(data){
                    console.log(data);
                    if($('#alert')!=null){
                        $('#alert').remove();
                    }
                    if(data=="success"){
//                        error eka ahannna
                        alert(data);
                        $("<div id=\"alert\" class=\"alert alert-success col-md-10 col-md-offset-1\"><strong>Success!</strong>your profile is updated.</div>").insertAfter('#pheader');
                    }
                    else{
                        $("<div id=\"alert\" class=\"alert alert-danger col-md-10 col-md-offset-1\"><strong>Error!</strong>"+data+"</div>").insertAfter('#pheader');
                        window.scrollTo(0,0);
                    }
                }
            });
        });
    });
</script>
