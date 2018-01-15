<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Donor Registration</li>
</ol>
<header class="page-header" id="pheader">
    <h6 class="page-title">
        <?php if (validation_errors()):?>
        <div class="alert alert-danger" role="alert">
            <strong>Error !</strong> <?php echo validation_errors(); ?>
        </div>
        <?php else:?>
            <?php  if ($this->session->flashdata('msg')):?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('msg').'</p>';?>
            <?php endif; ?>

        <?php endif;?>
    </h6>
</header>
<div class="form-group" style="text-align: center;">
    <legend><h4><b><?= $title; ?></b></h4></legend>
</div>
  <!-- testing -->
        <?php echo form_open('Donors/registerDonor') ?>
<div class="col-md-11" style="margin-left: 37px;">
<div class="col-md-12" style="background-color: #F3F3F3; padding: 15px; margin-right:20px; margin-left: 10px;margin-top: 22px; padding-left:20px; padding-right: 20px; padding-bottom: 20px; padding-top: 20px;">

        <form METHOD="post" data-toggle="validator" role="form" action="<?php echo base_url()?>/Donors/registerDonor">
        <div class="form-group">
                <div class="form-row ">

                    <div class="col-md-2 form-inline">
                        <label for="donorid" class="control-label">Donor Id :</label>
                    </div>

                    <div class="col-md-4 form-inline">
                        <input type="text" class="form-control" id="donorid" placeholder="Ex: MHXXX" name="donorid" data-error="THIS MUST AUTO INCREMENT" value="MH"  required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-2 form-inline">
                        <label for="donorFname" class="control-label">First Name :</label>
                    </div>

                <div class="col-md-4 form-inline">
                    <input type="text" class="form-control" id="donorFname" placeholder="First Name" name="donorFname" data-error="please enter First Name"  style="text-transform: capitalize;" required>
                    <div class="help-block with-errors"></div>
                </div>

            </div>
        </div>


    <div class="form-group">
        <div class="form-row">

            <div class="col-md-2 form-inline">
                <label for="donorMname" class="control-label">Middle Name :</label>
            </div>
            <div class="col-md-4 form-inline">
                <input type="text" class="form-control" id="donorMname" placeholder="Middle Name" name="donorMname" data-error="Please enter Middle Name" style="text-transform: capitalize;">
                <div class="help-block with-errors"></div>
            </div>



            <div class="col-md-2 form-inline">
                <label for="donorLname" class="control-label">Last Name :</label>
            </div>
            <div class="col-md-4 form-inline">
                <input type="text" class="form-control" id="donorLname" placeholder="Last Name" name="donorLname" data-error='Please enter Last Name' style="text-transform: capitalize;" required>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>




    <div class="form-group">
        <div class="form-row">

            <div class="col-md-2 form-inline">
                <label for="donorNIC" class="control-label">NIC :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="text" class="form-control" id="donorNIC" placeholder="NIC" name="donorNIC" data-error='Please enter NIC' required>
                <div class="help-block with-errors"></div>
            </div>



            <div class="col-md-2 form-inline">
                <label>Gender :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="radio" class="c" value="male" name="donorGender"><label for="male" >Male</label>
                <input type="radio" class="c" value="female" name="donorGender"><label for="female">Female</label>

            </div>
        </div>
    </div>



    <div class="form-group">
        <div class="form-row">

            <div class="col-md-2 form-inline">
                <label for="donorLname" class="control-label">Address :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="text" class="form-control" id="donorAddress" placeholder="Address" name="donorAddress" data-error='Please enter Address' style="text-transform: capitalize;"  required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="col-md-2 form-inline">
                <label for="donorDistance">Distance :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Distance" name="donorDistance" data-error='Please enter Distance' required>km
            </div>
        </div>
    </div>





    <div class="form-group">
        <div class="form-row">
            <div class="col-md-2 form-inline">
                <label for="donorEmail">Email Address :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="email" class="form-control" id="donorEmail" placeholder="Email Address" name="donorEmail" data-error='Please enter Email' required>
            </div>




            <div class="col-md-2 form-inline">
                <label for="donorDOB">Date Of Birth :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="date" class="form-control" id="donorDOB" placeholder="Date Of Birth" name="donorDOB" data-error='Please enter DOB' onblur="getAge()" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" required>
            </div>
        </div>
    </div>



    <div class="form-group">
        <div class="form-row">

            <div class="col-md-2 form-inline">
                <label>Blood Group :</label></td>
            </div>

            <div class="col-md-4 form-inline">
                <select name="donorBloodGroup" data-error='Please enter Blood Group' >
                    <option>---Select---</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                </select>

            </div>




            <div class="col-md-2 form-inline">
                <label for="donorHeight">Height :</label>
            </div>

            <div class="col-md-4 form-inline">
                <input type="double" class="form-control" id="donorHeight" placeholder="Height" name="donorHeight" data-error='Please enter Height' required>cm
            </div>
        </div>
    </div>



    <div class="form-group">
        <div class="form-row">

            <div class="col-md-2 form-inline">
                <label>Available Times :</label>
            </div>

            <div class="col-md-4 form-inline">
                <br>
                <input type="radio" class="availableTimes" value="weekday" name="donorAvailable"><label for="weekday" class="light">Week day</label>
                <br>
                <input type="radio" class="availableTimes" value="weekend" name="donorAvailable"><label for="weekend" class="light">week end</label>
                <br>
                <input type="radio" class="availableTimes" value="anyday" name="donorAvailable"><label for="anyday" class="light">Any day</label>
            </div>
            <div class="col-md-2 form-inline">
                <label for="donorHeight">Tel :</label>
            </div>

            <div class="col-md-2 form-inline">
                <input type="text" class="form-control" id="donorMobno" placeholder="Mobile No" name="donorMobNo" maxlength="10" size="10" data-error='Please enter Mobile No' required>
            </div>

            <div class="col-md-2 form-inline">
                <input type="text" class="form-control" id="donorLandno" placeholder="Land No" name="donorLandNo" maxlength="10" size="10" data-error='Please enter Land No' required>
            </div>

        </div>
    </div>

    <div class="form-row">
        <div class="col-md-9">
            <button type="reset" class="btn btn-primary pull-right" name="" style="border-radius: 15px; background: #ff4d4d;">Cancel</button>
        </div>

        <div class="col-md-2">
            <button type="submit" class="btn btn-success pull-right" name="" style="border-radius: 15px;">Submit</button>
        </div>
    </div>






