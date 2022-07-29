function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    const regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
function integra_new_option(container, descripcion, value){
    let new_option =new_option_sl(descripcion,value);
    $(new_option).appendTo(container);
}



function new_option_sl(descripcion,value){
    return "<option value =" + value + ">" + descripcion + "</option>";
}
let session_id = getParameterByName('session_id');
let dp_pais_id = -1;
let dp_estado_id = -1;
let dp_municipio_id = -1;
let dp_cp_id = -1;
let dp_colonia_postal_id = -1;

let sl_dp_estado_id = $("#dp_estado_id");
let sl_dp_pais_id = $("#dp_pais_id");
let sl_dp_municipio_id = $("#dp_municipio_id");
let sl_dp_cp_id = $("#dp_cp_id");
let sl_dp_colonia_postal_id = $("#dp_colonia_postal_id");
let sl_dp_calle_pertenece_id = $("#dp_calle_pertenece_id");
let sl_dp_calle_pertenece_entre1_id = $("#dp_calle_pertenece_entre1_id");
let sl_dp_calle_pertenece_entre2_id = $("#dp_calle_pertenece_entre2_id");

sl_dp_pais_id.change(function(){
    dp_pais_id = $(this).val();

    let url = "index.php?seccion=dp_estado&ws=1&accion=get_estado&dp_pais_id="+dp_pais_id+"&session_id="+session_id;

    $.ajax({
        type: 'GET',
        url: url,
    }).done(function( data ) {  // Función que se ejecuta si todo ha ido bien
console.log(data);
        $.each(data.registros, function( index, dp_estado ) {
            integra_new_option("#dp_estado_id",dp_estado.dp_pais_descripcion+' '+dp_estado.dp_estado_descripcion,dp_estado.dp_estado_id);
        });
        sl_dp_estado_id.selectpicker('refresh');
    }).fail(function (jqXHR, textStatus, errorThrown){
        console.log(url);
        console.log("Error: "+ textStatus +" "+ errorThrown+" "+jqXHR+" ");
    });
});

sl_dp_estado_id.change(function(){
    dp_estado_id = $(this).val();
    let url = "index.php?seccion=dp_municipio&ws=1&accion=get_municipio&dp_estado_id="+dp_estado_id+"&session_id="+session_id;
    console.log(url);
    $.ajax({
        type: 'GET',
        url: url,
    }).done(function( data ) {  // Función que se ejecuta si todo ha ido bien
        console.log(data);
        $.each(data.registros, function( index, dp_municipio ) {
            integra_new_option("#dp_municipio_id",dp_municipio.dp_estado_descripcion+' '+dp_municipio.dp_municipio_descripcion,dp_municipio.dp_municipio_id);
        });
        sl_dp_municipio_id.selectpicker('refresh');
    }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
        alert('Error al ejecutar');
        console.log("The following error occured: "+ textStatus +" "+ errorThrown);
    });
});


sl_dp_municipio_id.change(function(){
    dp_municipio_id = $(this).val();
    let url = "index.php?seccion=dp_cp&ws=1&accion=get_cp&dp_municipio_id="+dp_municipio_id+"&session_id="+session_id;

    $.ajax({
        type: 'GET',
        url: url,
    }).done(function( data ) {  // Función que se ejecuta si todo ha ido bien
        console.log(data);
        $.each(data.registros, function( index, dp_cp ) {
            integra_new_option("#dp_cp_id",dp_cp.dp_municipio_descripcion+' '+dp_cp.dp_cp_descripcion,dp_cp.dp_cp_id);
        });
        sl_dp_cp_id.selectpicker('refresh');
    }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
        alert('Error al ejecutar');
    });
});

sl_dp_cp_id.change(function(){
    dp_cp_id = $(this).val();
    let url = "index.php?seccion=dp_colonia_postal&ws=1&accion=get_colonia_postal&dp_cp_id="+dp_cp_id+"&session_id="+session_id;

    $.ajax({
        type: 'GET',
        url: url,
    }).done(function( data ) {  // Función que se ejecuta si todo ha ido bien
        $.each(data.registros, function( index, dp_colonia_postal ) {
            integra_new_option("#dp_colonia_postal_id",dp_colonia_postal.dp_colonia_descripcion+' '+dp_colonia_postal.dp_cp_descripcion,dp_colonia_postal.dp_colonia_postal_id);
        });
        sl_dp_colonia_postal_id.selectpicker('refresh');
    }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
        alert('Error al ejecutar');
        console.log(url);
    });
});

