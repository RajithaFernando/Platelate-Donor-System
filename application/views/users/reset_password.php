
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="card card-register mx-auto mt-5">
    <div class="card-header">Reset password</div>
    <div class="card-body">
        <?php echo form_open('')?>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="exampleInputName">user id</label>
                        <input class="form-control" id="employee_id" type="text" value="<?php echo $user['employee_id']?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputLastName">User name</label>
                        <input class="form-control" id="employee_name" type="text" value="<?php echo $user['employee_firstname']?>" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" id="password" type="password" placeholder="Password">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleConfirmPassword">Confirm password</label>
                        <input class="form-control" id="password2" type="password" placeholder="Confirm password">
                    </div>
                </div>
            </div>
        <input type="button" id="resetbtn" value="Submit" name="resetbtn" " />
        </form>
<!--        <button type="submit" id="cancel" class="btn btn-danger btn-sm " value="cancel" href="--><?php //echo base_url()?><!--/users/edit"/>Cancel</button>-->


    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        $("#resetbtn").click(function(){
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("password2").value;
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            else if ((password =="")&&( confirmPassword=="") ){
                alert("Passwords fields can not be empty .");
                return false;
            }
            else {
                var employee_id = $('#employee_id').val();
                var password = $('#password').val();
                //alert(password);
                $.ajax({
                    type: 'post',
                    url: '<?php echo base_url()?>/passwords/reset_password',
                    data: {'employee_id':employee_id,'password':password},
                    success: function(data) {
                        if (data == "success") {
                            alert('password successfully updated');
                            $('#password').val("");
                            $('#password2').val("");
                        }
                        else {
                            alert('something error');
                        }
                    }
                });
            }
        });
    });

</script>