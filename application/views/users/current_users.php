
<h2> <?= $title ?> </h2>
<?php foreach ($users as $user) : ?>
<div class="row">
    <div class="col-md-3">
        <?php echo $user['employee_firstname'] ?>  <?php echo $user['employee_lastname'] ?>
    </div>

    <div class="col-md-3">
        <?php echo $user['lemployeelast_login'] ?>
    </div>
    <div class="col-md-2">
        <?php echo $user['employee_occupation'] ?>
    </div>
    <div class="col-md-2">
        <a  class="btn btn-danger btn-sm pull left" data-toggle="modal" data-target="#block">Block</a>
    </div>
    <div class="col-md-2">
        <a class="btn btn-primary btn-sm " href="<?php echo site_url('/users/'.$user['employee_id'])?>">Edit</a>
    </div>
    <br>
</div>
    <hr>
<?php endforeach;?>

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