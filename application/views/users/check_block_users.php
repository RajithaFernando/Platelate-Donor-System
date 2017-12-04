<script src="<?php echo base_url()?>/assets2/js/jquery.min.js"></script>

<legend><b>Unauthorised Users</b></legend>
<table class="table table-hover table-responsive">
    <thead class="thead-inverse">
    <tr>
        <th>
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
    <tbody id="unblock">
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
                <button class="btn btn-warning btn-unblock"  data-id="<?php echo $user['employee_id'] ?>"> Unblock </button>
            </td>

        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<!--ajax function-->
<script>
    $("#unblock").on('click','.btn-unblock',(function(){
//        alert("anvmb");
        var id = $(this).data('id');
        $.ajax({
            type:"post",
            url:"<?php echo base_url('/users/unblock_user/')?>",
            data:{'employeeId':id},
            success:function(data){
                //console.log(data);
                if(data=="success"){
                    alert("successfully unblocked.");
                    $('#btn-unblock').attr('disabled',true);
                    //window.scrollTo(0,0);


                }
                else{
                    alert("something wrong.");
                    $('#btn-unblock').attr('disabled',true);
                }
            }
        });

    }));
    /*document.getElementById("unblock_btn").onclick = function() {
        //disable
        this.disabled = true;

        //do some validation stuff
    }*/
</script>
