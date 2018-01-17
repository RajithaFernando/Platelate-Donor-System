
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<!--validation -->
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
                <li class="breadcrumb-item active">Employee Registration</li>
</ol>

<header class="page-header" id="pheader">
    <h4 class="page-title"><b></b></h4>
</header>
<div class="col-md-12 ">
    <div class="form-group"  style="text-align: center; margin-top: 25px;">
            <h4 class="page-title"><b><?= $title; ?></b></h4>
    </div>

    <form METHOD="post" data-toggle="validator" role="form" action="<?php echo base_url()?>/users/register ">

    <?php form_open('users/register')?>
    <div class="col-md-12" style="background-color: #F3F3F3; padding: 15px; margin-right:10px; margin-left: 10px;margin-top: 22px; padding-left:20px; padding-bottom: 20px; padding-right: 20px; padding-top: 20px;">
<div class="form-inline">
    <div class="col-md-9">
<!--        <div class="form-group">-->
            <div class="form-row">
                    <div class="col-md-2 form-inline">
                        <label class="control-label" for="employee_firstname">First Name</label>
                    </div>
                    <div class="col-md-3 form-inline">
                        <input class="form-control"  id="employee_firstname" name="employee_firstname" placeholder="First Name" style="text-transform: capitalize;" type="text" required>
                    </div>
                <div class="col-md-2 form-inline">
                    <label class="control-label" for="employee_lastname">Last Name</label>
                </div>
                <div class="col-md-2 form-inline">
                    <input class="form-control"  id="employee_lastname" name="employee_lastname" placeholder="Last Name" style="text-transform: capitalize;" type="text" required>
                </div>
            </div>
<!--        </div>-->
        <br>
<!--        <div class="form-group">-->
            <div class="form-row">
                    <div class="col-md-2 form-inline">
                        <label>Gender</label>
                    </div>
                    <div class="col-md-3 form-inline">
                        <input type="radio"  value="male" name="employee_gender" id="employee_gender" required>Male
                        <input type="radio"  value="female" name="employee_gender" id="employee_gender" required>Female
                    </div>
            </div>
<!--        </div>-->
        <br>
<!--        <div class="form-group">-->
            <div class="form-row">
                <div class="col-md-2 form-inline">
                    <label class="control-label" for="employee_teleNo">Telephone No</label>
                </div>
                <div class="col-md-3 form-inline">
                    <input type="text" class="form-control" name="employee_teleNo" data-length="10" id="employee_teleNo" placeholder="telephone number" required>
                </div>

                <div class="col-md-2 form-inline">
                    <label for="employee_email" class="control-label">Email</label>
                </div>
                <div class="col-md-2 form-inline">
                    <input type="email" class="form-control" id="employee_email" name="employee_email" placeholder="Email" required>
                </div>
            </div>
<!--        </div>-->
        <br>
        <!--        <div class="form-group">-->
            <div class="form-row">
                <div class="col-md-2 form-inline">
                    <label class="control-label"for="employee_NIC">NIC</label>
                </div>
                <div class="col-md-3 form-inline">
                    <input type="text" class="form-control" data-minlength="10" data-maxlength="12" name="employee_NIC" id="employee_NIC"data-error="must enter minimum of 10 characters" placeholder="NIC" required>
                </div>
                <div class="col-md-2 form-inline">
                    <label class="control-label"for="employee_occupation">Occupation</label>
                </div>
                <div class="col-md-2 form-inline">
                    <select id="employee_occupation">
                        <option value="Doctor">Doctor</option>
                        <option value="None" selected="selected">Select occupation</option>
                        <option value="Admin">Admin</option>
                        <option value="Nurse">Nurse</option>
                        <option value="Machine_operator">Machine_operator</option>
                        <option value="PHI">PHI</option>
                    </select>
                </div>
            </div>
<!--        </div>-->
        <hr>
<!--        <div class="form-group">-->
            <div class="form-row">
                <div class="col-md-2 form-inline">
                    <label class="control-label" for="employee_username">Username</label>
                </div>
                <div class="col-md-4 form-inline">
                    <input class="form-control"  data-error="Please enter name field." id="employee_username" name="employee_username" placeholder="Username"  type="text" required>
                </div>
            </div>
<!--        </div>-->
        <br>
<!--        <div class="form-group">-->
            <div class="form-row">
               <small> <p style="color: #365D67;">Use lower case, upper case and alphanumeric characters for password ex:Maharagama@123  </p></small>
            </div>
<!--        </div>-->
<!--        <div class="form-group">-->
            <div class="form-row">
                <div class="col-md-1 form-inline">
                    <label for="employee_password" class="control-label">Password</label>
                </div>
                <div class="col-md-3 form-inline">
                    <input type="password" data-minlength="5" class="form-control" name="employee_password" id="employee_password" data-error="must enter minimum of 5 characters" placeholder="Password" required>
                </div>
                <div class="col-md-2 form-inline">
                    <label>Confirm password</label>
                </div>
                <div class="col-md-3 form-inline">
                    <input type="password" class="form-control" name="employee_password2" id="employee_password2" data-match="#employee_password" data-match-error="Whoops, these don't match" placeholder="Confirm Password" required>
                </div>
            </div>
        <br>
<!--        </div>-->
    </div>
    <div class="col-md-3">
        <div class="card">
            <img src="<?php echo base_url('assets/images/media/user.png');?>" class="avatar img-circle" alt="avatar"  style="text-align: center; width: 150px; height: 150px;">
        </div>
        <div>
            <input class="btn btn-outline-success btn-sm" type="file" name="userfile" value="" size="20" required/>
        </div>
    </div>
</div>

        <div class="form-row">
            <div class="col-md-2">
                <button type="reset" class="btn btn-danger" name="" style=" border-radius: 15px; background: #ff4d4d;">Cancel</button>
            </div>
            <!--                submit button-->
            <div class="col-md-10">
                <button class="btn btn-success" type="button" id="submitbtn" style=" border-radius: 15px; ">Submit</button>
            </div>
        </div>
    </div>
    <?php form_close();?>
    </form>
</div>
<!--ajax function it call when click submit button-->
<script>
    $(document).ready(function () {
        $("#submitbtn").click(function(){
//            var employee_id=$('#employee_id').val();
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
                data:{'employee_firstname':employee_firstname,'employee_lastname':employee_lastname,'employee_NIC':employee_NIC,'employee_email':employee_email,'employee_occupation':employee_occupation,'employee_teleNo':employee_teleNo,'employee_gender':employee_gender,'employee_password':employee_password,'employee_password2':employee_password2,'employee_username':employee_username},
                success:function(data){
                    console.log(data);
                    if($('#alert')!=null){
                        $('#alert').remove();
                    }
                    if($.trim(data)=="success"){
                        //alert(data);
                        $("<div id=\"alert\" class=\"alert alert-success col-md-12 col-md-offset-1\"><strong>Success!</strong>New user record successfully created.</div>").insertAfter('#pheader');
                        $('#employee_firstname').val("");
                        $('#employee_lastname').val("");
                        $('#employee_NIC').val("");
                        $('#employee_teleNo').val("");
                        $('#employee_password').val("");
                        $('#employee_password2').val("");
                        $('#employee_username').val("");
                        $('#employee_email').val("");
                        $('#employee_occupation').val("None");
                    }
                    else{
                        $("<div id=\"alert\" class=\"alert alert-danger col-md-12 col-md-offset-1\"><strong>Error!</strong>"+data+"</div>").insertAfter('#pheader');
                        window.scrollTo(0,0);
                    }
                }
            });
        });
    });
</script>
