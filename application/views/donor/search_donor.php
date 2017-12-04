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
<script>
    $(document).ready(function(){
        $("#search").keyup(function(){
            if($("#search").val().length>2){
                $.ajax({
                    type: "post",
                    url: "http://localhost/pdmsMaharagama/index.php/donors/suggest_donors",
                    cache: false,
                    data:'search='+$("#search").val(),
                    dataType: 'json',
                    success: function(response){
                        $('#finalResult').html("");
                        var obj = JSON.parse(response);
                        if(obj.length>0){
                            try{
                                var items=[];
                                $.each(obj, function(i,val){
                                    items.push($('<li/>').text(val.donorFname + " " + val.donorLname));
                                });
                                $('#finalResult').append.apply($('#finalResult'), items);
                            }catch(e) {
                                alert('Exception while request..');
                            }
                        }else{
                            $('#finalResult').html($('<li/>').text("No Data Found"));
                        }

                    },
                    error: function(){
                        alert('Error while request..');
                    }
                });
            }
            return false;
        });
    });
</script>
<form class="form-inline my-2 my-lg-0 mr-lg-2">

    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Search for..." id="search">
        <span class="input-group-btn">
                      <button class="btn btn-primary" type="button">
                        <i class="fa fa-search"></i>
                      </button>
        </span>
    </div>
</form>
<div>
    <p>Suggestions : <span id="output" style="font-weight: bold;"><ul id="finalResult"></ul></span></p>
</div>
<!--<script>
    function showSuggestion(str){
        if(str.length == 0){
            document.getElementById('output').innerHTML ='';
        }else{
            //ajax request
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('output').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","<?php /*echo base_url()*/?>/donors/suggest_donors"+str,true);
            xmlhttp.send();
        }

    }
</script>-->