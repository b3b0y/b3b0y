jQuery(document).ready(function($) {

    /* validation */
     $("#login-form").validate({
         rules:{
             password: {
                 required: true,
             },
             user_email: {
               required: true,
               email: true
             },
         },
         messages:
         {
             password:{
                     required: "please enter your password"
             },
             user_email: "please enter your email address",
         },
         submitHandler: function(form) {
             var data = $("#login-form").serialize();
             $.ajax({
                 type : 'POST',
                 url  : 'php/preFunction.php?function=login_process',
                 data : data,
                 success :  function(response)
                 {
                     console.log(response);
                     if(response=="ok"){
                             $("#message").html('<div class="alert alert-success">Signing In ...</div>');
                             setTimeout(' window.location.href = "home.php"; ',2000);
                     }
                     else{
                             $("#message").html('<div class="alert alert-danger">'+response+' !</div>');
                     }
                 }
             });
             return false;
         }
    });
     /* validation */

    $("#register-form").validate({
        rules: {
            user_name: {
                required: true,
                minlength: 3
            },
            password2: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
                cpassword: {
                required: true,
                equalTo: '#password2'
            },
            user_email: {
                required: true,
                email: true
            },
        },
        messages:
        {
            user_name: "please enter user name",
            password2:{
                required: "please provide a password",
                minlength: "password at least have 8 characters"
            },
            user_email: "please enter a valid email address",
            cpassword:{
                required: "please retype your password",
                equalTo: "password doesn't match !"
            }
        },
        submitHandler: function(form) {
            var data = $("#register-form").serialize();

            $.ajax({
                type : 'POST',
                url  : 'php/preFunction.php?function=register',
                data : data,
                success :  function(data)
                {
                    if(data==1){
                       $("#message2").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
                       $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
                    }
                    else if(data=="registered")
                    {
                         $("#message2").html('<div class="alert alert-success">Signing Up ...</div>');
                          setTimeout('$("form.form-register").hide(); $("form.form-signin").show();',2000);
                    }
                    else{
                         $("#message2").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
                     }
                 }
            });
            return false;
        }
    });
});

$(document).ready(function(){
    $("form.form-register").hide();
    $("#show-signup").click(function(){
        $("form.form-register").show();
        $("form.form-signin").hide();
    });
    $("#show-login").click(function(){
        $("form.form-register").hide();
        $("form.form-signin").show();
    });
});
