<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<link href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="<?php echo base_url()?>/assets/bootstrap/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>

<style>
    .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
    .toggle.ios .toggle-handle { border-radius: 20px; }
    .btn{
        /*margin-right: 65px;*/
    }
    .btn-circle.btn-xl {
        width: 70px;
        height: 70px;
        padding: 10px 16px;
        border-radius: 35px;
        font-size: 24px;
        line-height: 1.33;
        border-width: 2px;

    }

    .btn-circle {
        width: 30px;
        height: 30px;
        padding: 6px 0px;
        border-radius: 15px;
        text-align: center;
        font-size: 12px;
        line-height: 1.42857;
        /*border: 2px;*/
    }
    .board{
        /*width: 75%;*/
        /*margin: 60px auto;*/
        height: 90px;
        background: #fff;
        /*box-shadow: 10px 10px #ccc,-10px 20px #ddd;*/
    }
    .liner{
        height: 2px;
        background: #ddd;
        /*position: absolute;*/
        width: 65px;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 50%;
        /*z-index: 1;*/
    }



</style>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Donor Search</li>
</ol>
<div class="col-md-12" style="margin-top: 10px;">
    <div class="form-inline">
        <div class="col-sm-4 offset-3">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
                <div class="input-group ">
                    <input type="text" class="form-control" name="search" placeholder="Search for using NIC..." id="search">
                    <span class="input-group-btn">
                          <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                          </button>
            </span>
                </div>
            </form>
        </div>
        <div class="col-sm-8" style=" background-color: #fafafa; height: 90px;">
            <div class="row" style="padding-top: 15px; padding-left: 95px; padding-bottom: 55px;" >
                <div class="form-inline">
                    <button type="button" class="btn btn-outline-default btn-circle btn-xl filter-button" data-toggle="tooltip" data-placement="top" title="All donors" id="default_btn" data-filter="all" style="margin-left:20px;"><i class="fa fa-user" aria-hidden="true"></i></button>
                    <div class="liner"></div>
                </div>

                <div class="form-inline">
                    <button type="button" class="btn btn-outline-success btn-circle btn-xl filter-button" data-toggle="tooltip" data-placement="top" title="Approved donors" id="approve_btn" data-filter="approve"><i class="fa fa-user" aria-hidden="true"></i></button>
                    <div class="liner"></div>
                </div>
                <div class="form-inline">
                    <button type="button" class="btn btn-outline-info btn-circle btn-xl filter-button" data-toggle="tooltip" data-placement="top" title="Donors for approving " id="current_btn" data-filter="current"><i class="fa fa-user" aria-hidden="true"></i></button>
                    <div class="liner"></div>
                </div>
                <div class="form-inline">
                    <button type="button" class="btn btn-outline-warning btn-circle btn-xl filter-button" data-toggle="tooltip" data-placement="top" title="Temporary Deffral Donors" id="t_deffer_btn" data-filter="t_deffer"><i class="fa fa-user" aria-hidden="true"></i></button>
                    <div class="liner"></div>
                </div>
                <button type="button" class="btn btn-outline-danger btn-circle btn-xl filter-button" data-toggle="tooltip" data-placement="top" title="Permanent Defferal Donors" id="p_deffer_btn" data-filter="p_deffer"><i class="fa fa-user" aria-hidden="true"></i></button>

                <!--<h6 style="padding-right: 5px;"><span class="badge badge-circu badge-success" >Approved donor</span></h6>
                <h6 style="padding-right: 5px;"><span class="badge badge-info">Waiting donor</span></h6>
                <h6 style="padding-right: 5px;"><span class="badge badge-warning">Temporary deffer donor</span></h6>
                <h6><span class="badge badge-danger">Permanent deffer donor</span></h6>-->
            </div>
        </div>
    </div>
    <div class="col-md-12">

        <span id="output" style="font-weight: bold;"><ul id="finalResult"></ul></span>
        <div id="finalresult" class="col-md-12">
            <?php $values = array_chunk($maindonors, 3)?>
            <?php foreach ($values as $donors):?>
                <div class="row wrap_tag" id="row_id">
                    <?php foreach ($donors as $donor):?>
                        <?php  $status=$donor['donorStatus'];
                        if($status=='approve'):?>
                            <!--                    approved donor-->
                            <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12 filter approve" id="approve" style="height: 100px;  border-style: solid;border-left-color: green; border-left-width: 3px;pdding:10px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
                                <div class="form-inline">
                                    <div class="col-md-3 col-xs-3">
                                        <label><img src="<?php echo $donor['donorImage'];?> " class="img-rounded" id="img" style="width:100px; padding-top: 20px; padding-right: 10px; border-radius: 100px;"></label>
                                    </div>
                                    <div>
                                        <small> Donor id  :</small> <?php echo $donor['donorId']?>
                                        <br>
                                        <?php echo $donor['donorFname']?>  <?php echo $donor['donorLname']?>
                                        <br>
                                        <?php echo $donor['donorNIC']?>
                                    </div>
                                    <div class="col-md-3 col-md-offset-12">
                                        <label class="switch">
                                            <input type="checkbox" name="Transmission" id="status" value="false">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-inline" style="padding-bottom: 5px;">
                                    <div class="col-md-3 col-xs-3" style="padding-bottom: 5px;"></div>
                                    <small class="blood-group">Blood Group :  </small><b><?php echo $donor['donorBloodGroup']?></b>
                                    <span class="pull-right" style="margin-left: 75px;">
                                <a href="<?php echo site_url('/donorapprovals/load_selected_donor_details_for_donor/'.$donor['donorId'])?>" class="badge badge-success">Change Status</a>
                            </span>
                                </div>
                            </div>
                            <!--                    current status donor-->
                        <?php elseif ($status=='current'):?>
                            <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12 filter current" id="current" style="height: 100px; border-style: solid;border-left-color: dodgerblue; border-left-width: 3px; pdding:10px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
                                <div class="form-inline">
                                    <div class="col-md-3 col-xs-3">
                                        <label><img src="<?php echo $donor['donorImage'];?> " class="img-rounded" id="img" style="width:100px; padding-top: 15px; padding-right: 10px; border-radius: 100px;"></label>
                                    </div>
                                    <div>
                                        <small> Donor id  :</small> <?php echo $donor['donorId']?>
                                        <br>
                                        <?php echo $donor['donorFname']?>  <?php echo $donor['donorLname']?>
                                        <br>
                                        <?php echo $donor['donorNIC']?>
                                    </div>
                                    <div class="col-md-3 col-md-offset-12">
                                    </div>
                                </div>
                                <div class="form-inline" style="padding-bottom: 5px;">
                                    <div class="col-md-3 col-xs-3"></div>
                                    <small class="blood-group">Blood Group :  </small><b><?php echo $donor['donorBloodGroup']?></b>
                                    <span class="pull-right" style="margin-left: 75px;">
                                <a href="<?php echo site_url('/donorapprovals/load_selected_donor_details_for_donor/'.$donor['donorId'])?>" class="badge badge-info">Change status</a>
                            </span>
                                </div>
                            </div>

                        <?php elseif ($status=='p_deffer'):?>
                            <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12 filter p_deffer" id="p_differ" style="height: 100px; border-style: solid;border-left-color: darkred; border-left-width: 3px; pdding:10px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
                                <div class="form-inline">
                                    <div class="col-md-3 col-xs-3">
                                        <label><img src="<?php echo $donor['donorImage'];?> " class="img-rounded" id="img" style="width:100px; padding-top: 15px; padding-right: 10px; border-radius: 100px;"></label>
                                    </div>
                                    <div>
                                        <small> Donor id  :</small><?php echo $donor['donorId']?>
                                        <br>
                                        <?php echo $donor['donorFname']?>  <?php echo $donor['donorLname']?>
                                        <br>
                                        <?php echo $donor['donorNIC']?>
                                    </div>
                                    <div class="col-md-3 col-md-offset-12">
                                    </div>
                                </div>
                                <div class="form-inline" style="padding-bottom: 5px;">
                                    <div class="col-md-3 col-xs-3"></div>
                                    <small class="blood-group">Blood Group :  </small><b><?php echo $donor['donorBloodGroup']?></b>
                                    <span class="pull-right" style="margin-left: 75px;">
                                    <a href="<?php echo site_url('/donorapprovals/load_selected_donor_details_for_donor/'.$donor['donorId'])?>" class="badge badge-danger">Change Status</a>
                            </span>
                                </div>
                            </div>
                        <?php else:?>
                            <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12 filter t_deffer" id="t_differ" style="height: 100px; border-style: solid;border-left-color: #FFD700; border-left-width: 3px; pdding:10px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;">
                                <div class="form-inline">
                                    <div class="col-md-3 col-xs-3">
                                        <label><img src="<?php echo $donor['donorImage'];?> " class="img-rounded" id="img" style="width:100px; padding-top: 20px; padding-right: 10px; border-radius: 100px;"></label>
                                    </div>
                                    <div>
                                        <small> Donor id  :</small> <?php echo $donor['donorId']?>
                                        <br>
                                        <?php echo $donor['donorFname']?>  <?php echo $donor['donorLname']?>
                                        <br>
                                        <?php echo $donor['donorNIC']?>
                                    </div>
                                </div>
                                <div class="form-inline" style="padding-bottom: 5px;">
                                    <div class="col-md-3 col-xs-3"></div>
                                    <small class="blood-group">Blood Group :  </small><b><?php echo $donor['donorBloodGroup']?></b>
                                    <span class="pull-right" style="margin-left: 75px;">
                                <a href="<?php echo site_url('/donorapprovals/load_selected_donor_details_for_donor/'.$donor['donorId'])?>" class="badge badge-warning">Change Status</a>
                            </span>
                                </div>
                            </div>
                        <?php endif;?>

                    <?php endforeach;?>
                </div>

            <?php endforeach;?>
        </div>
    </div>
    <!--ajax call for search input to make dynamic search-->
    <script>
        $(document).ready(function(){
//            $('[data-toggle="tooltip"]').tooltip('show');

            $("#search").keyup(function() {
                if ($("#search").val().length > 2) {
                    $.ajax({
                        type: "post",
                        url: "<?php echo base_url()?>/donors/suggest_donors",
                        cache: false,
                        data: 'search=' + $("#search").val(),
//                    dataType: 'json',
                        success: function (response) {
                            console.log(response);
                            $('#finalresult').html("");
                            var obj = JSON.parse(response);
                            if (obj.length > 0) {
                                try {
                                    var donor_data = '';
                                    $.each(obj, function (i, val) {
                                        console.log(val.donorStatus);
                                        if (val.donorStatus == "current") {
                                            donor_data += '<div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12" id="current" style="height: 100px; border-style: solid;border-left-color: green; border-left-width: 7px; position: absolute;">\n' +
                                                '                        <div class="form-inline">\n' +
                                                '                            <div class="col-md-3 col-xs-3">\n' +
                                                '                                <label>image</label>\n' +
                                                '                            </div>\n';
//                                        donor_data += '<td>' + window.j + '</td>';
                                            donor_data += '<div>' + val.donorFname + '  ' + val.donorLname + '</div>';
                                            donor_data += '<br><div>' + val.donorNIC + '  ' + val.donorBloodGroup + '</div>';
                                            donor_data += '</div>\n' +
                                                '                    </div>';

                                        }
                                        else if(val.donorStatus == "approve"){
                                            donor_data += '<div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12" id="approve" style="height: 100px; border-style: solid;border-left-color: dodgerblue; border-left-width: 7px; position: absolute;">\n' +
                                                '                        <div class="form-inline">\n' +
                                                '                            <div class="col-md-3 col-xs-3">\n' +
                                                '                                <label>image</label>\n' +
                                                '                            </div>\n';
//                                        donor_data += '<td>' + window.j + '</td>';
                                            donor_data += '<div>' + val.donorFname + '  ' + val.donorLname + '</div>';
                                            donor_data += '<br><div>' + val.donorNIC + '  ' + val.donorBloodGroup + '</div>';
                                            donor_data += '</div>\n' +
                                                '                    </div>';


                                        }
                                        else if(val.donorStatus == "p_differ"){
                                            donor_data += '<div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12" id="p_differ" style="height: 100px; border-style: solid;border-left-color: darkred; border-left-width: 7px; position: absolute;">\n' +
                                                '                        <div class="form-inline">\n' +
                                                '                            <div class="col-md-3 col-xs-3">\n' +
                                                '                                <label>image</label>\n' +
                                                '                            </div>\n';
//                                        donor_data += '<td>' + window.j + '</td>';
                                            donor_data += '<div>' + val.donorFname + '  ' + val.donorLname + '</div>';
                                            donor_data += '<br><div>' + val.donorNIC + '  ' + val.donorBloodGroup + '</div>';
                                            donor_data += '</div>\n' +
                                                '                    </div>';


                                        }
                                        else{
                                            donor_data += '<div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12" id="t_differ" style="height: 100px; border-style: solid;border-left-color: #FFD700; border-left-width: 7px; position: absolute;">\n' +
                                                '                        <div class="form-inline">\n' +
                                                '                            <div class="col-md-3 col-xs-3">\n' +
                                                '                                <label>image</label>\n' +
                                                '                            </div>\n';
//                                        donor_data += '<td>' + window.j + '</td>';
                                            donor_data += '<div>' + val.donorFname + '  ' + val.donorLname + '</div>';
                                            donor_data += '<br><div>' + val.donorNIC + '  ' + val.donorBloodGroup + '</div>';
                                            donor_data += '</div>\n' +
                                                '                    </div>';


                                        }
                                    });
                                    $('#finalresult').append(donor_data);

//                                items.push($('<li> <a href="<?php //echo base_url()?>///donors/donor_profile/'+val.donorId+'">'+val.donorFname + " " + val.donorLname +"    "+val.donorNIC +'</a></li>'));
                                    /*});
                                    $('#finalResult').append.apply($('#finalResult'), items);*/
                                } catch (e) {
                                    alert('Exception while request..');
                                }
                            } else {
                                $('#finalresult').html($('<li/>').text("No Donor Found"));
                            }

                        },
                        error: function () {
                            alert('Error while request..');
                        }
                    });
                }
                return false;
            });
        });
    </script>
    <script>
        $(function() {
            $('#toggle-one').bootstrapToggle();
        });
        $('.filter-button').click(function(){
            var value = $(this).attr('data-filter');
            if(value == "all")
            {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
//                $('.filter').wrap();
            }
            else {
//                $("#row_id").remove();
//                $(".wrap_tag").unwrap();
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');
            }
            /*$(this).next(".approve").hide(1000).show(3000);
            $(".curent").hide(1000);
            $(".t_deffer").hide(1000);
            $(".p_deffer").hide(1000);
            *//*$('#approve').filter(function(){

            });*/
        });

    </script>
