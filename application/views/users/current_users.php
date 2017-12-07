<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style>
    .thead th{
        background-color: #000777;
        color: white;
        text-align: center;
    }
    .id{
        background-color: #000688;
        color: white;
    }
    .b{
        padding: 5px;
    }
    .none a{
        text-decoration: none;
    }
    .detail{
        margin-top: 0px;
    }
</style>
<div class="col-md 12" style="text-align: center;">
    <h2> <?= $title ?> </h2>
</div>

    <div class="row detail" style="text-align: center;margin-left: 140px; ">
    <div class="col-md-10 offset-1">
        <table class="table table-hover table-responsive table-striped table-bordered">
            <thead style="background-color: #365D67;">
            <tr>
                <th >
                    Employee Name
                </th>

                <th>
                    Last login time
                </th>
                <th>
                    Occupation
                </th>
                <th>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user) : ?>
            <tr>
                <td>
                    <?php echo $user['employee_firstname'] ?>  <?php echo $user['employee_lastname'] ?>
                </td>

                <td>
                    <?php echo $user['lemployeelast_login'] ?>
                </td>
                <td>
                    <?php echo $user['employee_occupation'] ?>
                </td>
                <td>
                    <input type="button" class="btn btn-danger btn-sm blockuser" name="blockuser" id="<?php echo $user['employee_id'] ?>" value="Block"></input>
<!--                    <a  data-id="--><?php //echo $user['employee_id'] ?><!--" class="btn btn-danger btn-sm pull left btn-blockuser" data-toggle="modal" data-target="#block" style="border:thin; padding-left: 5px;"><span><i class="fa fa-lock"aria-hidden="true"></i></span>Block</a>-->
                    <a class="btn btn-primary btn-sm " href="<?php echo site_url('/users/'.$user['employee_id'])?>"><span><i class="fa fa-pencil" ></span></i>Edit</a>
                </td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
</table>
<div class="pagination-links">
    <?php echo $this->pagination->create_links();?>
</div>

<!--user block model-->
<div class="modal fade" id="block_modal" role="dialog">
    <div class="modal-dialog">
        <!--                modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <?php echo  form_open_multipart('/users/block/')?>

            <div class="modal-body">
                <h6>Are you sure you want block this user </h6>
                <div class="form-group">
                    <div class="form-row ">
                        <div class="col-md-1 form-inline">
                            <input type="text" id="employee_id" name="employee_id" readonly>
                        </div>
                        <div class="col-md-1 form-inline">
                            <input type="text" id="employee_name" name="employee_name"readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Block</button>
            </div>
            <?php echo form_close();?>

        </div>


    </div>
</div>


<script>
    $(document).ready(function(){
        $(document).on('click','.blockuser',function(){
            //        or employee id
            var employee_id =$(this).attr("id");
            //alert (employee_id);
            $.ajax({
                method:'post',
                url:'<?php echo base_url()?>/users/get_user',
                data:{'employee_id':employee_id},
                dataType:"json",
                success:function(data){
                    console.log(data);
                    $('#employee_id').val(data.employee_id);
                    $('#employee_name').val(data.employee_firstname);
                    jQuery.noConflict();
                    $('#block_modal').modal('show');
                }
            });
        });
    });
</script>
