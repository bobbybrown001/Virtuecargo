$(document).ready(function(){
    $('.formButton').click(function(){
        // Full Name
        if ($('.formInput[type=text]').val() == "") {
            $('.error').html("<span style='color: red;'> Full Name is Required </span>")
        }

        // Emial
        if ($('.formInput[type=email]').val() == "") {
            $('.error2').html("<span style='color: red;'> Email is Required </span>")
        }

        // Password
        if ($('#password').val() == "") {
            $('.error3').html("<span style='color: red;'> Password is Required </span>")
        }

        // confirm password
        if ($('#confirmPassword').val() == ""){
            $('.error4').html("<span style='color: red;'> Confirm Password is Required </span>")
        }

        // confirm password
        if ($('#password').val() !== $('#confirmPassword').val()){
            $('.error4').html("<span style='color: red;'> Password Does not Match </span>")
        }
            
        // Phone Number
        if ($('.formInput[type=number]').val() == "") {
            $('.error5').html("<span style='color: red;'> Phone is Required </span>")
        }
    });
});