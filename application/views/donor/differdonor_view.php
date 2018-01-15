<?php
/**
 * Created by PhpStorm.
 * User:
 *PC
 * Date: 10/26/2017
 * Time: 7:49 AM
 */?>
<!--<legend><b>Donor list</b></legend>-->
<div class="col-md-11" style="margin-right: 37px;">
<div class="col-md-12 card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">

<table class="table table-hover table-responsive table-striped table-bordered" style="margin-top: 10px;">
    <thead class="thead-inverse">
    <tr>
        <th>
            First Name
        </th>
        <th>
            Last Name
        </th>
        <th>
            Donor NIC
        </th>
        <th>
            Donor Status
        </th>
        <th>
            Defferal Reason
        </th>
    </tr>
    </thead>
    <tbody id="response">
    <?php foreach ($differ_donors as $donor) : ?>
        <?php if ($donor->donorStatus == "t_deffer"):?>

            <tr >
                <td style="background-color: #F3E5AB;">
                    <?php echo $donor->donorFname; ?>
                </td>

                <td style="background-color: #F3E5AB;">
                    <?php echo $donor->donorLname; ?>
                </td>

                <td style="background-color: #F3E5AB;">
                    <?php echo $donor->donorNIC; ?>
                </td>

                <td style="background-color:#CFC300; border-radius:8px">
                    <?php echo "Temporary Defferal";?>

                </td>

                <td width="550px" style="background-color: #F3E5AB; ">
                    <?php echo '<b>Reason:</b>'.' '. $donor->donorDefferReason; ?>
                    <?php   if ($donor->donorStatus=='t_deffer'){
                        echo '</br>Next Eligible Date:'.' '.$donor->donorEligibleDate;
                    }
                    ?>
                </td>
            </tr>
        <?php else:?>
            <tr >
                <td style="background-color: #FDD7E4;">
                    <?php echo $donor->donorFname; ?>
                </td>

                <td style="background-color: #FDD7E4;">
                    <?php echo $donor->donorLname; ?>
                </td>

                <td style="background-color: #FDD7E4;">
                    <?php echo $donor->donorNIC; ?>
                </td>

                <td style="background-color: #C81D11; border-radius: 8px">
                    <?php echo 'Permanent Defferal'; ?>

                </td>

                <td width="550px" style="background-color: #FDD7E4;">
                    <?php echo '<b>Reason:</b>'.' '. $donor->donorDefferReason; ?>
                    <?php   if ($donor->donorStatus=='t_deffer'){
                        echo '</br>Next Eligible Date:'.' '.$donor->donorEligibleDate;
                    }
                    ?>
                </td>
            </tr>
        <?php endif;?>
    <?php endforeach;?>

    </tbody>
</table>
</div>
</div>
