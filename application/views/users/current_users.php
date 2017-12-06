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
                    <a  class="btn btn-danger btn-sm pull left" data-toggle="modal" data-target="#block" style="border:thin; padding-left: 5px;"><span><i class="fa fa-lock"aria-hidden="true"></i></span>Block</a>
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


<div class="modal fade" id="block" role="dialog">
    <div class="modal-dialog">
        <!--                modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h6>Are you sure you want block this user   <?php echo $user['employee_firstname'] ?> </h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="<?php echo site_url('/users/block/'.$user['employee_id']);?>">Block</a>
            </div>
        </div>

    </div>
</div>