sl_dp_colonia_postal_id.change(function(){
    dp_colonia_postal_id = $(this).val();
    let url = "index.php?seccion=dp_calle_pertenece&ws=1&accion=get_calle_pertenece&dp_colonia_postal_id="+dp_colonia_postal_id+"&session_id="+session_id;

    $.ajax({
        type: 'GET',
        url: url,
    }).done(function( data ) {  // Función que se ejecuta si todo ha ido bien
        console.log(data);
        $.each(data.registros, function( index, dp_calle_pertenece ) {
            integra_new_option("#dp_calle_pertenece_id",dp_calle_pertenece.dp_colonia_descripcion+' '+dp_calle_pertenece.dp_cp_descripcion+' '+dp_calle_pertenece.dp_calle_descripcion,dp_calle_pertenece.dp_calle_pertenece_id);
            integra_new_option("#dp_calle_pertenece_entre1_id",dp_calle_pertenece.dp_colonia_descripcion+' '+dp_calle_pertenece.dp_cp_descripcion+' '+dp_calle_pertenece.dp_calle_descripcion,dp_calle_pertenece.dp_calle_pertenece_id);
            integra_new_option("#dp_calle_pertenece_entre2_id",dp_calle_pertenece.dp_colonia_descripcion+' '+dp_calle_pertenece.dp_cp_descripcion+' '+dp_calle_pertenece.dp_calle_descripcion,dp_calle_pertenece.dp_calle_pertenece_id);
        });
        sl_dp_calle_pertenece_id.selectpicker('refresh');
        sl_dp_calle_pertenece_entre1_id.selectpicker('refresh');
        sl_dp_calle_pertenece_entre2_id.selectpicker('refresh');
    }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
        alert('Error al ejecutar');
        console.log(url);
    });
});



$( document ).ready(function() {
    $(".info").fadeTo(7500, 500).slideUp(500, function(){
        $(".info").slideUp(500);
    });
});


$('.open-overlay').click(function() {
    var overlay_navigation = $('.overlay-navigation'),
        nav_item_1 = $('nav li:nth-of-type(1)'),
        nav_item_2 = $('nav li:nth-of-type(2)'),
        nav_item_3 = $('nav li:nth-of-type(3)'),
        nav_item_4 = $('nav li:nth-of-type(4)'),
        nav_item_5 = $('nav li:nth-of-type(5)'),
        top_bar = $('.bar-top'),
        middle_bar = $('.bar-middle'),
        bottom_bar = $('.bar-bottom');

    overlay_navigation.toggleClass('overlay-active');
    if (overlay_navigation.hasClass('overlay-active')) {

        top_bar.removeClass('animate-out-top-bar').addClass('animate-top-bar');
        middle_bar.removeClass('animate-out-middle-bar').addClass('animate-middle-bar');
        bottom_bar.removeClass('animate-out-bottom-bar').addClass('animate-bottom-bar');
        overlay_navigation.removeClass('overlay-slide-up').addClass('overlay-slide-down')
        nav_item_1.removeClass('slide-in-nav-item-reverse').addClass('slide-in-nav-item');
        nav_item_2.removeClass('slide-in-nav-item-delay-1-reverse').addClass('slide-in-nav-item-delay-1');
        nav_item_3.removeClass('slide-in-nav-item-delay-2-reverse').addClass('slide-in-nav-item-delay-2');
        nav_item_4.removeClass('slide-in-nav-item-delay-3-reverse').addClass('slide-in-nav-item-delay-3');
        nav_item_5.removeClass('slide-in-nav-item-delay-4-reverse').addClass('slide-in-nav-item-delay-4');
    } else {
        top_bar.removeClass('animate-top-bar').addClass('animate-out-top-bar');
        middle_bar.removeClass('animate-middle-bar').addClass('animate-out-middle-bar');
        bottom_bar.removeClass('animate-bottom-bar').addClass('animate-out-bottom-bar');
        overlay_navigation.removeClass('overlay-slide-down').addClass('overlay-slide-up')
        nav_item_1.removeClass('slide-in-nav-item').addClass('slide-in-nav-item-reverse');
        nav_item_2.removeClass('slide-in-nav-item-delay-1').addClass('slide-in-nav-item-delay-1-reverse');
        nav_item_3.removeClass('slide-in-nav-item-delay-2').addClass('slide-in-nav-item-delay-2-reverse');
        nav_item_4.removeClass('slide-in-nav-item-delay-3').addClass('slide-in-nav-item-delay-3-reverse');
        nav_item_5.removeClass('slide-in-nav-item-delay-4').addClass('slide-in-nav-item-delay-4-reverse');
    }
})






