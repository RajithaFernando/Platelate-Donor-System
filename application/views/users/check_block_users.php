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

    .pagination a:hover:not(.active) {background-color: #ffe45c;}

</style>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Blocked Employee</li>
</ol>

<div class="col-md-12" style="text-align: center; margin-top: 10px;">
    <legend><b>Blocked Users</b></legend>
</div>
<?php if(!empty($users)):?>
<div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
    <div class="row detail" style="text-align: center;margin-left: 100px; margin-top: 10px; ">
        <div class="col-md-11">
            <table class="table table-hover table-responsive table-striped table-bordered">
                <thead>
                <tr>
                    <th style="text-align: center; background-color: #737373;">
                        Employee Id
                    </th>

                    <th style="text-align: center; background-color: #737373;">
                        Name
                    </th>
                    <th style="text-align: center; background-color: #737373;">
                        Mobile number
                    </th>
                    <th style="text-align: center; background-color: #737373;">
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
    </div>
    <div class="card" style="text-align: center; padding-top:5px; margin-top: 5px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
        <nav aria-label="Page navigation example">
            <?php echo $link ?>
        </nav>
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
        <!--ajax function it call to unblockuser button-->


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
                        if($.trim(data)=="success"){
                            $("<div id=\"alert\" class=\"alert alert-success col-md-12 col-md-offset-1\"><strong>Success!</strong>  Unblocked user  successfully.</div>").insertAfter('#pheader');
//                            alert("successfully recorded.");
                            location.reload();
                            window.scrollTo(0,0);
                        }
                        else{
                            alert("something wrong.");
                            location.reload();

                            //$('#unblock_btn').attr('disabled',false);
                        }
                    }
                });

            });
        </script>
