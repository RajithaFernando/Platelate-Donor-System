<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<script src="<?php echo base_url()?>/assets2/js/jquery.min.js"></script>


<!--validation -->
<?php echo validation_errors();?>
<?php echo form_open('donors/select');?>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-group">
            <label>Blood Group</label>
            <select name="bloodGroup" id="bloodgroup" selected="None">
                <option value="None">None</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>

        </div>
        <div class="from-group">
            <button type="submit" class="btn btn-primary pull-left" >Search </button>
        </div>
    </div>
<br>
<br>
<?php echo form_close();?>
<legend><b>Donor list</b></legend>
<table class="table table-hover table-responsive">
    <thead class="thead-inverse">
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
    <tbody>
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
<!--                --><?php //echo  form_open_multipart('donors/give_point')?>
                <div class="form-group " data-toggle="validator">
                    <input type="radio" class="responseTimes" value="response" name="donorResponse" id="responsetype"  required>Response &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" class="responseTimes" value="accepted" name="donorResponse" id="responsetype" required>Accepted &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" class="responseTimes" value="not_response" name="donorResponse" id="responsetype" required>Not Response &nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-primary" id="response_btn">submit</button>
                </div>

<!--                --><?php //echo form_close();?>
<!--                <input type="text" value="--><?php //echo $donor['donorId']?><!--" name="donorId" id="donorId" hidden>-->


            </td>
        </tr>
    <?php endforeach;?>

    </tbody>
</table>
<!--ajax for function-->
<script>
    $("#response_btn").click(function(){
//        alert("anvmb");
        var response =$("input[type=radio]:checked").val();
        $.ajax({
            type:"post",
            url:"<?php echo site_url('/donors/add_points/'.$donor['donorId'])?>",
            data:{'donorResponse':response},
            success:function(data){
                if(data=="success"){
                    alert("successfully recorded.");
                    window.scrollTo(0,0);


                }
                else{
                    alert("something wrong. plaese select one option here.");
                    $('#response_btn').attr('disabled',false);
                }
            }
        });

    });
    document.getElementById("response_btn").onclick = function() {
        //disable
        this.disabled = true;

        //do some validation stuff
    }
</script>
