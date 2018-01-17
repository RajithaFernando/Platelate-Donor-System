<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<hr>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/donors/donor_profile_list">Donors</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/donors/donor_profile/<?php echo $donor['donorId']?>">Donor Profile</a>
    </li>

    <li class="breadcrumb-item active">Donations</li>
</ol>
<?php if (empty($donation)):?>
<div class="col-md-12" style="text-align: center; margin-top: 55px;">
        <div class="alert alert-warning" role="alert">
            <strong>ooh!</strong><h6>This donor hasn't any donation history...</h6>
        </div>
</div>
<?php else:?>

<div class="col-md-offset-10" style ="overflow-x:scroll;">
    <div class="row" style="background-color: #EAF2F5; height: 40px; padding-top: 10px;">
        <div class="col-md-3" style="text-align: center;">
            <b><?php echo $donor['donorFname']." ".$donor['donorLname'] ?></b>
        </div>
        <div class="col-md-3">
            <?php echo "donor ID: ".$donor['donorId']; ?>
        </div>
        <div class="col-md-3">
            <?php echo "NIC: ".$donor['donorNIC']; ?>
        </div>
        <!--              <tr>--><?php //echo "donor ID: ".$donation['landTeleNo']."   ".$donation['mobileTeleNo']."   ".$donation['officeTeleNo']; ?><!--</tr>-->
    </div>
    <hr>
    <table class="table table-hover table-responsive table-striped table-bordered" style="padding: 5px; background-color: honeydew;" >
        <tr>
            <th>
                <label>Donation Date</label>
            </th>
            <th>
                <label>Donation Id</label>
            </th>
            <th>
                <label> White Blood Cell Count</label>
            </th>
            <th>
                <label> Hemoglobin Count</label>
            </th>
            <th>
                <label> Platelets Count</label>
            </th>
            <th>
                <label> Number of unit Collected</label>
            </th>
            <th>
                <label>Machine Kit Serial No</label>
            </th>
            <th>
                <label>Donor Weight</label>
            </th>
            <th>
                <label>Machine Name</label>
            </th>
            <th>
                View
            </th>

        </tr>


        <?php foreach ($donation as $donation1) : ?>
            <tr >

                <td>
                    <?php echo $donation1['donationDate'];?>
                </td>
                <td>
                    <?php echo $donation1['donationId'];?>
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
                    <?php echo $donation1['donorWeight'];?>
                </td>
                <td>
                    <?php echo $donation1['machineName'];?>
                </td>
                <td>
                    <button type="button" class="btn btn-default donation" name="donation" data-id="<?php echo $donation1['donationId'];?>" id="<?php echo $donation1['donationId'];?>"><i class="fa fa-eye" aria-hidden="true"></i></button>
                </td>


            </tr>

        <?php endforeach; ?>

    </table>

</div>
<?php endif;?>
<div class="modal fade" id="donation_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="background-color: #ddddbb;">
        <div class="modal-content" style="background-color: #ddddbb;">
            <div class="modal-header" style="background-color: #c0a16b;">
                <h5 class="modal-title" id="exampleModalLabel">Donation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table>
                    <tr>
                        <td>
                            Donation Id
                        </td>
                        <td >
                            <input type="text" class="form-control" id="donationId" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Donation Date
                        </td>
                        <td >
                            <input type="text" class="form-control" id="donationDate" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Donation Strat Time
                        </td>
                        <td >
                            <input type="text" class="form-control" id="donationStartTime" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Donation End Time
                        </td>
                        <td>
                            <input type="text" class="form-control" id="donationEndTime" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Donation WBC Count
                        </td>
                        <td>
                            <input type="text" class="form-control" id="donationWBCCount" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Donation Hemoglobin Count
                        </td>
                        <td>
                            <input type="text" class="form-control" id="donationHemoCount" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Donation Platelelate Count
                        </td>
                        <td>
                            <input type="text" class="form-control" id="donationPlatelateCount" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Number of Unit Count
                        </td>
                        <td>
                            <input type="text" class="form-control" id="DonationNoOfUnitCollected" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Machine kit serial number
                        </td>
                        <td>
                            <input type="text" class="form-control" id="MachineKitSerialNo" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Machine kit DOE
                        </td>
                        <td>
                            <input type="text" class="form-control" id="MachineKitDOE" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Machine Name
                        </td>
                        <td>
                            <input type="text" class="form-control" id="machineName" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Donation Remarks
                        </td>
                        <td>
                            <input type="text" class="form-control" id="donationRemarks" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Donor Height
                        </td>
                        <td>
                            <input type="text" class="form-control" id="donorHeight" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Donor Weight
                        </td>
                        <td>
                            <input type="text" class="form-control" id="donorWeight" readonly>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $(document).on('click', '.donation', function () {
            var donation_id = $(this).attr("data-id");
            $.ajax({
                method: 'post',
                url: '<?php echo base_url()?>/donation/get_donation_byid',
                data: {'donationId': donation_id},
                dataType: "json",
                success: function (data) {
                    //console.log(data);
                    $('#donationId').val(data.donationId);
                    $('#donationDate').val(data.donationDate);
                    $('#donationStartTime').val(data.donationStartTime);
                    $('#donationEndTime').val(data.donationEndTime);
                    $('#donationWBCCount').val(data.donationWBCCount);
                    $('#donationHemoCount').val(data.donationHemoCount);
                    $('#donationPlatelateCount').val(data.donationPlatelateCount);
                    $('#DonationNoOfUnitCollected').val(data.DonationNoOfUnitCollected);
                    $('#MachineKitSerialNo').val(data.MachineKitSerialNo);
                    $('#MachineKitDOE').val(data.MachineKitDOE);
                    $('#donorHeight').val(data.donorHeight);
                    $('#donorWeight').val(data.donorWeight);
                    $('#machineName').val(data.machineName);
                    $('#donationRemarks').val(data.donationRemarks);
                    jQuery.noConflict(); //to avoid jquery conflict
                    $('#donation_modal').modal('show');
                }
            });
        });
    });
</script>
