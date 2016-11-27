$(document).ready(function() {
    loadUsers();
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});

function loadUsers(){
    var page = 1;
    var route = "http://localhost:8000/users_listing";

    $.ajax({
        url: route,
        data: {
            page: page,
         },
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $("#data_view").html(data);
        }
    });
}
$(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    var route = "http://localhost:8000/users_listing";

    $.ajax({
        url: route,
        data: {
            page: page

        },
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $("#data_view").html(data);
        }
    });
});