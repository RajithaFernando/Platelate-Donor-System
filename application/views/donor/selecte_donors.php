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
<?php echo form_close();?>
<div class="container-wrapped">
    <!--donor list display here-->
    <legend><b>Donor list</b></legend>
    <?php foreach ($donors as $donor):?>
        <div class="row">
            <div class="col-md-2">
                <?php echo $donor['donorFname'] ?>  <?php echo $donor['donorLname'] ?>
            </div>
            <div class="col-md-3">
                <?php echo $donor['landTeleNo'] ?>
            </div>
            <div class="col-md-2">
                <a class="btn btn-primary ">View</a>
            </div>
        </div>
        <br>
    <?php endforeach;?>
</div>
