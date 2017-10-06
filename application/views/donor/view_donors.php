<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 9/15/2017
 * Time: 8:28 PM
 */?>
<!--donor list display here-->
<legend><b>Donor list</b></legend>
<?php foreach ($donors as $donor):?>
    <div class="row">
        <div class="col-md-3">
            <?php echo $donor['donor_firstname'] ?>  <?php echo $donor['donor_lastname'] ?>
        </div>
        <div class="col-md-3">
            <?php echo $donor['landTeleNo'] ?>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary " href="<?php echo site_url('/donors/'.$donor['donor_id'])?>">View</a>
        </div>
    </div>
<?php endforeach;?>
