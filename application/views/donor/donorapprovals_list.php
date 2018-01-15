
<style>
    .thead th{
        background-color: #000777;
        color: white;
        text-align: center;
    }
    .id{
        background-color: #000688;
        color: white;
    }
    .b{
        padding: 5px;
    }
    .none a{
        text-decoration: none;
    }
    .detail{
        margin-top: 0px;
    }
    .pagination {
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        border: 1px solid #ddd;
    }

    .pagination a.active {
        background-color: #4CAF50;
        color: white;
        border: 1px solid #4CAF50;
    }

    .pagination a:hover:not(.active) {background-color: #ddd;}

    .pagination a:first-child {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .pagination a:last-child {
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }
</style>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Donor Approvals List</li>
</ol>
<div class=" col-md-12 " style=" padding-left:20px; padding-bottom: 20px; padding-right: 0px; padding-top: 20px;">

<div class="card col-md-11" style="margin-left: 37px;background-color:ghostwhite; margin-top:10px; padding-left:20px; padding-bottom: 20px; padding-right: 20px; padding-top: 20px;">

    <div  class="form-group" style="text-align: center; ">
        <h2><b><?= $title; ?></b></h2>
        <hr>
    </div>

    <table class="table table-hover table-responsive table-striped table-bordered" style="padding: 5px;" >

        <tr>
            <th style="background-color: #c3e6cb; text-align: center;">Donor Id</th>
            <th style="background-color: #c3e6cb;text-align: center;">NIC</th>
            <th style="background-color: #c3e6cb; text-align: center;">Name</th>
            <th style="background-color: #c3e6cb; text-align: center;">Check</th>
        </tr>

        <?php foreach ($registered_donors as $registered_donors_list ) :?>

            <tr>
                <td style="text-align: center;">   <?php echo $registered_donors_list['donorId']; ?>  </td>

                <td style="text-align: center;">  <?php echo $registered_donors_list['donorNIC']; ?>  </td>

                <td style="text-align: center;">  <?php echo $registered_donors_list['donorFname']." ".$registered_donors_list['donorLname']; ?>  </td>

                <th style="text-align: center;"> <a href="<?php echo site_url('/donorapprovals/'.$registered_donors_list['donorId'])?>"><button type="button" name="select" class="btn btn-md btn-primary" style="background-color: #639e0d;" ><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Check</button></a></th>
            </tr>
            <?php endforeach; ?>
    </table>

</div>
<div class="card center" style="text-align: center; padding:10px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
    <!--<div class="pagination">-->
    <div class="pagination">
        <?php echo $link ?>
    </div>
</div>

