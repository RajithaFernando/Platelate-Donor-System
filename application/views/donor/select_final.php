<!-- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script src="<?php echo base_url('assets/bootstrap/js/tsort.min.js');?>"></script>

<style>
    /*span . i {
        color: white;
    }
    span . input {
        background: none;
        color: white;
        padding: 0;
        border: 0;
    }
    */
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
</style>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Donor list</li>
</ol>

<div class="form-group">
    <div class="form-row" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s; margin-top: 25px;padding: 20px;">
<!--        <label>Blood Group    :   </label>-->
        <select name="bloodGroup" id="bloodgroup" selected="None" class="selectpicker box-shadow" style="padding: 5px;">
            <option selected="true" disabled="disabled" value="">-- Select Blood Group --</option>
            <option value="A+" id="getBgroup">A+</option>
            <option value="A-" id="getBgroup">A-</option>
            <option value="B+" id="getBgroup">B+</option>
            <option value="B-" id="getBgroup">B-</option>
            <option value="AB+" id="getBgroup">AB+</option>
            <option value="AB-" id="getBgroup">AB-</option>
            <option value="O+" id="getBgroup">O+</option>
            <option value="O-" id="getBgroup">O-</option>
            <option value="All">None</option>
        </select>
        <button type="button" class="btn btn-info pull-left" value=" Search " id="search"  name="search" >
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </div>
</div>



<!--*******************-->
<div class="col-md-12 card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px; transition: 0.3s;"">
    <table class="table table-hover table-responsive table-striped table-bordered tableSorter" id="response_donors" style="padding-left: 140px;">
        <thead>
        <tr>
            <th column-data-id="donor_name" style="background-color: #002752; color: #e1e8ed; text-align: center;">
                Rank
            </th>

            <th column-data-id="donor_name" style="background-color: #002752; color: #e1e8ed; text-align: center;">
                Name
            </th>
            <th data-sortBy="numeric" column-data-id="donor_distance" style="background-color: #002752; color: #e1e8ed; text-align: center;">
                Distance (km)
            </th>
            <th data-sortBy="numeric" column-data-id="donation_count" style="background-color: #002752; color: #e1e8ed; text-align: center;">
                Number of Donation
            </th>

            <th column-data-id="donation_remarks" style="background-color: #002752; color: #e1e8ed; text-align: center;">
                Last Donation Remarks
            </th>

            <th column-data-id="land_number" style="background-color: #002752; color: #e1e8ed; text-align: center;">
                Land phone number
            </th>
            <th column-data-id="mobile_number" style="background-color: #002752; color: #e1e8ed; text-align: center;">
                Mobile number
            </th>
            <th column-data-id="donor_response" style="background-color: #002752; color: #e1e8ed; text-align: center;">
                Response
            </th>
        </tr>
        </thead>
        <tbody id="response_donors_table">
        </tbody>
    </table>
</div>
<!--<!-- Response Modal -->
<div id="response_modal" class="modal fade" role="dialog" style="vertical-align: middle;">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <?php echo form_open_multipart()?>
            <div class="modal-body" style="text-align: center;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <br>
                <div id="pheader">
                    <h1 class="page-title"><b></b></h1>
                </div>
                <div class="form-inline">
                    <div class="col-md-4">
                        <label>Donor Id   :</label>
                    </div>
                    <input class="form-control" id="donor_id" readonly></input>
                </div>
                <hr>
                <div class="form-inline">
                    <div class="col-md-4">
                        <label>Donor name   :</label>
                    </div>
                    <input class="form-control" id="donor_name" readonly></input>
                </div>
                <hr>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <button  data-id=response_type class="btn btn-success btn-response" value="accepted" >Accepted</button>
                <button  data-id=response_type class="btn btn-warning btn-response" value="responsed" >Responded</button>
                <button  data-id=response_type class="btn btn-danger btn-response" value="not_responsed" >Not responded</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <?php echo form_close();?>
        </div>

    </div>
</div>


