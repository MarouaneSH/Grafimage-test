$(document).ready(function(){

    // Add event handler for inscription BTN
    $(".btn-inscription").click(function(){
        console.log("sdds");
        $('html, body').animate({
            scrollTop: $(".br-section-inscription").offset().top
        }, 500);
    });
    
    //intialize time picker (heur passage)
    $('#pickerhour').timepicker({ 'timeFormat': 'H:i' });;

    //handle form submission
    $("#br-form").submit(function(e){
        $('#validation-errors').html('');
        e.preventDefault();
        //check if checkbox is checked
        if($('input[name=settlement]').is(":checked")) {
            $.ajax({
                type:'POST',
                beforeSend : function(){
                    $(".overlay").show();
                },  
                url:'/inscription',
                data:$(this).serialize(),
                success:function(data){
                    $(".overlay").hide();
                    $('#inscription-modal').modal({show : true})
                },
                error: function (xhr) {
                    $(".overlay").hide();
                    $('#validation-errors').html('');
                    $.each(xhr.responseJSON.errors, function(key,value) {
                      $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
                  }); 
                 },
             });
        } else {
            $('#validation-errors').append('<div class="alert alert-danger">Vous devez accepter les conditions de participation à la Barbichette Cup.</div');
        }
       
    });

    //show navbar
    $(".nav-toggle").click(function(){
        $("#main-nav .nav-content").toggle(500,"swing");
    });

    $(".hide-nav").click(function(){
        $("#main-nav .nav-content").hide();
    })


});