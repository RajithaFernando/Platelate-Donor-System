<?= $title;
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 10/26/2017
 * Time: 7:27 AM
 *
 */?>
<style>
    /*#search {
        background-color: lightyellow;
        outline: medium none;
        !*padding: 8px;
        width: 300px;
        *!
        border-radius: 2px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        border: 2px solid orange;
    }*/

    /*    ul {
            width: 300px;
            margin: 0px;
            padding-left: 0px;
        }

        ul li {
            list-style: none;
            background-color: lightgray;
            margin: 1px;
            padding: 1px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }*/
</style>
<script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>
<div class="col-sm-6 offset-3">
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
<div>
    <p>Suggestions : <span id="output" style="font-weight: bold;"><ul id="finalResult"></ul></span></p>
</div>
<script>
    $(document).ready(function(){
        $("#search").keyup(function() {
            if ($("#search").val().length > 3) {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url()?>/donors/suggest_donors",
                    cache: false,
                    data: 'search=' + $("#search").val(),
//                    dataType: 'json',
                    success: function (response) {
                        //console.log(response);
                        $('#finalResult').html("");
                        var obj = JSON.parse(response);
                        if (obj.length > 0) {
                            try {
                                var items = [];
                                $.each(obj, function (i, val) {
                                    items.push($('<a href="#">').text(val.donorFname + " " + val.donorLname +"    "+val.donorNIC));
                                });
                                $('#finalResult').append.apply($('#finalResult'), items);
                            } catch (e) {
                                alert('Exception while request..');
                            }
                        } else {
                            $('#finalResult').html($('<li/>').text("No Donor Found"));
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