<?php echo form_close(); ?>
    </form>


    </div>
</div>


<?php //include 'partial/footer.php' ?>

<script>
//    validation of date of birth check donor age under 18 or more than 100
    function getAge() {
        var dateString = document.getElementById("donorDOB").value;
        if(dateString !="")
        {
            var today = new Date();
            var birthDate = new Date(dateString);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            var da = today.getDate() - birthDate.getDate();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            if(m<0){
                m +=12;
            }
            if(da<0){
                da +=30;
            }

            if(age < 18 || age > 100)
            {
                $("<div id=\"alert\" class=\"alert alert-danger col-md-12 col-md-offset-1\"><strong>Error!</strong> Donor age "+age+" is restrict</div>").insertAfter('#pheader');

                //alert("Age "+age+" is restrict");

            } else {
                /$("<div id=\"alert\" class=\"alert alert-danger col-md-12 col-md-offset-1\"><strong>Error!</strong> Donor age "+age+" is restrict</div>").insertAfter('#pheader');

//                alert("Age "+age+" is allowed");
            }
        } else {
            $("<div id=\"alert\" class=\"alert alert-warning col-md-12 col-md-offset-1\"><strong>Error!</strong> please provide your date of birth</div>").insertAfter('#pheader');

//            alert("please provide your date of birth");
        }
    }


</script>
