<!-- <html>
<head>
<link rel="stylesheet" type="text/css" href="login_style.css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="login_effect.js"></script>
</head>

<body> -->

<div class="col-md-12">
        <!-- <tr> -->
        <!-- <div class="row"> -->
    <?php $values = array_chunk($donors_profile, 3)?>
    <?php foreach ($values as $donors):?>
    <div class="row">
        <?php foreach($donors as $registered_donors_list ){?>
            <?php  $status=$registered_donors_list['donorStatus'];
            if($status=='approve'):?>
                <!--                    approved donor-->

                <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12" id="approve" style="height: 150px;  border-style: solid;border-left-color: green; border-left-width: 3px;pdding:10px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
                    <a href="<?php echo base_url()?>/donors/donor_profile/<?php echo $registered_donors_list['donorId']; ?>" style="text-decoration:none;">
                        <div class="form-inline">
                            <div class="col-md-3 col-xs-3" style="padding-right: 50px;">
                            <label><img src="<?php echo $registered_donors_list['donorImage'];?> " class="img-rounded" id="img" style="width: 150px; margin-left: 20px; border-radius: 100px;"></label>
                            </div>
                            <div>
                                Donor id  : <?php echo $registered_donors_list['donorId']?>
                                <br>
                                <?php echo $registered_donors_list['donorFname']?>  <?php echo $registered_donors_list['donorLname']?>
                                <br>
                                <?php echo $registered_donors_list['donorNIC']?>
                                <br>
                                Next donation Date: <?php echo $registered_donors_list['nextDonationDate']; ?>
                            </div>
                            <div class="col-md-3 col-md-offset-12">
                            </div>
                            <div class="col-md-1">
                                <?php echo $registered_donors_list['donorBloodGroup']?>
                            </div>
                        </div>
                    </a>
                    </div>

                <!--                    current status donor-->
            <?php elseif ($status=='current'):?>
                    <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12" id="approve" style="height: 150px;  border-style: solid;border-left-color: dodgerblue; border-left-width: 3px;pdding:10px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
                        <a href="<?php echo base_url()?>/donors/donor_profile/<?php echo $registered_donors_list['donorId']; ?>" style="text-decoration:none;">

                        <div class="form-inline">
                            <div class="col-md-3 col-xs-3" style="padding-right: 50px;">
                                <label><img src="<?php echo $registered_donors_list['donorImage'];?> " class="img-rounded" id="img" style="width: 150px; margin-left: 20px; border-radius: 100px;"></label>
                            </div>
                            <div>
                                Donor id  : <?php echo $registered_donors_list['donorId']?>
                                <br>
                                <?php echo $registered_donors_list['donorFname']?>  <?php echo $registered_donors_list['donorLname']?>
                                <br>
                                <?php echo $registered_donors_list['donorNIC']?>
                                <br>
                                Next donation Date: <?php echo $registered_donors_list['nextDonationDate']; ?>
                            </div>
                            <div class="col-md-3 col-md-offset-12" style="padding-bottom: 10px;">
                                <?php echo $registered_donors_list['donorBloodGroup']?>
                                <!--                            <button class="btn btn-sm btn-outline-success pull-right">change</button>-->
                            </div>
                        </div>
                        </a>
                    </div>

            <?php elseif ($status=='p_deffer'):?>
                    <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12" id="approve" style="height: 150px;  border-style: solid;border-left-color: darkred; border-left-width: 3px;pdding:10px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
                        <a href="<?php echo base_url()?>/donors/donor_profile/<?php echo $registered_donors_list['donorId']; ?>" style="text-decoration:none;">

                        <div class="form-inline">
                            <div class="col-md-3 col-xs-3" style="padding-right: 50px;">
                            <label><img src="<?php echo $registered_donors_list['donorImage'];?> " class="img-rounded" id="img" style="width: 150px; margin-left: 20px; border-radius: 100px;"></label>
                            </div>
                            <div>
                                Donor id  : <?php echo $registered_donors_list['donorId']?>
                                <br>
                                <?php echo $registered_donors_list['donorFname']?>  <?php echo $registered_donors_list['donorLname']?>
                                <br>
                                <?php echo $registered_donors_list['donorNIC']?>
                                <br>
                                Next donation Date: <?php echo $registered_donors_list['nextDonationDate']; ?>
                            </div>
                            <div class="col-md-3 col-md-offset-12">
                                <?php echo $registered_donors_list['donorBloodGroup']?>
                                <!--                            <button class="btn btn-sm btn-outline-success pull-right">change</button>-->
                            </div>
                        </div>
                        </a>
                    </div>

            <?php else:?>
                    <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12" id="approve" style="height: 150px;  border-style: solid;border-left-color: #FFD700; border-left-width: 3px;pdding:10px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
                        <a href="<?php echo base_url()?>/donors/donor_profile/<?php echo $registered_donors_list['donorId']; ?>" style="text-decoration:none;">

                        <div class="form-inline">
                            <div class="col-md-3 col-xs-3" style="padding-right: 50px;">
                            <label><img src="<?php echo $registered_donors_list['donorImage'];?> " class="img-rounded" id="img" style="width: 150px; margin-left: 20px; border-radius: 100px;"></label>
                            </div>
                            <div>
                                Donor id  : <?php echo $registered_donors_list['donorId']?>
                                <br>
                                <?php echo $registered_donors_list['donorFname']?>  <?php echo $registered_donors_list['donorLname']?>
                                <br>
                                <?php echo $registered_donors_list['donorNIC']?>
                                <br>
                                Next donation Date: <?php echo $registered_donors_list['nextDonationDate']; ?>
                            </div>
                            <div class="col-md-3 col-md-offset-12">
                                <?php echo $registered_donors_list['donorBloodGroup']?>
                                <!--                            <button class="btn btn-sm btn-outline-success pull-right">change</button>-->
                            </div>
                        </div>
                        </a>
                    </div>
            <?php endif;?>
        <?php }?>
    </div>
    <?php endforeach;?>
</div>

