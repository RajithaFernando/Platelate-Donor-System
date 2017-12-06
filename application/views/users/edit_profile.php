<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<header class="page-header" id="pheader">
    <h1 class="page-title">update user</h1>
</header>
<!--validation -->
<?php //echo validation_errors();?>
<!--<input type="hidden" name="employee_id" value="--><?php //echo $user['employee_id'];?><!--">-->
<div style="width: 100%;">
    <div style="float: left; width: 30%;">

    </div>
    <div style="float: right;width: 70%;">
        <!--        <div class="col-md-6">-->
        <div class="container container-fluid" style="border: thin;">
            <h2><b><?= $title; ?></b></h2>
            <?php echo form_open('users/update');?>

            <div class="form-group">
                <div class="form-row ">
                    <div class="col-md-1 form-inline">
                        <label>User id</label>
                    </div>
                    <div class="col-md-2 form-inline">
                        <input id="employee_id" type="text" class="form-control" name="employee_id" value="<?php echo $user['employee_id'];?>" disabled>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row ">
                    <div class="col-md-2 form-inline">
                        <label>First Name</label>
                    </div>
                    <div class="col-md-3 form-inline">
                        <input id="employee_firstname" type="text" class="form-control" name="employee_firstname" value="<?php echo $user['employee_firstname'];?>">
                    </div>
                    <div class="col-md-2 form-inline">
                        <label>Last Name</label>
                    </div>
                    <div class="col-md-3 form-inline">
                        <input id="employee_lastname"type="text" class="form-control" name="employee_lastname" value="<?php echo $user['employee_lastname'];?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row ">
                    <div class="col-md-2 form-inline">
                        <label>Telephone No</label>
                    </div>
                    <div class="col-md-3 form-inline">
                        <input id="employee_teleNo"type="text" class="form-control" name="employee_teleNo" value="<?php echo $user['employee_teleNo'];?>">
                    </div>
                    <div class="col-md-2 form-inline">
                        <label>Email</label>
                    </div>
                    <div class="col-md-3 form-inline">
                        <input id="employee_email" type="text" class="form-control" name="employee_email"value="<?php echo $user['employee_email'];?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row ">
                    <div class="col-md-2 form-inline">
                        <label>NIC</label>
                    </div>
                    <div class="col-md-3 form-inline">
                        <input id="employee_NIC" type="text" class="form-control" name="employee_NIC" value="<?php echo $user['employee_NIC'];?>"readonly>
                    </div>

                    <div class="col-md-2 form-inline">
                        <label>Occupation</label>
                    </div>
                    <div class="col-md-3 form-inline">
                        <input id="employee_occupation" type="text" class="form-control" name="employee_occupation" value="<?php echo $user['employee_occupation'];?>"readonly>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-dark " id="submitbtn" name="submit">Submit</button>
            </form>
            <!--        --><?php //form_close();?>
            <div class="text-md-left">
                <a class="d-block" href="<?php echo base_url()?>/passwords/recover_password">Reset Password?</a>
            </div>
        </div>
    </div>
</div>
<!--</div>-->
<!--using ajax for controll the refresh the page-->
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

            $.ajax({
                type:'post',
                url:'<?php echo base_url()?>/users/update',
                data:{'employee_id':employee_id,'employee_firstname':employee_firstname,'employee_lastname':employee_lastname,'employee_NIC':employee_NIC,'employee_email':employee_email,'employee_occupation':employee_occupation,'employee_teleNo':employee_teleNo},
                success:function(data){
                    if($('#alert')!=null){
                        $('#alert').remove();
                    }
                    if(data=="success"){
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

