

$(document).ready(function(){
    $('.person').hide();
    $('#fname_input').val('');
    $('#lname_input').val('')
    $('#age_input').val(18);
    $('#comment_input').val('');
    $('#rate_input').val(0);
    //Star-Rating configuration at bottom of <body>
    
    //$('.rating').on('rating.change', function(event, value, caption) {
    //    console.log(value);
    //});
    
    $('#register_button').click(function(){
       var fname = $('#fname_input').val();
       var lname = $('#lname_input').val();
       var age = $('#age_input').val();
       var comment = $('#comment_input').val();
       var rate = $('#rate_input').val();
       //Ajax Call
       $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "php/add_candid.php",
        data: {lname: lname, fname: fname, age: age, rate: rate, comment: comment},
        dataType: "html",   //expect html to be returned
        success: function(response){                    
            $('#content').append(response);
        }

    });//Ajax call end  
    });//Register Button onclick end
    
    $(document).on('change', '#candid_list', function(){
       var id_candid = $('#candid_list').find(":selected").val();
       console.log(id_candid);
       
       $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "php/get_candid.php",
        data: {candid_id: id_candid},
        dataType: "html",   //expect html to be returned
        success: function(response){
            var person = response.split('|');
            // person[0] => age
            // person[1] => rate
            // person[2] => comment
            $('.person').css({"display": "normal"});
            $('person').show();
            $('#age').html(person[0]);
            $('#comment').html(person[2]);
            $('#rate').rating('update', person[1]);
            
        }
    });
       
    });
    
});

    