/**
 * Created by Erwin on 06/11/2016.
 */
$(document).ready(function(){
    loadProperties();
});
function loadProperties(){
    var container = $("#data_view");
    var route = "http://localhost:8000/properties_listing";

    container.empty();
    $.get(route, function(res){
        console.log(res);
        $(res).each(function(key,properties){
            console.log(key);
            console.log(properties);
            container.append(""+
            "<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 rs_toppadder30 mix mix-all psd'data-value='1'>"+
                "<div class='rs_product_div'>"+
                    "<div class='rs_featureddiv'>"+
                        "Featured"+
                    "</div>"+
                    "<div class='rs_product_img'>"+
                        "<img src='properties_images/"+properties.image+"' class='img-responsive' alt=''>"+
                        "<div class='rs_overlay'>"+
                            "<div class='rs_overlay_inner'>"+
                                "<ul>"+
                                    "<li>" +
                                        "<a class='fancybox ' data-fancybox-group='product' title='"+properties.name +"'>" +
                                            "<i class='fa fa-eye'></i>" +
                                        "</a> " +
                                    "</li>" +
                                    "<li>" +
                                        "<a href='' class=''>" +
                                            "<i class='fa fa-shopping-cart'></i>" +
                                        "</a>" +
                                    "</li>"+
                                "</ul>"+
                            "</div>"+
                        "</div>"+
                        "<div class='rs_product_price'>"+
                            "<h2><small>$"+properties.price +"</small> </h2>"+
                        "</div>"+
                    "</div>"+
                    "<div class='rs_product_detail'>"+
                        "<h5><a href='product_single.html'>"+properties.name +"</a></h5>"+
                        "<p>"+properties.description +"</p>"+
                        "<p>"+properties.location +"</p>"+
                        "<div class='rs_rating'>"+
                            "<form>"+
                                "<input value='5' type='number' class='rating' min=0 max=5 step=0.5 data-size='xs'>"+
                            "</form>"+
                        "</div>"+
                    "</div>"+
                    "<div class='rs_product_div_footer'>"+
                        "<div class='rs_author_div'>"+
                            "<img src='images/author1.jpg' class='img-responsive' alt=''>"+
                            "<div>"+
                                "<h4><a href='author_dashboard.html'>Jashon Matt</a></h4>"+
                                "<p><a href='' PSD Templates</a></p>"+
                            "</div>"+
                        "</div>"+
                        "<div class='rs_share'>"+
                            "<ul>"+
                                "<li><a href='/properties/"+properties.id +"'><i class='fa fa-eraser'></i> <span>12</span></a></li>"+
                                "<li><a href=''><i class='fa fa-comment-o'></i> <span>12</span></a></li>"+
                                "<li><a href=''><i class='fa fa-heart-o'></i> <span>98</span></a></li>"+
                            "</ul>"+
                        "</div>"+
                    "</div>"+
                "</div>"+
            "</div>"+
            "");
            console.log(container);
         });
        });

}


function Eliminar(btn){
    var route = "http://localhost:8000/genero/"+btn.value+"";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'json',
        success: function(){
            Carga();
            $("#msj-success").fadeIn();
        }
    });
}

function Mostrar(btn){
    var route = "http://localhost:8000/genero/"+btn.value+"/edit";

    $.get(route, function(res){
        $("#genre").val(res.genre);
        $("#id").val(res.id);
    });
}

$("#actualizar").click(function(){
    var value = $("#id").val();
    var dato = $("#genre").val();
    var route = "http://localhost:8000/genero/"+value+"";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {genre: dato},
        success: function(){
            Carga();
            $("#myModal").modal('toggle');
            $("#msj-success").fadeIn();
        }
    });
});