$(document).ready(function(){
        $('.formButton').click(function(){
        if ($('.formInput[type=email]').val() == "") {
            $('.error').html("<span style='color: red;'> Email is Required </span>")
        }
        if ($('.formInput[type=password]').val() == "") {
            $('.error2').html("<span style='color: red;'> Password is Required </span>")
        }
    })

    $(document).ready(function() {
    // When the label is clicked, toggle the checkbox
        $('#rememberMe label[for="rememberMe"]').on('click', function() {
        $('#rememberMe').prop('checked', !$('#rememberMe').prop('checked'));
    });
    });
});