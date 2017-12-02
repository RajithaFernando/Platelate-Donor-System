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
                <button class="btn btn-warning"  id="unblock_btn"> Unblock </button>
            </td>

        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<!--ajax function-->
<script>
    $("#unblock_btn").click(function(){
//        alert("anvmb");
        $.ajax({
            type:"post",
            url:"<?php echo site_url('/users/check_block_users/'.$user['employee_id'])?>",
            success:function(data){
                console.log("hh");
                if(data=="success"){
                    alert("successfully recorded.");
                    window.scrollTo(0,0);


                }
                else{
                    alert("something wrong.");
                    $('#unblock_btn').attr('disabled',false);
                }
            }
        });

    });
    document.getElementById("unblock_btn").onclick = function() {
        //disable
        this.disabled = true;

        //do some validation stuff
    }
</script>
