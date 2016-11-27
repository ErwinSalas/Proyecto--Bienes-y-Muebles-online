/**
 * Created by Erwin on 06/11/2016.
 */
$(document).ready(function(){
    loadProperties();
});
$(document).on('click','.pagination a',function(e){
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        var route = "http://localhost:8000/properties_listing";
        var search=$('#input-search').val();
        $.ajax({
               url: route,
               data: {
                   page: page,
                   filter: search
                },
            type: 'GET',
               dataType: 'json',
               success: function(data){
                   $("#data_view").html(data);
               }
        });
    });
$('#btn-search').on('click',function(e){
    e.preventDefault();
    loadProperties();

});

function loadProperties(){
    var page = 1;
    var route = "http://localhost:8000/properties_listing";
    var search=$('#input-search').val();
    $.ajax({
        url: route,
        data: {
            page: page,
            filter: search
        },
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $("#data_view").html(data);
        }
    });
}



function Eliminar(id){
    var route = "http://localhost:8000/properties/"+id+"";
    var token = $("#_token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'json',
        success: function(){
            loadProperties();

        }
    });
    console.log(token);
}


function actualizar(id){
    var route = "http://localhost:8000/properties/"+id+"";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {
            name:$('#name').val(),
            state:$('#state').val(),
            price:$('#price').val(),
            description:$('#unit_type').val(),


        },
        success: function(){

        }
    });
}