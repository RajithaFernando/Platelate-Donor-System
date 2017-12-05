<?php
/**
 * Created by PhpStorm.
 * User: 
 *PC
 * Date: 10/26/2017
 * Time: 7:49 AM
 */?>
<!--<legend><b>Donor list</b></legend>-->
<table class="table table-hover table-responsive">
    <thead class="thead-inverse">
    <tr>
        <th>
            First Name
        </th>
        <th>
        	Last Name
        </th>
        <th>
            donorNIC
        </th>
        <th>
            
        </th>
    </tr>
    </thead>
    <tbody id="response">
    <?php foreach ($differ_donors as $donor) : ?>

        <tr>
            <td>
                <?php echo $donor->donorFname; ?> 
            </td>
            <td>
                <?php echo $donor->donorFname; ?>
            </td>
            <td>
                <?php echo $donor->donorNIC; ?>
            </td>
            <td>
                <div class="form-group " data-toggle="validator">
                    
                    <a class="btn btn-primary btn-response" data-id="<?php echo $donor->donorId; ?>"><?php echo $donor->donorStatus; ?></a>
                </div>


            </td>
        </tr>
    <?php endforeach;?>

    </tbody>
</table>

