<?php if (empty($donation)):?>
<div class="col-md-12" style="text-align: center; margin-top: 55px;">
        <div class="alert alert-warning" role="alert">
            <strong>ooh!</strong><h6>This donor hasn't any donation history...</h6>
        </div>
</div>
<?php else:?>

<div class="col-md-offset-10" style ="overflow-x:scroll;">
    <table class="table table-hover table-responsive table-striped table-bordered" style="padding: 5px;" >

        <!-- <table>
            <tr>
                <td><h3><?php echo $donation['donorFname']." ".$donation['donorLname'] ?></h3></td>
            </tr>
            <tr><?php echo "donor ID: ".$donation['donorId']; ?></tr>
             <tr><?php echo "NIC: ".$donation['donorNIC']; ?></tr>
              <tr><?php echo "donor ID: ".$donation['landTeleNo']."   ".$donation['mobileTeleNo']."   ".$donation['officeTeleNo']; ?></tr>
        </table>
 -->

        <tr>
            <th>
                <label>Donation Date</label>
            </th>
            <th>
                <label>Donation Id</label>
            </th>

            <th>
                <label>Donation Start Time</label>
            </th>
            <th>
                <label>Donation White Blood Cell Count</label>
            </th>
            <th>
                <label>DonationHemoCount</label>
            </th>
            <th>
                <label>Donation Platelate Count</label>
            </th>
            <th>
                <label>Donation Number of unit Collected</label>
            </th>
            <th>
                <label>Machine Kit Serial No</label>
            </th>
            <th>
                <label>Machine Kit Date of Expire </label>
            </th>
            <th>
                <label>Donor Height</label>
            </th>
            <th>
                <label>Donor Weight</label>
            </th>
            <th>
                <label>Machine Name</label>
            </th>

        </tr>


        <?php foreach ($donation as $donation1) : ?>
            <tr>
                <td>
                    <?php echo $donation1['donationDate'];?>
                </td>
                <td>
                    <?php echo $donation1['donationId'];?>
                </td>

                <td>
                    <?php echo $donation1['donationStartTime'];?>
                </td>
                <td>
                    <?php echo $donation1['donationWBCCount'];?>
                </td>

                <td>
                    <?php echo $donation1['donationHemoCount'];?>
                </td>
                <td>
                    <?php echo $donation1['donationPlatelateCount'];?>
                </td>
                <td>
                    <?php echo $donation1['DonationNoOfUnitCollected'];?>
                </td>
                <td>
                    <?php echo $donation1['MachineKitSerialNo'];?>
                </td>
                <td>
                    <?php echo $donation1['MachineKitDOE'];?>
                </td>
                <td>
                    <?php echo $donation1['donorHeight'];?>
                </td>
                <td>
                    <?php echo $donation1['donorWeight'];?>
                </td>
                <td>
                    <?php echo $donation1['machineName'];?>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

</div>
<?php endif;?>
