// <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script><!-- jQuery Library-->

$(function(){
    $.validator.setDefaults({
        // errorClass: 'help-block',
        highlight: function(element){
            $(element)
                .closest('form-group')
                .addClass('has-error');
        },
        unhighlight: function(element){
            $(element)
                .closest('form-group')
                .removeClass('has-error');
        }
    });

    $("#register").validate({
        rules:{
            employee_firstname:{
                required:true,
                minlength:2,
                nowhitespace: true,
                lettersonly: true
            },
            employee_lastname:{
                required:true,
                minlength:2,
                nowhitespace: true,
                lettersonly: true
            },
            employee_email:{
                required: true
            },
            employee_teleNo:{
                required:true
            }

        },
        messages:{
            employee_firstname:{
                required:"enter name",
                minlength:"at least 2 characters",
                nowhitespace: "nowhitespace",
                lettersonly: "lettersonly"
            },
            employee_lastname:{
                required:"enter name",
                minlength:"at least 2 characters",
                nowhitespace: "nowhitespace",
                lettersonly: "lettersonly"
            },
            employee_email:{
                required:"enter email"
            },
            employee_teleNo:{
                required:"enter Telephone number"
            }
        }
    });

});