<script>
//    define global variable j for get rank
    var j=0;
    $(document).ready(function(){

        $("#search").click(function(ex){
            window.j=0;
            var bloodgroup=$('#bloodgroup').val();
            //var bloodgroup = $('#bloodgroup option:selected').text();
            $.ajax({
                type: "post",
                url: '<?php echo base_url()?>/donors/new_select',
                cache: false,
                data: {'bloodgroup': bloodgroup},
                success: function(data){
                    //console.log(data);
                    $('#response_donors_table').html("");
                    var obj = JSON.parse(data);
                    if (obj.length > 0) {
                        try {
                            var donor_data = '';
                            $.each(obj, function (i, val) {
                                window.j=window.j+1;
                                donor_data += '<tr>';
                                donor_data += '<td style="text-align: center;">' + window.j + '</td>';
                                donor_data += '<td style="text-align: center;">' + val.donorFname +'  ' + val.donorLname + '</td>';
                                donor_data += '<td style="text-align: center;">' + val.donorDistance + '</td>';
                                donor_data += '<td style="text-align: center;">' + val.number_of_donation + '</td>';
                                donor_data += '<td style="text-align: center;">' + val.donorRemarks + '</td>';
                                donor_data += '<td style="text-align: center;">' + val.landTeleNo + '</td>';
                                donor_data += '<td style="text-align: center;">' + val.mobileTeleNo + '</td>';
                                donor_data += '<td style="text-align: center;"><button  type="button" class="btn btn-info btn-md response response_btn" name="response" data-id="'+val.donorId+ '" id=' + val.donorId + ' value="Response">Response</button></td>';
                                donor_data += '</tr>';
                            });
                            $('#response_donors_table').append(donor_data);

                        } catch (e) {
                            alert('Exception while request..');
                        }
                    }
                    else {
                        $('#response_donors_table').html($('<div>').text("No Donor Found"));
                    }
                },
                error: function () {
                    alert('Error while request..');
                }
            });

            //        click for modal to assign data
            $(document).on('click','.response',function(){
                var donor_id=$(this).attr("data-id");

//                clear if pheader with some val hen loaded
                $('#pheader').empty();

                //alert (donor_id);
                $.ajax({
                    method:'post',
                    url:'<?php echo base_url()?>/donors/get_donor_by_donor_id',
                    data:{'donorId':donor_id},
                    dataType:"json",
                    success:function(data){
                        //console.log(data);
                        $('#donor_id').val(data.donorId);
                        $('#donor_name').val(data.donorFname);
                        $('#response_type ').val(data.donorId);
                        jQuery.noConflict(); //to avoid jquery conflict
                        $('#response_modal').modal('show');
//                        btn.attr('disabled', true);
//                        var btn = $(this);
                    }
                });
            });


//        add the point according to response.. this will run whe clicking the response button

            $("#response_modal").on('click','.btn-response',(function(e){

                e.preventDefault();
//        alert("anvmb");
                var id =$('#donor_id').val();
                var response = $(this).attr("value");
                //alert(id);
                $.ajax({
                    type:"post",
                    url:"<?php echo base_url('/donors/add_points')?>",
                    data:{'donorResponse':response,'donorId':id},
                    success:function(data){


                        if(data=="success"){

//                            response when record is successful
                            var html = "<div id=\"alert\" class=\"alert alert-success col-md-10 col-md-offset-1\"><strong>Successfully recorded!</strong></div>";
                            $('#pheader').append(html);

//                            prevent duplicte submitted of one donor response
                            $(".response_btn[data-id='"+id+"']").attr('disabled', true);


                            //$().insertAfter('#pheader');
                            //alert("successfully recorded.");
                            //$('#response_modal').modal('hide');
                            //$(".btn-response").attr("disabled", true);
                            //window.scrollTo(0,0);
                        }
                        else{
                            alert("something wrong. please select one option here.");
                        }
                    }
                });
                e.preventDefault();

            }));
            ex.preventDefault();
        });
        $('table.tableSorter').tableSort( {
            sortBy: ['Nosort','Nosort','numeric','Nosort','Nosort','Nosort'],
            animation: 'slideLeftAll',
            speed: 400,
            distance: '200px',
            delay: 50
        } );

    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
            });
</script>

