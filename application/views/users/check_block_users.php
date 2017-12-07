<script src="<?php echo base_url()?>/assets2/js/jquery.min.js"></script>
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
<legend><b>Unauthorised Users</b></legend>
<?php if(!empty($users)):?>
    <div class="row detail" style="text-align: center; ">
        <div class="col-md-10 offset-1">
            <table class="table table-hover table-responsive table-striped table-bordered">
                <thead>
                <tr>
                    <th >
                        Employee Id
                    </th>

                    <th>
                        Name
                    </th>
                    <th>
                        Mobile number
                    </th>
                    <th>
                        Response
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
                            <?php echo $user['employee_teleNo'] ?>
                        </td>
                        <td>
                            <button value="<?php echo $user['employee_id'] ?>" class="btn btn-warning btn-sm unblockuser"  id="<?php echo $user['employee_id'] ?>"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unblock </button>
                        </td>

                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>



<?php else:?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <b>no unauthorized user is not found</b>
                </div>
            </div>
        </div>
    </div>
<?php endif;?>
        <!--ajax function-->


        <script>
            $(document).on('click','.unblockuser',function(){
                var employee_id = $(this).attr('id');
                //alert(employee_id);
                $.ajax({
                    type:"post",
                    url:"<?php echo site_url('/users/unblock_user');?>",
                    data:{'employee_id':employee_id},
                    success:function(data){
                        //console.log(data);
                        if(data=="success"){
                            alert("successfully recorded.");
                            location.reload();
                            window.scrollTo(0,0);
                        }
                        else{
                            alert("something wrong. :)))) check this");
                            location.reload();

                            //$('#unblock_btn').attr('disabled',false);
                        }
                    }
                });

            });
        </script>
