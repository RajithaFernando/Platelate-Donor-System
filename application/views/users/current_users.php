
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

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
    /*.pagination {
         display: inline-block;
     }
*/
    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
    }

    .pagination a.active {
        background-color: #31708f;
        color: honeydew;
        border: 1px solid #31708f;
    }

    .pagination a:hover:not(.active) {background-color: #ddd;}
</style>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Employee</li>
</ol>

<div class="col-md 12" style="text-align: center; margin-top: 15px;">
    <legend><h3>Users</h3></legend>
</div>
<div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
    <div class="row detail" style="text-align: center;margin-left: 100px; margin-top: 10px; ">
    <div class="col-md-11">
        <table class="table table-hover table-responsive table-striped table-bordered">
            <thead style="background-color: #31708f; text-align: center;">
            <tr>
                <th style="text-align: center;">
                    Employee Id
                </th>
                <th style="text-align: center;">
                    Employee Name
                </th>
                <th style="text-align: center;">
                    Employee NIC
                </th>
                <th style="text-align: center;">
                    Occupation
                </th>
                <th style="text-align: center;">
                    Block/View
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user) : ?>
            <tr>
                <td>
                    <?php echo $user['employee_id'] ?>
                </td>

                <td>
                    <?php echo $user['employee_firstname'] ?>  <?php echo $user['employee_lastname'] ?>
                </td>

                <td>
                    <?php echo $user['employee_NIC'] ?>
                </td>
                <td>
                    <?php echo $user['employee_occupation'] ?>
                </td>
                <td>
                    <a type="button" class="btn btn-danger btn-sm blockuser" name="blockuser" id="<?php echo $user['employee_id'] ?>"><i class="fa fa-lock" aria-hidden="true"></i></a>
<!--                    <a  data-id="--><?php //echo $user['employee_id'] ?><!--" class="btn btn-danger btn-sm pull left btn-blockuser" data-toggle="modal" data-target="#block" style="border:thin; padding-left: 5px;"><span><i class="fa fa-lock"aria-hidden="true"></i></span>Block</a>-->
                    <a class="btn btn-primary btn-sm " href="<?php echo site_url('/users/'.$user['employee_id'])?>"><span><i class="fa fa-pencil" ></span></i></a>
                </td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
</table>
</div>
<div style=" pdding:10px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
<!--<div class="pagination">-->
    <nav aria-label="Page navigation example">
<!--    <div class="pagination" style="padding-top: 15px;">-->
        <?php echo $link ?>
    </nav>
<!--    </div>-->
<!--</div>-->
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
                    <div class="form-inline">
                        <div class="col-md-3">
                            <label>Employee id</label>
                        </div>
                        <div>
                            <input class="form-control" type="text" id="employee_id" name="employee_id" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="form-inline">
                        <div class="col-md-3">
                            <label>Employee name</label>
                        </div>
                        <div>
                            <input class="form-control" type="text" id="employee_name" name="employee_name"readonly>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Block</button>
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
