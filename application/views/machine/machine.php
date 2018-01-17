<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Machine Registration</li>
</ol>

<header class="page-header" id="pheader">
    <h4 class="page-title"><b></b></h4>
    <?php  if ($this->session->flashdata('massg')):?>
        <?php echo '<p class="alert alert-warning">'.$this->session->flashdata('massg').'</p>';?>
    <?php endif; ?>

</header>

<div class="container" style="margin-left: 50px; background-color: #DADADA;">
    <br/>
    <br/>
    <h3 align="center">Add Machines</h3>
    <div class="form-group" >
        <form name="add_name" id="add_name">
            <div class="table-responsive">
                <table class="table table-bordered" id="dynamic_field">
                    <tr>
                        <td><input type="text" name="name[]" id="row" placeholder="Enter Machine Name" class="form-control name_list"  /></td>
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                    </tr>
                </table>
                <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
            </div>
        </form>
    </div>
</div>
<hr>
<div class="col-md-12" style="padding-left: 90px; height:50px; padding-top: 10px; box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s; ">
    <legend><h3>All Machines</h3></legend>
</div>
<hr>
<div class="col-md-8"  style="margin-left:130px; padding-left: 20px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
    <table class="table table-hover table-responsive table-striped table-bordered">
    <thead>
        <tr>
            <th style="text-align: center;">
                Machine number
            </th>
            <th style="text-align: center;">
                Machine Name
            </th>
            <th style="text-align: center;">
                Remove
            </th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($machines as $machine) : ?>
            <tr>
                <td style="text-align: center;">
                    <?php echo $machine['machine_id']?>
                </td>
                <td style="text-align: center;">
                    <?php echo $machine['machine_name']?>
                </td>
                <td style="text-align: center;">
                    <a class="btn btn-danger btn-sm " href="<?php echo site_url('/machine/remove_machine/'.$machine['machine_id'])?>"><span><i class="fa fa-minus-square" aria-hidden="true"></span></i></a> </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>




<script type="text/javascript">


    $(document).ready(function(){
        var i=1;
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter Machine Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
        $('#submit').click(function(){
            var addmachine = $('#row').val();
            if(addmachine==""){
                $("<div id=\"alert\" class=\"alert alert-danger col-md-12 col-md-offset-1\"><strong>Error!</strong> First row can not be empty.</div>").insertAfter('#pheader');

            }
            else {
                $.ajax({
                    url: "<?php echo base_url()?>/machine/add_machine",
                    method: "post",
                    data: $('#add_name').serialize(),
                    success: function (data) {
                        $("<div id=\"alert\" class=\"alert alert-success col-md-12 col-md-offset-1\"><strong>Success!</strong>  New Machine entered  successfully.</div>").insertAfter('#pheader');
                        $('#add_name')[0].reset();
                        location.reload();

                    }

                });
            }
        });
    });
</script>