jQuery(document).ready(function($) {

    $('#addform').validate({
        rules: {
            name: {
                required: true
            },
            description: {
                required: true
            },
            price: {
                required: true,
                number: true
            }
        },
        messages: {

        },
        submitHandler: function(form) {

            var formData = $(form).serialize();

            $.ajax({
                type: 'POST',
                url: "php/preFunction.php?function=addproduct",
                data: formData,
                success: function(data) {
                    console.log(data);
                }
            });

            return false;
        }

    });


    function edit_row(id) {
        console.log(id);
    }


    $.ajax({
        type: 'GET',
        url: "php/preFunction.php?function=view",
        dataType: "html",
        success: function(data) {
            $.each(JSON.parse(data), function(index, value) {
                var row = $("<tr><td>" + value.name + "</td><td>" + value.description + "</td><td>" + value.price + "</td><td><input type='button' class='edit_button' id='edit_button" + value.id + "' value='edit' onclick='edit_row(" + value.id + ");'></td></tr>");
                $("#myData").append(row);
            });
            console.log(data);
        }
    });


});
