$(document).ready(function(){
    $.ajax({
        url:"<?php echo base url()?>/charts/get_linegraph",
        type:"GET",
        success:function (data) {
            console.log(data)
        },
        error:function (data) {
            console.log(data)
        }

    });
});