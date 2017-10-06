<!--validation -->
<?php echo validation_errors();?>
<?php echo form_open('donors/select');?>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-group">
            <label>Blood Group</label>
            <select name="donorBloodGroup" id="bloodgroup" selected="None">
                <option value="None">None</option>
                <option value="A+">A+</option>
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
