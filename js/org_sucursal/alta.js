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
});

function getAbsolutePath() {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
}
let url = getAbsolutePath();
let base_js = url+'js/base.js';

document.write('<script src="'+base_js+'"></script>');
document.write('<script src="/../tg_empresa/js/direcciones.js"></script>');

let session_id = getParameterByName('session_id');


let sl_local_dp_colonia_postal_id = $("#dp_colonia_postal_id");
let sl_dp_calle_pertenece_entre1_id = $("#dp_calle_pertenece_entre1_id");
let sl_dp_calle_pertenece_entre2_id = $("#dp_calle_pertenece_entre2_id");



sl_local_dp_colonia_postal_id.change(function(){
    dp_colonia_postal_id = $(this).val();
    let url = "index.php?seccion=dp_calle_pertenece&ws=1&accion=get_calle_pertenece&dp_colonia_postal_id="+dp_colonia_postal_id+"&session_id="+session_id;

    $.ajax({
        type: 'GET',
        url: url,
    }).done(function( data ) {  // Función que se ejecuta si todo ha ido bien
        console.log(data);
        $.each(data.registros, function( index, dp_calle_pertenece ) {
            integra_new_option("#dp_calle_pertenece_entre1_id",dp_calle_pertenece.dp_colonia_descripcion+' '+dp_calle_pertenece.dp_cp_descripcion+' '+dp_calle_pertenece.dp_calle_descripcion,dp_calle_pertenece.dp_calle_pertenece_id);
            integra_new_option("#dp_calle_pertenece_entre2_id",dp_calle_pertenece.dp_colonia_descripcion+' '+dp_calle_pertenece.dp_cp_descripcion+' '+dp_calle_pertenece.dp_calle_descripcion,dp_calle_pertenece.dp_calle_pertenece_id);
        });
        sl_dp_calle_pertenece_entre1_id.selectpicker('refresh');
        sl_dp_calle_pertenece_entre2_id.selectpicker('refresh');
    }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
        alert('Error al ejecutar');
        console.log(url);
    });
});

let fecha_inicio_operaciones = $("#fecha_inicio_operaciones");
let fecha_ultimo_cambio_sat = $("#fecha_ultimo_cambio_sat");

fecha_inicio_operaciones.change(function () {
    fecha_ultimo_cambio_sat.val(fecha_inicio_operaciones.val());
});

