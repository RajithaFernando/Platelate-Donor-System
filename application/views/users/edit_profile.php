<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">User Profile</li>
</ol>

<header class="page-header" id="pheader">
    <h4 class="page-title"></h4>
</header>
<!--  -->

    <div class="from-group" style="text-align: center; ">
            <h4><b><?= $title; ?></b></h4>
    </div>
<div class="col-md-11" style="margin-left: 37px;">
 <div class="col-md-12" style="background-color: #F3F3F3; padding: 15px; margin-right:10px; margin-left: 10px;margin-top: 22px; padding-left:20px; padding-bottom: 20px; padding-right: 20px; padding-top: 20px;">
    <div class="form-inline">
    <div class="col-md-3">
        <!-- image upload -->
        <div type="card" >

            <?php foreach ($imagepath as $value) {?>
                <img src="<?php echo $value['Employee_image'];?> " class="img-rounded" id="img" style="width: 150px; margin-left: 20px; border-radius: 100px;">

            <?php }?>

            <?php echo form_open_multipart('Users/do_upload');?>
            <!-- <div class="row"> -->
            <input type="file" id="brows" name="userfile" style="margin-left: 30px; margin-top: 10px;"><br>
            <input type="submit" value="upload" id=s"size" style="margin-left: 30px; margin-top: 10px;" >
            <!-- </div> -->
            <?php echo form_close();?>

        </div>

    </div>
        <div class="col-md-9">
            <?php echo form_open('users/update');?>

            <div class="form-group">
                <div class="form-row ">
                    <div class="col-md-3" style="margin-right: 35px;">
                        <label>User id</label>
                    </div>
                    <div class="col-md-3">
                        <input id="employee_id" type="text" class="form-control" name="employee_id" value="<?php echo $user['employee_id'];?>" disabled>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="form-row ">
                    <div class="col-md-2 ">
                        <label>First Name</label>
                    </div>
                    <div class="col-md-3 " style="margin-right: 55px;">
                        <input id="employee_firstname" type="text" class="form-control" name="employee_firstname" value="<?php echo $user['employee_firstname'];?>" style="text-transform: capitalize;">
                    </div>
                    <div class="col-md-2 ">
                        <label>Last Name</label>
                    </div>
                    <div class="col-md-2">
                        <input id="employee_lastname"type="text" class="form-control" name="employee_lastname" value="<?php echo $user['employee_lastname'];?>" style="text-transform: capitalize;">
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-2">
                        <label>Telephone No</label>
                    </div>
                    <div class="col-md-3" style="margin-right: 55px;">
                        <input id="employee_teleNo" type="text" class="form-control" name="employee_teleNo" value="<?php echo $user['employee_teleNo'];?>">
                    </div>
                    <div class="col-md-2" >
                        <label>Email</label>
                    </div>
                    <div class="col-md-2">
                        <input id="employee_email" type="text" class="form-control" name="employee_email"value="<?php echo $user['employee_email'];?>">
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-2 ">
                        <label>NIC</label>
                    </div>
                    <div class="col-md-3" style="margin-right: 65px;">
                        <input id="employee_NIC" type="text" class="form-control" name="employee_NIC" value="<?php echo $user['employee_NIC'];?>"readonly>
                    </div>

                    <div class="col-md-2 ">
                        <label>Occupation</label>
                    </div>
                    <div class="col-md-2 ">
                        <input id="employee_occupation" type="text" class="form-control" name="employee_occupation" value="<?php echo $user['employee_occupation'];?>"readonly>
                    </div>
                </div>
            </div>
            <br>
            <button type="reset" class="btn btn-primary" name="" style=" border-radius: 15px; background: #ff4d4d;"  href="<?php echo base_url()?>/users/dashboard">Cancel</button>
            <button type="button" class="btn btn-success pull-right" id="submitbtn" name="submit" style=" border-radius: 15px;" >Submit</button>

            </form>
            <!--        --><?php //form_close();?>
            <div class="text-md-left">
                <a  href="<?php echo site_url('/users/change_password/'.$user['employee_id']);?>">Reset Password?</a>
            </div>
        </div>
    </div>
</div>
</div>

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
                    if($.trim(data)=="success"){
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

