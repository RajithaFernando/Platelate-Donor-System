<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 9/15/2017
 * Time: 8:28 PM
 */?>
<h2> <?= $title ?> </h2>

    <?php foreach ($donors as $donor) : ?>
    <div class="row">
        <div class="col-md-3">
            <?php echo $donor['donor_firstname'] ?>  <?php echo $donor['donor_lastname'] ?>
        </div>
        <div class="col-md-3">
            <?php echo $donor['landTeleNo'] ?>
        </div>
        <div class="col-md-3">
            <?php echo $donor['donorBloodGroup'] ?>
        </div>
        <div class="col-md-3" >
            <button type="button" class="btn btn-info btn-xs">View <span class="glyphicon glyphicon-edit"></span></button>
        </div>


    <?php endforeach;?>
