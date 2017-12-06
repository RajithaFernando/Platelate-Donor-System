<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 10/26/2017
 * Time: 7:49 AM
 */?>
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
    <legend style="text-align: center;"><b>Donor list</b></legend>
<hr>
<div class="row detail" style="text-align: center; margin-left: 90px ">
    <div class="col-md-10 offset-1">
        <table class="table table-hover table-responsive table-striped table-bordered">
            <thead style="background-color: #365D67;">
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Land phone number
                    </th>
                    <th>
                        Mobile number
                    </th>
                    <th>
                        Response
                    </th>
                </tr>
            </thead>
            <tbody id="response">
            <?php foreach ($donors as $donor) : ?>
                <tr>
                    <td>
                        <?php echo $donor['donorFname'] ?>  <?php echo $donor['donorLname'] ?>
                    </td>
                    <td>
                        <?php echo $donor['landTeleNo'] ?>
                    </td>
                    <td>
                        <?php echo $donor['mobileTeleNo'] ?>
                    </td>
                    <td>
        <!--                          comment here when use ajax      --><?php //echo  form_open_multipart('donors/add_points')?>
                        <div class="form-group " data-toggle="validator">
                            <input type="radio" class="responseTimes" value="response" name="donorResponse" id="responseType" required>Response &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="responseTimes" value="accepted" name="donorResponse" id="responseType" required>Accepted &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="responseTimes" value="not_response" name="donorResponse" id="responseType" required>Not Response &nbsp;&nbsp;&nbsp;&nbsp;
        <!--                    when use ajax us this line-->
                            <button class="btn btn-primary btn-response" data-id="<?php echo $donor['donorId']?>">submit</button>
        <!--                    <button type="submit" class="btn btn-primary btn-response" data-id="--><?php //echo $donor['donorId']?><!--">submit</button>-->

                        </div>

                        <!--                --><?php //echo form_close();?>
                        <!--                <input type="text" value="--><?php //echo $donor['donorId']?><!--" name="donorId" id="donorId" hidden>-->
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
<!--ajax for function-->
<script>
    $("#response").on('click','.btn-response',(function(){

//        alert("anvmb");
        var id =$(this).data('id');
        var response = $("input[type=radio]:checked").val();

        $.ajax({
            type:"post",
            url:"<?php echo base_url('/donors/add_points/')?>",
            data:{'donorResponse':response,'donorId':id},
            success:function(data){
                if(data=="success"){
                    alert("successfully recorded.");
//                    $('#<?php //echo $donor['donorId']?>//').attr('disabled',true);

                    window.scrollTo(0,0);


                }
                else{
                    alert("something wrong. please select one option here.");
//                    $('#<?php //echo $donor['donorId']?>//').attr('disabled',false);
                }
            }
        });

    }));
    /*document.getElementById("btn-response").onclick = function() {
        //disable
        this.disabled = true;

        //do some validation stuff
    */
</script>

